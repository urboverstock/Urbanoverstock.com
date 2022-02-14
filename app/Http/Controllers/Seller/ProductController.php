<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDocument;
use App\Models\ProductCategory;
use App\Models\ProductCompanies;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductWishlist;
use App\Models\ProductFavourite;
use Auth, Validator;
use App\Models\Notification;
use App\Models\UserOffer;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Support\Facades\Crypt;

class ProductController extends Controller
{
    public $uploadImagePath = '/assets/images/products';

    //Add product form and save to the table
    public function addProduct(Request $request){

        // print_r($request->all());die();
        $product_categories = ProductCategory::all();
        $product_companies = ProductCompanies::all();

        if($request->isMethod('post')){

            $validator = Validator::make($request->all(), [
                'category_id' => 'required',
                'brand' => 'required',
                // 'name' => 'required|unique:products,name,NULL,id,deleted_at,NULL',
                'name' => 'required',
                'sku' => 'unique:products,sku,NULL,id,deleted_at,NULL',
                'price' => 'required|digits_between:1,10',
                // 'gender' => 'required|in:M,F',
                // 'company_id' => 'required',
                'description' => 'required',
                'quantity' => 'required', 
                // 'image' => 'required|mimes:jpg,jpeg,png'
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }

            $extensions = $request->extension;

            if(isset($extensions))
            {
                foreach ($extensions as $key => $value) {
                // print_r($value);die();
                    if($value != 'jpg' && $value != 'jpeg' && $value != 'png')
                    {
                        return redirect()->back()->with('error', 'The image file must be jpg, jpeg, png');
                    }
                }
            }

            $product                = new Product;
            $product->user_id       = Auth::id();
            $product->name          = $request->name;
            $product->description   = $request->description;
            $product->price         = $request->price;
            $product->status        = $request->status;
            // $product->gender        = $request['gender'];
            $product->category_id   = $request->category_id;
            // $product->company_id    = $request['company_id'];
            $product->brand    = $request->brand;
            //$product->compare_price    = $request->compare_price;
            //$product->cost_per_price    = $request->cost_per_price;

            $slug = \Str::slug($request->name);
            $count = Product::whereRaw("sku RLIKE '^{$slug}(-[0-9]+)?$'")->count();
            $slug = $count ? "{$slug}-{$count}" : $slug;

            $product->sku    = $slug;
            //$product->charge_tax    = $request->charge_tax;
            //$product->track_quantity    = $request->track_quantity;
            //$product->continue_selling    = $request->continue_selling;
            $product->quantity    = $request->quantity;
            $product->tags    = $request->tags;
            
            if($product->save()){

                if(isset($request['image']) && !empty($request['image'])){

                    $files = $request->image;
                    if (count($files)) {
                        // foreach ($files as $key => $file) {
                        //     $extension = $file->getClientOriginalExtension();
                        //     $picture = uniqid() . date('YmdHis') . '.' . $extension;
                        //     $destinationPath = base_path() . '/public'.$this->uploadImagePath;
                            
                        //     $file->move($destinationPath, $picture);
                        //     $image = new ProductImage;
                        //     $image->product_id = $product->id;
                        //     $image->file = $this->uploadImagePath . '/' .$picture;
                        //     $image->file_type = 'I';
                        //     $image->status = '1';
                        //     $image->save();
                        // }

                        foreach ($files as $key => $file) {
                            $picture = $file.'.png';

                            $image = file_get_contents($file);

                            $fileName = uniqid() . date('YmdHis') . '.png';

                            file_put_contents( 'assets/images/products/'.$fileName, $image);
                            $image = new ProductImage;
                            $image->product_id = $product->id;
                            $image->file = '/assets/images/products/'.$fileName;
                            $image->file_type = 'I';
                            $image->status = '1';
                            $image->save();
                        }
                    }
                }

                return redirect()->route('sellerView_profile')->with('success', 'Product added successfully');
            }else{
                return redirect()->back()->with('error', COMMON_ERROR);
            }
        }

        return view('seller.product.add_product', compact('product_categories','product_companies'));
    }

    //Edit product form and update to the table
    public function editProduct(Request $request, $product_id)
    {
        $product_categories = ProductCategory::all();
        $product_companies = ProductCompanies::all();
        $product = Product::where('id', $product_id)
        ->with('product_image')
        ->first();

        // print_r($product);die();

        if($request->isMethod('post')){

            $postData = $request->all();

            $validator = Validator::make($request->all(), [
                'category_id' => 'required',
                'brand' => 'required',
                // 'name' => 'required|unique:products,name,NULL,id,deleted_at,'.$product_id,
                'name' => 'required',
                'sku' => 'unique:products,sku,NULL,id,deleted_at,'.$product_id,
                'price' => 'required|digits_between:1,10',
                // 'gender' => 'required|in:M,F',
                // 'company_id' => 'required',
                'description' => 'required',                
                'quantity' => 'required',
                // 'image' => 'mimes:jpg,jpeg,png'
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }

            // $checkExists = Product::where(['name' => $request->name, 'user_id' => Auth::user()->id])
            // ->where('brand', $request->brand)
            // ->where('id', '!=', $product_id)
            // ->first();
   
            // if ($checkExists) {
            //     return Redirect()->back()->withinput()->with('error', 'Category Already Exists.');
            // }

            $product = Product::find($product_id);

            if(empty($product)){
                return redirect()->back()->with('error', COMMON_ERROR);
            }

            $extensions = $request->extension;

            if(isset($extensions))
            {
                foreach ($extensions as $key => $value) {
                // print_r($value);die();
                    if($value != 'jpg' && $value != 'jpeg' && $value != 'png')
                    {
                        return redirect()->back()->with('error', 'The image file must be jpg, jpeg, png');
                    }
                }
            }

            $product->user_id       = Auth::id();
            $product->user_id       = Auth::id();
            $product->name          = $request->name;
            $product->description   = $request->description;
            $product->price         = $request->price;
            // $product->gender        = $request->gender;
            $product->category_id   = $request->category_id;
            // $product->company_id    = $request->company_id;
            $product->brand    = $request->brand;
            //$product->compare_price    = $request->compare_price;
            //$product->cost_per_price    = $request->cost_per_price;
            $product->status        = $request->status;
            
            if($product->sku != '')
            {
                $slug = $product->sku;
            }
            else
            {
                $slug = \Str::slug($request->name);
                $count = Product::whereRaw("sku RLIKE '^{$slug}(-[0-9]+)?$'")->count();
                $slug = $count ? "{$slug}-{$count}" : $slug;
            }
            

            $product->sku    = $slug;
            //$product->charge_tax    = $request->charge_tax;
            //$product->track_quantity    = $request->track_quantity;
            //$product->continue_selling    = $request->continue_selling;
            $product->quantity    = $request->quantity;
            $product->tags    = $request->tags;
            // print_r($product);die();
            if($product->save()){

                if(isset($request['image']) && !empty($request['image'])){

                    $files = $request->image;
                    if (count($files)) {
                        foreach ($files as $key => $file) {
                            // $extension = $file->getClientOriginalExtension();
                            // $picture = uniqid() . date('YmdHis') . '.' . $extension;
                            // $destinationPath = base_path() . '/public'.$this->uploadImagePath;
                            
                            // $file->move($destinationPath, $picture);
                            $picture = $file.'.png';

                            $image = file_get_contents($file);

                            $fileName = uniqid() . date('YmdHis') . '.png';

                            file_put_contents( 'assets/images/products/'.$fileName, $image);
                            $image = new ProductImage;
                            $image->product_id = $product->id;
                            $image->file = '/assets/images/products/'.$fileName;
                            $image->file_type    = 'I';
                            $image->status = '1';
                            $image->save();
                        }
                    }
                }

                return redirect()->route('sellerView_profile')->with('success', 'Product updated successfully');
            }else{
                return redirect()->back()->with('error', COMMON_ERROR);
            }
        }

        return view('seller.product.add_product', compact('product_categories','product_companies','product'));
    }

    //view particular product details
    public function viewProduct($id)
    {
        $id = Crypt::decrypt($id);
        $product = Product::with('product_image', 'category')->find($id);
        return view('seller.product.viewProduct', compact('product'));
    }

    //Delete particular product image
    public function deleteImage($id)
    {
        $productImage = ProductImage::find($id);
        // print_r($productImage);die();
        if($productImage->delete())
        {
            return back()->with('success', 'Image deleted successfully');
        }
        else
        {
            return redirect()->back()->with('error', COMMON_ERROR);
        }
    }

    //Get all list of product wishlist and also Search via user name and product name
    public function productWishlist(Request $request)
    {
        // print_r($request->all());die();
        $productId = Product::where('user_id', Auth::user()->id)->get()->pluck('id')->toArray();

        $search = $request->search;

        if(!empty($search) && isset($search))
        {
            // print_r($search);die();
            $wishlists = ProductWishlist::with('getUserDetail', 'getProductDetail:id,name')
            ->whereHas('getUserDetail', function($q) use($search)
            {
                $q->select('id', 'first_name', 'profile_pic', 'last_name')
                ->where('first_name', 'LIKE', '%'. $search .'%')
                ->orWhere('last_name', 'LIKE', '%'. $search .'%');
                // print($q->toSql());die();
            })
            ->orWhereHas('getProductDetail', function($q) use($search)
            {
                $q->select('id', 'name')->where('name', 'LIKE', '%'. $search .'%');
            });
        }
        else
        {
            $wishlists = ProductWishlist::with(['getUserDetail' => function($q)
            {
                $q->select('id', 'first_name', 'profile_pic', 'last_name');
            }])
            ->with(['getProductDetail' => function($q)
            {
                $q->select('id', 'name');
            }]);
        }

        
        $wishlists = $wishlists->whereIn('product_id', $productId)->latest()->get()->toArray();

        // echo "<pre>";
        // print_r($wishlists);die();

        return view('seller.product.productWishlist', compact('wishlists'));
    }

    public function suggestionModal($userId, $productId)
    {
        $data['userId'] = $userId;
        $data['productId'] = $productId;
        $returnHTML = view('seller.product.suggestionModal.suggestionModal', compact('data'))->render();

        return $returnHTML;
    }

    //Save offer data in the notifcation and user offer table
    public function sendSuggestionNotifcation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'offerPercentage' => 'required|digits_between:1,10',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        $is_exists = UserOffer::where(['offer_used'=>1,'user_id' => $request->user_id,'product_id' => $request->product_id])->first();
        if($is_exists){
            return response()->json(['error' => 'You have already send offer for it!']);
        }

        $product = Product::where('id', $request->product_id)->first();
        $price = (int)$product->price;
        if($price < $request->offerPercentage){
            return response()->json(['error' => 'Offer amount should be less from product amount!']);
        }
        
        $notification = new Notification;
        $notification->seller_id = Auth::id();
        $notification->user_id = $request->user_id;
        $notification->product_id = $request->product_id;
        $notification->message = $request->message;

        $notification->save();

        $userOffer = new UserOffer;
        $userOffer->seller_id = Auth::id();
        $userOffer->user_id = $request->user_id;
        $userOffer->product_id = $request->product_id;
        $userOffer->description = $request->message;
        $userOffer->offer_percentage = $request->offerPercentage;
        $userOffer->offer_type = $request->offerType;
        $userOffer->save();

        $buyerDetails = User::find($request->user_id);
        $productDetails = Product::find($request->user_id);
        
        $data['email'] = $buyerDetails->email;
        $data['offer_amount'] = $request->offerPercentage;
        $data['product_name'] = $productDetails->name;
        $data['subject'] = 'Product Offer';
        $data['layout'] = 'email_templates.sendOffer';
    
        $mail = emailSend($data);

        return response()->json(['success' => 'Offer send successfully']);
        //return back()->with('success', 'Offer send successfully');
    }

    //Get listing of offers
    public function offerListing($productId, Request $request)
    {
        $search = $request->search;
        if(!empty($search))
        {
            $data['productId'] = $productId;
            $data['offers'] = UserOffer::with('user', 'getProductDetails:id,name')
            ->whereHas('user', function($query) use($search)
            {
                $query->where('first_name', 'LIKE', '%'.$search.'%')
                    ->orWhere('last_name', 'LIKE', '%'.$search.'%');

            })
            ->whereHas('getProductDetails', function($query) use($search)
            {
                $query->orWhere('name', 'LIKE', '%'.$search.'%');

            })
            // ->orWhere('offer_percentage', 'LIKE', '%' . $search . '%')
            // ->orWhere('description', 'LIKE', '%' . $search . '%')
            ->where('product_id', $productId)->get()->toArray();
            // print_r($data['offers']);die();
        }
        else
        {
            $productId = Crypt::decrypt($productId);
            $data['productId'] = $productId;
            $data['offers'] = UserOffer::with('user', 'getProductDetails:id,name')
            ->where('product_id', $productId)->get()->toArray();
        }
        
        return view('seller.product.offersList', $data);
    }

    //Get all list of product favourite and also Search via user name and product name
    public function productFavourite(Request $request)
    {
        // print_r($request->all());die();
        $productId = Product::where('user_id', Auth::user()->id)->get()->pluck('id')->toArray();

        $search = $request->search;

        if(!empty($search) && isset($search))
        {
            // print_r($search);die();
            $favourites = ProductFavourite::with('getUserDetail', 'getProductDetail:id,name')
            ->whereHas('getUserDetail', function($q) use($search)
            {
                $q->select('id', 'first_name', 'profile_pic', 'last_name')
                ->where('first_name', 'LIKE', '%'. $search .'%')
                ->orWhere('last_name', 'LIKE', '%'. $search .'%');
                // print($q->toSql());die();
            })
            ->orWhereHas('getProductDetail', function($q) use($search)
            {
                $q->select('id', 'name','price','sku')->where('name', 'LIKE', '%'. $search .'%');
            })
            ->where('user_id', Auth::user()->id);
        }
        else
        {
            $favourites = ProductFavourite::with(['getUserDetail' => function($q)
            {
                $q->select('id', 'first_name', 'profile_pic', 'last_name');
            }])
            ->with(['getProductDetail' => function($q)
            {
                $q->select('id', 'name','price','sku');
            }])
            ->where('user_id', Auth::user()->id);
        }

        
        $favourites = $favourites->get()->toArray();

        // echo "<pre>";
        // print_r($favourites);die();

        return view('seller.product.productFavourite', compact('favourites'));
    }

    public function delete_favourite($id)
    {
        $id = Crypt::decrypt($id);
        $favourite = ProductFavourite::find($id);
        if($favourite->delete())
        {
            return redirect()->route('sellerFavouriteProduct')->with('success', 'Favourite removed successfully');
        }
        else
        {
            return redirect()->back()->with('error', COMMON_ERROR);
        }
    }

}
