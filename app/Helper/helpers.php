 <?php
 	use App\Models\ProductImage;
 	use App\Models\UserPostFile;
 	use App\Models\Chat;
 	use App\Models\ChatRoom;
 	use App\Models\UserFollowers;
 	use App\Models\Cart;
 	
 	if(!function_exists('emailSend')) {
		// This function use  for email send 
		function emailSend($postData){
		    
		    // echo "<pre>"; print_r($postData); die;

			try{
				$email =  Mail::send($postData['layout'], $postData, function($message) use ($postData) {

					$message->to($postData['email'])
					        ->subject($postData['subject']);
					$message->from('phpurban@gmail.com');
				});


				$response['status'] = true;
				$response['message'] = "Mail sent successully.";
				return $response;
			}catch(\Execption $e){
		        $response['status'] = false;
		        $response['message'] = $e->getMessage();
		    	return $response;
		    }
		}
	}

	// UPLOAD IMAGES FOR PRODUCT
	if(!function_exists('productDefaultImage')) {
		function productDefaultImage($productId) {			
			$file = '/assets/images/section-4/1.png';
			
			$productImage = ProductImage::where('product_id', $productId)
										->where('file_type', PRDOCUT_IMAGE_TYPE)
										->orderBy('file_type', 'ASC')
										->select('file')->first();
			

			 

			if($productImage) {
				$removeFirstSlash = ltrim($productImage->file, '/');
				if(file_exists($removeFirstSlash)) {
					$file = $productImage->file;
				} 

			} 

			return asset($file);
		}
	}

	// DEFAULT IMAGES FOR POST
	if(!function_exists('postDefaultImage')) {
		function postDefaultImage($post_id) {			
			$file = '/assets/images/section-4/1.png';
			
			$postImage = UserPostFile::where('user_post_id', $post_id)
										->where('file_type', PRDOCUT_IMAGE_TYPE)
										->orderBy('file_type', 'ASC')
										->select('file')->first();
			
			
			if($postImage) {
				$removeFirstSlash = ltrim($postImage->file, '/');
				if(file_exists($removeFirstSlash)) {
					$file = $postImage->file;					
				} 
			}
			return asset($file);
		}
	}


	if(!function_exists('debug')) {
		function debug($array=[]) {
			echo "<pre>"; print_r($array); die;
		}
	}

	if(!function_exists('UploadImage')) {
		function UploadImage($file, $destinationPath) {
			try{
				$imgName = $file->getClientOriginalName();
				$ext = explode('?', \File::extension($imgName));
				$main_ext = $ext[0];
				$finalName = time()."_".rand(1,10000).'.'.$main_ext; 
				$file->move($destinationPath, $finalName);
				return $path = $destinationPath.'/'.$finalName;
			}catch (\Execption $e) {
				$response['status'] = false;
				$response['message'] = $e->getMessage()->withInput();
				return $response;
			}
		}
	}

	if (! function_exists('unreadMessageCounter')) {
	    function unreadMessageCounter($senderId, $receiverId) {
	        return Chat::where(['sender_id' => $receiverId, 'receiver_id' => $senderId])->whereNULL('read_by')->count();
	    }
	}


	if (! function_exists('lastMessage')) {
	    function lastMessage($unique_code) {

	        return ChatRoom::where([
	                                'unique_code' => $unique_code
	                            ])
	                            ->first();
	    }
	}

	if (!function_exists('sendEmailNotification')) {
	    function sendEmailNotification($to_emails, $strFromEmail, $strFromName, $viewContent, $subject)
	    {
	        try {
	            return Mail::send([], [],
	                function ($message) use ($to_emails, $strFromEmail, $strFromName, $viewContent, $subject) {
	                    $message
	                        ->from($strFromEmail, $strFromName)
	                        ->to($to_emails)
	                        ->subject($subject)
	                        ->setBody($viewContent, 'text/html');
	                });
	        } catch (\Exception $e) {
	            return $e->getMessage();
	        }
	    }
	}
   

   	if (! function_exists('countSellerFollowers')) {
	    function countSellerFollowers($seller_id) {
	        return UserFollowers::where('follower_id', $seller_id)->count();
	    }
	}

	if (! function_exists('cartCount')) {
	    function cartCount($user_id) {
	    	$physical_address = getPhysicalAddressOfPC();
	    	
	    	if(!Auth::check())
	    	{
	    		$userId = ['physical_address' => $physical_address];
	    	}
	    	else{
            	$userId = ['user_id' => $user_id];
	    	}

	        return Cart::where($userId)->count();
	    }
	}


	if (!function_exists('getOrderStatusName')) {
	    function getOrderStatusName($status)
	    {
	        switch ($status) {
	        	case 0:
	                return "ORDER PENDING";
	                break;
	            case 1:
	                return "ORDER PROCESS";
	                break;
	            case 2:
	                return "ORDER ON DELIVERY";
	                break;
	            case 3:
	                return "ORDER COMPLETED";
	                break;
	            case 4:
	                return "ORDER DECLINED";
	                break;

	            default:
	                return "Sorry!!!!!! You don't have any order";
	        }
	    }
	}

	function urbonRound($rate)
	{
	  $intRate = (int)$rate;
	  $decimalRate = $rate - $intRate;

	  if($decimalRate >= 0.1 && $decimalRate <= 0.5)
	  {
	    $value = (int)$rate + 0.5;
	  }
	  else
	  {
	    $value = round($rate);
	  }
	  return $value;
	}

	function getPhysicalAddressOfPC()
	{
		ob_start(); // Turn on output buffering
        system('ipconfig /all');
        $mycom = ob_get_contents();
        ob_clean();
        $findme = "Physical";
        $pmac = strpos($mycom, $findme);
        $mac = substr($mycom,($pmac+36),17); 
        return $mac;
	}