@extends('layouts.master')
@section('title','View Profile')
@section('content')

  <div class="mt-96 inner-profile-header bg-primary-2 ">
    <img class="logged-wave-img position-absolute" src="{{ asset('assets/images/wave-logg-seller.png') }}" alt="">
    <img class=" header-big-avatar rounded-circle" style="max-width:300px; height: 300px;"  data-aos="zoom-in-up" src="{{ $user['profile_img'] }}" alt="">
    <div class="--right-line"></div>
    <!-- <div class="dropdown --dropdown">
      <button class="btn btn-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="far fa-envelope"></i>
      </button>
    </div> -->
  </div>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="d-flex mb-2" data-aos="fade-up">
            <h1 class="display-5 f-600 me-3">{{ $user['full_name'] }}</h1>
            <div class="online-active"></div>
          </div>
          @if(!empty($user['about']))
            <h6 class="f-600 mb-2" data-aos="fade-up">Bio : {{ $user['about'] }}</h6>
          @endif
          
          <!-- <div class="d-flex align-items-center flex-wrap mb-3" data-aos="fade-up">
            <p class="mb-0 text-random-color font-500  me-3">Jewelery</p>
            <div class="bg-dark circle-sm"></div>
            <p class="mb-0 text-random-color mx-3 font-500">Clothing</p>
            <div class="bg-dark circle-sm"></div>
            <p class="mb-0 text-random-color mx-3 font-500">Kids</p>
          </div>
          <div class="d-flex align-items-center flex-wrap mb-4" data-aos="fade-up">
            <h5 class="f-600 mb-0">5K+ <span class="mx-3">Items Sold</span></h5>
            <div class="d-flex align-items-center">
              <i class="fas fa-star me-2"></i>
              <i class="fas fa-star me-2"></i>
              <i class="fas fa-star me-2"></i>
              <i class="fas fa-star me-2"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
          <div class="d-flex flex-wrap mb-2" data-aos="fade-up">
            <a href="#" class="d-flex text-decoration-none text-dark me-5">
              <svg class="me-3" width="41" height="28" viewBox="0 0 41 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M34.9389 8.76727C34.9426 7.03618 34.4327 5.3429 33.4737 3.90175C32.5146 2.4606 31.1496 1.33636 29.5513 0.671335C27.9531 0.00630573 26.1934 -0.169619 24.4952 0.165827C22.7969 0.501272 21.2363 1.33301 20.0109 2.55576C18.7855 3.77852 17.9505 5.33732 17.6114 7.03488C17.2723 8.73243 17.4444 10.4924 18.106 12.0921C18.7676 13.6918 19.889 15.0592 21.328 16.0214C22.7671 16.9835 24.4593 17.4971 26.1904 17.4971C28.5074 17.4971 30.7298 16.5779 32.3699 14.9413C34.0101 13.3047 34.934 11.0843 34.9389 8.76727ZM20.945 8.76727C20.945 7.72983 21.2527 6.71569 21.829 5.85309C22.4054 4.9905 23.2246 4.31819 24.1831 3.92118C25.1416 3.52417 26.1962 3.42029 27.2137 3.62268C28.2312 3.82508 29.1659 4.32465 29.8994 5.05823C30.633 5.79181 31.1326 6.72644 31.335 7.74395C31.5374 8.76145 31.4335 9.81612 31.0365 10.7746C30.6395 11.733 29.9672 12.5523 29.1046 13.1286C28.242 13.705 27.2278 14.0126 26.1904 14.0126C24.7992 14.0126 23.4651 13.46 22.4814 12.4763C21.4977 11.4926 20.945 10.1584 20.945 8.76727Z" fill="currentColor"/>
                <path d="M12.74 27.7628C13.14 27.9937 13.6153 28.0562 14.0614 27.9368C14.5076 27.8174 14.888 27.5257 15.1192 27.1259C15.8825 25.811 16.9747 24.7173 18.2884 23.9521C19.6021 23.1868 21.0923 22.7764 22.6126 22.761H29.6001C31.12 22.7782 32.6095 23.1894 33.9229 23.9545C35.2363 24.7196 36.3288 25.8123 37.0935 27.1259C37.327 27.5283 37.7109 27.8215 38.1606 27.941C38.6103 28.0604 39.089 27.9963 39.4914 27.7628C39.8939 27.5293 40.1871 27.1455 40.3065 26.6958C40.426 26.2461 40.3619 25.7674 40.1284 25.3649C39.0484 23.5095 37.5012 21.9694 35.6409 20.8979C33.7806 19.8264 31.672 19.2609 29.5252 19.2578H22.6875C20.5388 19.2628 18.4291 19.8311 16.5686 20.906C14.7081 21.9809 13.162 23.5248 12.0844 25.3837C11.9708 25.5828 11.8977 25.8025 11.8692 26.0299C11.8407 26.2574 11.8574 26.4883 11.9183 26.7093C11.9792 26.9304 12.0832 27.1372 12.2242 27.318C12.3652 27.4987 12.5405 27.6499 12.74 27.7628Z" fill="currentColor"/>
                <path d="M15.7 12.2708C15.7 10.8888 15.2902 9.5378 14.5224 8.3887C13.7546 7.23959 12.6633 6.34398 11.3865 5.8151C10.1097 5.28623 8.70469 5.14785 7.34923 5.41747C5.99377 5.68709 4.7487 6.35259 3.77147 7.32982C2.79424 8.30705 2.12874 9.55212 1.85912 10.9076C1.5895 12.263 1.72788 13.668 2.25675 14.9448C2.78563 16.2216 3.68124 17.3129 4.83035 18.0807C5.97945 18.8486 7.33043 19.2584 8.71244 19.2584C10.5641 19.2534 12.3386 18.5156 13.6479 17.2063C14.9573 15.8969 15.6951 14.1225 15.7 12.2708ZM8.71244 15.7552C8.01958 15.7552 7.34228 15.5498 6.76619 15.1648C6.1901 14.7799 5.74109 14.2328 5.47594 13.5927C5.2108 12.9525 5.14142 12.2482 5.27659 11.5686C5.41176 10.8891 5.74541 10.2649 6.23533 9.77495C6.72526 9.28502 7.34946 8.95138 8.02901 8.81621C8.70855 8.68104 9.41292 8.75041 10.053 9.01556C10.6932 9.2807 11.2403 9.72971 11.6252 10.3058C12.0101 10.8819 12.2156 11.5592 12.2156 12.2521C12.2156 13.1812 11.8465 14.0722 11.1895 14.7292C10.5326 15.3861 9.64153 15.7552 8.71244 15.7552Z" fill="currentColor"/>
                <path d="M6.27661 21C4.23301 21.0096 2.2526 21.7094 0.656572 22.9857C0.476984 23.1297 0.327501 23.3075 0.216658 23.5092C0.105814 23.7109 0.0357815 23.9325 0.0105578 24.1612C-0.0146658 24.39 0.00541353 24.6214 0.0696497 24.8424C0.133886 25.0634 0.241021 25.2696 0.384937 25.4492C0.528854 25.6288 0.706734 25.7783 0.908421 25.8891C1.11011 26 1.33165 26.07 1.5604 26.0952C1.78916 26.1204 2.02064 26.1004 2.24163 26.0361C2.46262 25.9719 2.6688 25.8647 2.84839 25.7208C3.82948 24.929 5.05328 24.499 6.31408 24.5032H9.33017C9.79471 24.5032 10.2402 24.3186 10.5687 23.9901C10.8972 23.6616 11.0817 23.2161 11.0817 22.7516C11.0817 22.287 10.8972 21.8415 10.5687 21.513C10.2402 21.1845 9.79471 21 9.33017 21H6.27661Z" fill="currentColor"/>
                </svg>
                
              <h4 class="f-600">3546 followers</h4>
            </a>
            <a href="#" class="d-flex text-decoration-none text-dark">
              <svg width="40" class="me-3" height="33" viewBox="0 0 40 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0)">
                <path d="M15.0614 30.3118H3.88718C3.47201 30.3118 3.0937 30.1194 2.84908 29.7838C2.60441 29.4481 2.53704 29.0287 2.66418 28.6332C3.9337 24.6863 7.80532 21.9298 12.0792 21.9298C14.0678 21.9298 15.9775 22.5286 17.6018 23.6615C18.1837 24.0673 18.9841 23.9246 19.3901 23.3428C19.7958 22.761 19.6532 21.9604 19.0714 21.5546C18.2673 20.9938 17.4082 20.5363 16.5096 20.187C17.7052 19.0999 18.4984 17.5777 18.6362 15.8732C20.4491 14.1073 22.8253 13.1396 25.3727 13.1396C27.3613 13.1396 29.271 13.7385 30.8953 14.8713C31.4772 15.2771 32.2777 15.1345 32.6836 14.5527C33.0893 13.9709 32.9467 13.1703 32.3649 12.7644C31.5608 12.2036 30.7018 11.7461 29.8031 11.3968C31.122 10.1977 31.9511 8.46904 31.9511 6.55034C31.9512 2.93852 29.0127 0 25.4008 0C21.7888 0 18.8504 2.93852 18.8504 6.55047C18.8504 8.46138 19.6729 10.1838 20.9825 11.3824C20.8033 11.4514 20.6254 11.5247 20.4488 11.6024C19.6451 11.9561 18.8892 12.3903 18.1866 12.901C17.2171 10.4938 14.8573 8.79021 12.1072 8.79021C8.49528 8.79021 5.55682 11.7287 5.55682 15.3407C5.55682 17.246 6.37456 18.964 7.67741 20.1621C4.19363 21.4676 1.36886 24.2713 0.218873 27.8469C-0.162524 29.0327 0.0394985 30.2902 0.773212 31.2969C1.5068 32.3035 2.64172 32.8808 3.88725 32.8808H15.0615C15.7709 32.8808 16.3459 32.3057 16.3459 31.5964C16.3459 30.8871 15.7708 30.3118 15.0614 30.3118ZM25.4009 2.56877C27.5963 2.56877 29.3825 4.35493 29.3825 6.5504C29.3825 8.74588 27.5963 10.532 25.4009 10.532C23.2054 10.532 21.4192 8.74588 21.4192 6.5504C21.4192 4.35493 23.2054 2.56877 25.4009 2.56877ZM12.1073 11.3589C14.3028 11.3589 16.0889 13.1451 16.0889 15.3406C16.0889 17.536 14.3028 19.3222 12.1073 19.3222C9.91181 19.3222 8.12566 17.536 8.12566 15.3406C8.12566 13.1451 9.91181 11.3589 12.1073 11.3589Z" fill="black"/>
                <path d="M32.3762 20.9794C31.7994 20.5665 30.997 20.6993 30.5842 21.2761L24.2533 30.1192C24.0804 30.3197 23.8637 30.363 23.7476 30.3707C23.6282 30.3789 23.3962 30.3634 23.1972 30.174L19.0987 26.2386C18.5869 25.7472 17.7738 25.7638 17.2827 26.2755C16.7913 26.7871 16.8078 27.6002 17.3195 28.0915L21.4221 32.0308C22.0366 32.6157 22.8567 32.9411 23.7006 32.9411C23.7731 32.9411 23.8458 32.9387 23.9185 32.9338C24.8378 32.8726 25.6961 32.4255 26.2732 31.7074C26.2882 31.6888 26.3025 31.6698 26.3165 31.6505L32.673 22.7714C33.0858 22.1946 32.953 21.3923 32.3762 20.9794Z" fill="black"/>
                </g>
                <path d="M40 18.8231C40 17.8923 39.724 16.9825 39.2069 16.2086C38.6898 15.4347 37.9549 14.8316 37.095 14.4754C36.2351 14.1192 35.2889 14.026 34.3761 14.2076C33.4632 14.3892 32.6247 14.8374 31.9666 15.4955C31.3085 16.1536 30.8603 16.9921 30.6787 17.905C30.4971 18.8179 30.5903 19.764 30.9465 20.6239C31.3026 21.4838 31.9058 22.2188 32.6797 22.7359C33.4536 23.253 34.3634 23.529 35.2941 23.529C36.5412 23.5256 37.7362 23.0288 38.618 22.147C39.4998 21.2651 39.9967 20.0701 40 18.8231ZM32.9349 18.8231C32.9349 18.3565 33.0733 17.9003 33.3325 17.5123C33.5917 17.1244 33.9602 16.822 34.3913 16.6434C34.8224 16.4648 35.2968 16.4181 35.7544 16.5092C36.2121 16.6002 36.6324 16.8249 36.9624 17.1548C37.2923 17.4848 37.517 17.9052 37.6081 18.3628C37.6991 18.8205 37.6524 19.2948 37.4738 19.7259C37.2952 20.157 36.9928 20.5255 36.6049 20.7847C36.2169 21.044 35.7608 21.1823 35.2941 21.1823C34.9843 21.1823 34.6775 21.1213 34.3913 21.0027C34.1051 20.8842 33.845 20.7104 33.6259 20.4913C33.4068 20.2722 33.233 20.0122 33.1145 19.7259C32.9959 19.4397 32.9349 19.1329 32.9349 18.8231Z" fill="black"/>
                <defs>
                <clipPath id="clip0">
                <rect width="32.9412" height="32.9412" fill="white"/>
                </clipPath>
                </defs>
              </svg>
              <h4 class="f-600">3546 followers</h4>
            </a>
          </div>
          <div class="mb-3" data-aos="fade-up">
            <a class="link-blue text-decoration-none f-600 " href="#">
              <svg class="me-1" width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.04764 12.9576L5.04449 14.9607C4.21402 15.7912 2.86914 15.7912 2.03937 14.9609C1.20944 14.131 1.20944 12.7859 2.03921 11.9562L6.04621 7.94916C6.87598 7.11935 8.22099 7.11935 9.05076 7.94916C9.32737 8.22577 9.77588 8.22577 10.0525 7.94916C10.3291 7.67255 10.3291 7.22404 10.0525 6.94743C8.66946 5.5644 6.42751 5.5644 5.04449 6.94743L1.03751 10.9544C-0.345513 12.3375 -0.345513 14.5794 1.03751 15.9625C2.42038 17.3462 4.66249 17.3462 6.04625 15.9625L8.0494 13.9593C8.32601 13.6827 8.32601 13.2342 8.0494 12.9576C7.77279 12.681 7.32425 12.681 7.04764 12.9576Z" fill="#0000FF"/>
                <path d="M15.9623 6.04527C17.3453 4.66224 17.3453 2.42029 15.9623 1.03727C14.5793 -0.345728 12.3374 -0.345728 10.9537 1.0371L8.55018 3.44061C8.27357 3.71722 8.27357 4.16573 8.55018 4.44234C8.82679 4.71895 9.27529 4.71895 9.55191 4.44234L11.9553 2.03899C12.7856 1.20919 14.1307 1.20919 14.9605 2.03899C15.7903 2.86876 15.7903 4.21377 14.9605 5.04354L10.5533 9.45074C9.72353 10.2805 8.37855 10.2805 7.54879 9.45074C7.27217 9.17413 6.82367 9.17413 6.54706 9.45074C6.27045 9.72735 6.27045 10.1759 6.54706 10.4525C7.93009 11.8355 10.172 11.8355 11.5551 10.4525L15.9623 6.04527Z" fill="#0000FF"/>
                <path d="M13.2512 12.2494C12.9746 11.9728 12.5261 11.9728 12.2494 12.2494C11.9728 12.5261 11.9728 12.9746 12.2494 13.2512L14.3737 15.3754C14.6503 15.652 15.0988 15.652 15.3754 15.3754C15.652 15.0988 15.652 14.6503 15.3754 14.3737L13.2512 12.2494Z" fill="#0000FF"/>
                <path d="M3.75013 4.7516C4.02674 5.02822 4.47524 5.02822 4.75186 4.7516C5.02847 4.47499 5.02847 4.02649 4.75186 3.74988L2.62545 1.62347C2.34884 1.34686 1.90033 1.34686 1.62372 1.62347C1.34711 1.90009 1.34711 2.34859 1.62372 2.6252L3.75013 4.7516Z" fill="#0000FF"/>
                <path d="M16.2916 10.625H14.1666C13.7754 10.625 13.4583 10.9421 13.4583 11.3333C13.4583 11.7245 13.7754 12.0416 14.1666 12.0416H16.2916C16.6828 12.0416 16.9999 11.7245 16.9999 11.3333C16.9999 10.9421 16.6828 10.625 16.2916 10.625Z" fill="#0000FF"/>
                <path d="M5.66657 3.54164C6.05776 3.54164 6.37488 3.22452 6.37488 2.83332V0.708347C6.37488 0.317119 6.05776 0 5.66657 0C5.27537 0 4.95825 0.317119 4.95825 0.708314V2.83329C4.95822 3.22448 5.27537 3.54164 5.66657 3.54164Z" fill="#0000FF"/>
                <path d="M0.708314 6.37464H2.83329C3.22448 6.37464 3.5416 6.05752 3.5416 5.66632C3.5416 5.27513 3.22448 4.95801 2.83329 4.95801H0.708314C0.317119 4.95801 0 5.27513 0 5.66632C0 6.05752 0.317119 6.37464 0.708314 6.37464Z" fill="#0000FF"/>
                <path d="M11.3333 13.458C10.9421 13.458 10.625 13.7751 10.625 14.1663V16.2913C10.625 16.6825 10.9421 16.9996 11.3333 16.9996C11.7245 16.9996 12.0416 16.6825 12.0416 16.2913V14.1663C12.0417 13.7752 11.7245 13.458 11.3333 13.458Z" fill="#0000FF"/>
              </svg>
                
                https://breadandbuttercollection.com
            
              <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.7071 8.70711C18.0976 8.31658 18.0976 7.68342 17.7071 7.29289L11.3431 0.928932C10.9526 0.538408 10.3195 0.538408 9.92893 0.928932C9.53841 1.31946 9.53841 1.95262 9.92893 2.34315L15.5858 8L9.92893 13.6569C9.53841 14.0474 9.53841 14.6805 9.92893 15.0711C10.3195 15.4616 10.9526 15.4616 11.3431 15.0711L17.7071 8.70711ZM0 9H17V7H0V9Z" fill="#0000FF"/>
              </svg>
            </a>
          </div> -->

          <a href="{{ route('sellerEdit_profile') }}">
            <button type="button" class="btn btn-dark rounded-pill fw-bold px-5 py-3 mb-5" data-aos="fade-up">Edit Profile </button>
          </a>
          <div class="d-flex justify-content-between align-items-center">
            <div class="mb-5" data-aos="fade-up">
              <div class="urban-title text--primary position-relative mb-2">
                <p class="mb-0">Browse through</p>
              </div>
              <div class="urban-sub-title ust-100 mb-4">
                <p class="mb-0 pe-5 ms-2">Your Products</p>
              </div>
            </div>
            <a href="{{ URL::previous() }}" class="btn btn-dark">Back</a>
          </div>

          @if(empty(@$user['products'][0]))
            <div class="row" data-aos="fade-up">
              <div class="col-lg-12 mx-auto text-center">
                <p class="text-24 mb-3 fw-bold">You haven’t made any product yet</p>
                <p class="text-mute">Make and publish an item in your store to get contents here. Don’t be scared, it’s absolutely free!</p>
              </div>
            </div>
          @else
            <div class="row " data-aos="fade-up">
              @foreach($user['products'] as $key => $product)
                <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="card product-item border-0 br-12 shadow mb-5">
                    <div class="card-body ">
                      <a href="{{ route('sellerViewProduct',   \Illuminate\Support\Facades\Crypt::encrypt($product['id'])) }}">
                        <img class="product-img-size-sm mb-3 br-12" src="{{ !empty($product['product_image']) ? url('/') .$product['product_image'][0]['file'] : asset('assets/images/default.png') }}" alt="" ></a>
                      <h5 class="fw-bold text-one-line"><a class="text-dark text-decoration-none" href="{{ route('sellerViewProduct',   \Illuminate\Support\Facades\Crypt::encrypt($product['id'])) }}">{{ $product['name'] }}</a></h5>
                      <div class="d-flex my-2">
                        <i class="fas fa-star me-2 text--primary text-13"></i>
                        <i class="fas fa-star me-2 text--primary text-13"></i>
                        <i class="fas fa-star me-2 text--primary text-13"></i>
                        <i class="fas fa-star me-2 text--primary text-13"></i>
                        <i class="fas fa-star text--primary text-13"></i>
                      </div>
                    </div>
                    <div class="card-footer bg-transparent">
                      <div class="d-flex justify-content-between flex-wrap py-2">
                        <h5 class="mb-0 text-one-line">${{ round($product['price'], 2) }}</h5>
                        <div class="d-flex align-items-center">
                          <a href="{{ route('sellerEditProduct', $product['id']) }}">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M21.746 2.87692L19.1229 0.253846C18.7845 -0.0846154 18.2768 -0.0846154 17.9383 0.253846L16.3306 1.86154L10.0691 8.12308C9.98447 8.20769 9.98447 8.29231 9.89986 8.37692C9.89986 8.37692 9.89986 8.37692 9.89986 8.46154L8.54601 12.4385C8.4614 12.7769 8.54601 13.1154 8.71524 13.2846C8.88447 13.4538 9.0537 13.5385 9.30755 13.5385C9.39217 13.5385 9.47678 13.5385 9.5614 13.4538L13.5383 12.1C13.5383 12.1 13.5383 12.1 13.6229 12.1C13.7076 12.1 13.7922 12.0154 13.8768 11.9308L21.746 4.06154C22.0845 3.72308 22.0845 3.21538 21.746 2.87692ZM19.9691 3.46923L19.546 3.89231L18.1076 2.45385L18.5306 2.03077L19.9691 3.46923ZM13.2845 10.1538L12.6076 9.47692L11.846 8.71538L16.9229 3.63846L18.3614 5.07692L13.2845 10.1538ZM10.6614 11.3385L10.9999 10.3231L11.6768 11L10.6614 11.3385Z" fill="black"/>
                              <path d="M17.7692 11.8463C17.2615 11.8463 16.9231 12.1848 16.9231 12.6925V18.6155C16.9231 19.5463 16.1615 20.3078 15.2308 20.3078H3.38462C2.45385 20.3078 1.69231 19.5463 1.69231 18.6155V6.76938C1.69231 5.83861 2.45385 5.07707 3.38462 5.07707H9.30769C9.81538 5.07707 10.1538 4.73861 10.1538 4.23092C10.1538 3.72323 9.81538 3.38477 9.30769 3.38477H3.38462C1.52308 3.38477 0 4.90784 0 6.76938V18.6155C0 20.4771 1.52308 22.0002 3.38462 22.0002H15.2308C17.0923 22.0002 18.6154 20.4771 18.6154 18.6155V12.6925C18.6154 12.1848 18.2769 11.8463 17.7692 11.8463Z" fill="black"/>
                            </svg>
                          </a>
                        </div>
                      </div>
                      <!-- <div class="product-wishlist position-absolute end-0 pe-3">
                        <button type="button" class="btn btn--primary btn-sm fw-bold">Add to Wishlist</button>
                      </div> -->
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          @endif
      </div>
    </div>
  </section>

@endsection