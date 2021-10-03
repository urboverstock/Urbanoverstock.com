@extends('layouts.admin')
@section('title','Order List')
@section('content')

<section class="admin-body">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 mb-3">
        <div class="card border-0 shadow-sm br-10 h-100">
          <div class="card-body h-100">
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <h5 class="text--pink">124</h5>
                <h6 class="text-muted">Total Buyers</h6>
              </div>
              <svg
                class="img-fluid"
                width="110"
                height="110"
                viewBox="0 0 110 110"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M106.777 86.2956C17.4702 86.2956 21.4524 86.3122 21.4468 86.2658C20.4679 78.4276 20.5073 78.9291 20.5711 78.9196C63.426 78.6968 -39.0463 78.9336 99.6488 78.9336C105.427 78.9336 109.785 74.5557 109.785 68.75V25.083C109.785 20.8506 106.342 17.4013 102.11 17.3937L75.4308 17.3478V10.5273C75.4308 6.73643 72.3467 3.65234 68.5558 3.65234H62.1165C58.3266 3.65234 55.2436 6.73557 55.2436 10.5252V17.313L26.6243 17.2631L24.4791 5.44844C23.9061 2.29152 21.1613 0 17.9526 0H3.22266C1.44289 0 0 1.44289 0 3.22266C0 5.00242 1.44289 6.44531 3.22266 6.44531C18.8192 6.44531 18.0939 6.35959 18.1375 6.59979C21.6341 25.8567 19.4088 12.398 28.7895 72.4314L20.5419 72.4743C16.6689 72.4891 13.654 75.8888 14.1374 79.7573L15.0509 87.0654C15.4554 90.301 18.2194 92.741 21.4801 92.741H27.1992C23.1602 100.584 28.8808 110 37.741 110C46.597 110 52.3237 100.587 48.2827 92.741H78.9766C74.9373 100.584 80.6581 110 89.5183 110C98.3742 110 104.101 100.587 100.06 92.741H106.777C108.557 92.741 110 91.2981 110 89.5183C110 87.7385 108.557 86.2956 106.777 86.2956ZM61.6892 10.5252C61.6892 10.2895 61.881 10.0977 62.1167 10.0977H68.556C68.793 10.0977 68.9857 10.2904 68.9857 10.5273V34.375C68.9857 36.1548 70.4286 37.5977 72.2083 37.5977H76.9942L66.9502 47.6478C66.0589 48.5397 64.6158 48.5397 63.7244 47.6478L53.6802 37.5977H58.4663C60.2461 37.5977 61.6889 36.1548 61.6889 34.375L61.6892 10.5252ZM55.2439 23.7583V31.1523H49.8644C45.5404 31.1523 43.3649 36.3932 46.4239 39.4548L59.1658 52.204C62.5763 55.6164 68.0982 55.6168 71.509 52.204L84.2508 39.4548C87.3078 36.396 85.1381 31.1523 80.8105 31.1523H75.431V23.7931L102.099 23.8391C102.783 23.8401 103.34 24.3983 103.34 25.083V68.75C103.34 70.9859 101.857 72.4883 99.6488 72.4883H35.322L27.7 23.7104L55.2439 23.7583ZM43.1477 98.1477C43.1477 101.129 40.7221 103.555 37.7407 103.555C34.7594 103.555 32.334 101.129 32.334 98.1477C32.334 95.1663 34.7596 92.7407 37.741 92.7407C40.7223 92.7407 43.1477 95.1665 43.1477 98.1477ZM94.9251 98.1477C94.9251 101.129 92.4997 103.555 89.5183 103.555C86.5369 103.555 84.1113 101.129 84.1113 98.1477C84.1113 95.1663 86.5369 92.7407 89.5183 92.7407C92.4997 92.7407 94.9251 95.1665 94.9251 98.1477Z"
                  fill="#F7617D"
                />
              </svg>
              <h5 class="text--pink">86%</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-3">
        <div class="card border-0 shadow-sm br-10 h-100">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <h5 class="text--green">+124</h5>
                <h6 class="text-muted">Total Sellers</h6>
              </div>
              <svg
                width="110"
                height="106"
                viewBox="0 0 110 106"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M110 72.6035C110 66.7422 105.228 61.9707 99.3703 61.9707C99.116 61.9707 98.8684 62.0153 98.6209 62.0291C99.6729 59.5402 100.25 56.7694 100.25 53.727C100.25 46.6281 91.1748 30.3437 85.2516 24.9602C82.0064 25.6581 78.555 26.0362 74.9763 26.0362C71.2842 26.0362 67.7434 25.634 64.4088 24.8949C58.5578 29.6218 48.31 46.4081 48.31 53.7305C48.31 54.9646 48.4234 56.1403 48.6262 57.261C46.8592 57.1407 45.0613 57.0719 43.229 57.0719C38.4884 57.0719 33.9231 57.5841 29.6054 58.5295C29.4782 56.9585 29.3888 55.9993 29.3888 55.9993H1.2339C1.2339 55.9993 -0.000244141 66.3125 -0.000244141 79.0217C-0.000244141 91.731 1.2339 102.037 1.2339 102.037H29.3853C29.3853 102.037 29.6329 99.3455 29.901 95.5262C34.0916 94.8215 38.3818 95.9284 43.3356 99.0086C49.6197 103.106 57.3615 105.544 65.7426 105.544C74.2406 105.544 81.5389 103.038 87.6065 98.823L87.6134 98.8298C87.6855 98.7783 87.7543 98.7267 87.8471 98.6442C89.566 97.4341 91.192 96.0968 92.7081 94.6289C93.8975 93.412 95.5098 91.8547 97.9265 89.4896C106.043 81.5141 107.043 79.9362 107.043 79.9362C107.043 79.9362 107.026 79.9362 107.012 79.9362C108.858 78.0351 110 75.4568 110 72.6035ZM68.1696 44.9368C68.4309 44.3042 68.8056 43.7404 69.2663 43.2523C69.7476 42.7538 70.3045 42.3447 70.9439 42.025C71.5902 41.695 72.288 41.4819 73.0478 41.3684V39.5224H76.9599V41.6503C77.5374 41.8119 78.0565 42.0388 78.524 42.3138V41.4819H82.4396V47.3432H78.5C78.1837 46.9925 77.8709 46.6797 77.5752 46.4116C77.2727 46.1434 76.9564 45.9131 76.6264 45.7412C76.2861 45.5693 75.9286 45.4318 75.5298 45.339C75.1276 45.2462 74.6635 45.198 74.1203 45.198C73.3365 45.198 72.7418 45.3871 72.319 45.755C71.903 46.1297 71.6899 46.5284 71.6899 46.9582C71.6899 48.1682 72.9928 48.9658 75.6089 49.3611C77.228 49.6018 78.5172 50.0005 79.4763 50.5437C80.4251 51.0937 81.1573 51.6884 81.6661 52.3347C82.168 52.9742 82.4912 53.6101 82.6321 54.2358C82.7731 54.8649 82.8452 55.3634 82.8452 55.7518C82.8452 56.4978 82.6974 57.1957 82.3949 57.8282C82.0958 58.4745 81.6902 59.0452 81.1676 59.5196C80.6554 60.0043 80.0263 60.3927 79.3182 60.6953C78.5997 60.9909 77.8159 61.1662 76.9771 61.2247V62.9848H73.0649V60.6953C72.8518 60.6024 72.6662 60.5131 72.4599 60.4271C72.2605 60.3549 72.0818 60.2587 71.8893 60.1659V61.0253H67.9771V55.164H71.8893C72.2296 55.5387 72.5493 55.855 72.8828 56.13C73.2059 56.3981 73.5359 56.6284 73.89 56.7935C74.2372 56.9757 74.6154 57.1029 75.0313 57.1888C75.4542 57.2644 75.932 57.3057 76.4752 57.3057C77.1799 57.3057 77.7643 57.1647 78.2353 56.876C78.7028 56.5872 78.9331 56.2159 78.9331 55.745C78.9331 55.3565 78.8059 55.0162 78.5687 54.7205C78.3315 54.4352 78.0187 54.1945 77.6371 53.9814C77.259 53.7786 76.843 53.617 76.3858 53.4967C75.9251 53.3764 75.4748 53.2767 75.0245 53.201C73.4397 52.9604 72.178 52.5788 71.2292 52.0803C70.2838 51.5784 69.5516 51.0318 69.0359 50.4337C68.5306 49.8355 68.1834 49.2236 68.0287 48.6014C67.8671 47.9826 67.7915 47.4257 67.7915 46.9444C67.7743 46.2465 67.9084 45.5728 68.1696 44.9368ZM103.54 76.7666C102.117 78.176 96.1011 84.3811 94.4647 85.9831C90.2432 90.1255 88.2734 92.0679 87.3521 93.1404L87.328 93.1232C86.6817 93.7042 86.0045 94.2233 85.3135 94.7321C79.8682 98.4139 73.0856 100.621 65.7392 100.621C58.3206 100.621 51.4864 98.3864 46.0204 94.6461H45.9861C41.2523 91.7653 35.7073 89.9915 30.2207 90.5312C30.4407 86.7428 30.616 82.5935 30.616 79.0286C30.616 74.068 30.2723 67.9901 29.9594 63.3182C34.1294 62.3797 38.5881 61.8538 43.2187 61.8538C57.3718 61.8538 69.8954 66.5325 77.5649 73.8652C78.469 74.8724 79.0397 76.1959 79.0397 77.6535C79.0397 80.7956 76.482 83.3532 73.34 83.3532C73.23 83.3532 73.1165 83.3189 72.9859 83.312L72.9721 83.3739C70.0398 83.2742 65.4504 82.0435 57.7018 79.0767L55.9417 83.697C64.1338 86.8116 69.531 88.2211 73.3572 88.3173V88.2829C78.1528 88.2761 82.199 85.0721 83.5156 80.7165V80.7234C85.1726 77.9698 91.3777 72.2357 94.9013 69.1005V69.1073C94.9426 69.0592 94.9735 69.0352 95.001 69.0077C95.6507 68.4301 96.218 67.9351 96.6202 67.5879C97.3662 67.1135 98.1362 66.9175 99.3669 66.9175C102.502 66.9175 105.06 69.4752 105.06 72.6173C105.067 74.1814 104.369 75.6596 103.54 76.7666Z"
                  fill="#2CD889"
                />
                <path
                  d="M65.753 21.4021C65.753 21.4021 70.5314 22.5365 75.2136 22.5365C79.8923 22.5365 82.9725 21.873 82.9725 21.873C85.6917 20.5358 91.804 6.43768 88.2185 1.46675C84.2101 -4.07829 77.51 7.97434 74.416 6.73677C71.3358 5.50263 64.7629 -0.925901 60.428 1.69364C56.6602 3.97284 62.7897 19.1985 65.753 21.4021Z"
                  fill="#2CD889"
                />
              </svg>

              <h5 class="text--green">86%</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-3">
        <div class="card border-0 shadow-sm br-10 h-100">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <h5 class="text--green">48</h5>
                <h6 class="text-muted">Total Sellers</h6>
              </div>
              <svg
                width="84"
                height="83"
                viewBox="0 0 84 83"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M79.2169 17.0042L66.2461 4.03333C63.6699 1.45397 60.1749 0.00320929 56.5294 0H27.4711C23.8256 0.00320929 20.3306 1.45397 17.7544 4.03333L4.78358 17.0042C2.20422 19.5803 0.753453 23.0753 0.750244 26.7208V68.75C0.750244 72.3967 2.1989 75.8941 4.77753 78.4727C7.35615 81.0513 10.8535 82.5 14.5002 82.5H69.5002C73.147 82.5 76.6443 81.0513 79.223 78.4727C81.8016 75.8941 83.2502 72.3967 83.2502 68.75V26.7208C83.247 23.0753 81.7963 19.5803 79.2169 17.0042ZM42.0002 59.5833C37.1379 59.5833 32.4748 57.6518 29.0366 54.2136C25.5985 50.7755 23.6669 46.1123 23.6669 41.25C23.6669 40.0344 24.1498 38.8686 25.0093 38.0091C25.8689 37.1496 27.0347 36.6667 28.2502 36.6667C29.4658 36.6667 30.6316 37.1496 31.4911 38.0091C32.3507 38.8686 32.8336 40.0344 32.8336 41.25C32.8336 43.6812 33.7994 46.0127 35.5184 47.7318C37.2375 49.4509 39.5691 50.4167 42.0002 50.4167C44.4314 50.4167 46.763 49.4509 48.4821 47.7318C50.2011 46.0127 51.1669 43.6812 51.1669 41.25C51.1669 40.0344 51.6498 38.8686 52.5093 38.0091C53.3689 37.1496 54.5347 36.6667 55.7502 36.6667C56.9658 36.6667 58.1316 37.1496 58.9911 38.0091C59.8507 38.8686 60.3336 40.0344 60.3336 41.25C60.3336 46.1123 58.402 50.7755 54.9639 54.2136C51.5257 57.6518 46.8625 59.5833 42.0002 59.5833ZM16.3794 18.3333L24.2169 10.4958C25.0952 9.6583 26.2576 9.18355 27.4711 9.16667H56.5294C57.7429 9.18355 58.9053 9.6583 59.7836 10.4958L67.6211 18.3333H16.3794Z"
                  fill="#2CD889"
                />
              </svg>

              <h5 class="text--green">91%</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-3">
        <div class="card border-0 shadow-sm br-10 h-100">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <h5 class="text--yellow">124</h5>
                <h6 class="text-muted">Total Sellers</h6>
              </div>
              <svg
                width="91"
                height="110"
                viewBox="0 0 91 110"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M90.7266 27.9963V99.4189C90.7266 105.253 85.9796 110 80.1453 110H31.8691C26.0347 110 21.288 105.253 21.288 99.4189V52.9785C22.7973 53.2296 24.337 53.3924 25.9172 53.3924C27.0378 53.3924 28.1376 53.3092 29.2239 53.1807V99.4189C29.2239 100.877 30.4102 102.064 31.8691 102.064H80.1453C81.6037 102.064 82.7905 100.877 82.7905 99.4189V27.9963C82.7905 26.5375 81.6035 25.3511 80.1453 25.3511H53.9587C53.9587 22.5922 53.5442 19.9333 52.8012 17.4154H80.1453C85.9796 17.4152 90.7266 22.162 90.7266 27.9963ZM25.4753 49.9109C11.7143 49.9109 0.519531 38.7162 0.519531 24.9558C0.51975 11.1947 11.7143 0 25.4753 0C39.236 0 50.4311 11.1947 50.4311 24.9558C50.4311 38.7162 39.236 49.9109 25.4753 49.9109ZM25.4753 44.6203C36.318 44.6203 45.14 35.7998 45.14 24.9558C45.14 14.1111 36.3193 5.29067 25.4753 5.29067C14.6309 5.29067 5.8102 14.1111 5.8102 24.9558C5.8102 35.7998 14.6322 44.6203 25.4753 44.6203ZM40.4422 27.6012C41.9024 27.6012 43.0874 26.4162 43.0874 24.956C43.0874 23.4958 41.9024 22.3108 40.4422 22.3108H28.1205V11.9266C28.1205 10.4664 26.9355 9.28134 25.4753 9.28134C24.0152 9.28134 22.8301 10.4664 22.8301 11.9266V24.956C22.8301 26.4162 24.0152 27.6012 25.4753 27.6012H40.4422ZM70.9734 49.0488H42.3163C40.8561 49.0488 39.671 50.2339 39.671 51.6941C39.671 53.1545 40.8561 54.3393 42.3163 54.3393H70.9734C72.4342 54.3393 73.6186 53.1542 73.6186 51.6941C73.6188 50.2339 72.4342 49.0488 70.9734 49.0488ZM71.0199 65.0948H42.3628C40.9026 65.0948 39.7176 66.2792 39.7176 67.74C39.7176 69.2008 40.9026 70.3852 42.3628 70.3852H71.0199C72.4808 70.3852 73.6649 69.2008 73.6649 67.74C73.6649 66.2792 72.4821 65.0948 71.0199 65.0948ZM71.0199 81.8048H42.3628C40.9026 81.8048 39.7176 82.9905 39.7176 84.4501C39.7176 85.9109 40.9026 87.0951 42.3628 87.0951H71.0199C72.4808 87.0951 73.6649 85.9107 73.6649 84.4501C73.6652 82.9903 72.4821 81.8048 71.0199 81.8048Z"
                  fill="#FECD54"
                />
              </svg>

              <h5 class="text--yellow">91%</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 mt-3">
        <div class="card border-0 shadow-sm br-10">
          <div class="card-body">
            <div class="d-flex justify-content-between flex-wrap mb-3">
              <div class="d-flex align-items-center flex-wrap">
                <h4 class="mb-0 me-4">Order List</h4>
                
              </div>
            </div>
            <!--div class="row mb-3">
                <div class="col-lg-10 mb-3">
                    <div class="position-relative me-4">
                      <input
                        type="text"
                        class="form-control br-10 ps-5"
                        id="myInputTextField"
                        placeholder="Search by Name, Brand, Varian etc…"
                      />
                      <svg
                        class="
                          position-absolute
                          top-50
                          start-0
                          ms-2
                          translate-middle-y
                        "
                        width="25"
                        height="25"
                        viewBox="0 0 25 25"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M4.69047 18.4442C1.11327 14.867 1.11327 9.06717 4.69047 5.48997C8.26767 1.91277 14.0675 1.91277 17.6447 5.48997C20.9144 8.75972 21.1954 13.8864 18.4877 17.4754L22.1019 21.0895C23.0447 22.0324 21.6305 23.4466 20.6877 22.5038L17.1167 18.9328C13.5179 22.0132 8.09661 21.8503 4.69047 18.4442ZM16.2305 6.90418C13.4343 4.10803 8.90084 4.10803 6.10468 6.90418C3.30853 9.70034 3.30853 14.2338 6.10468 17.03C8.90084 19.8261 13.4343 19.8261 16.2305 17.03C19.0266 14.2338 19.0266 9.70034 16.2305 6.90418Z"
                          fill="#92929D"
                        />
                      </svg>
                    </div>
                  </div>
                  <div class="col-lg-2 text-start text-sm-end">
                    <button type="button" class="btn btn--primary">
                      <a href="{{ route('adminAddProduct') }}" style="text-decoration:none;"><span class="text-white d-flex align-items-center"
                          ><svg
                            width="14"
                            class="me-2"
                            height="14"
                            viewBox="0 0 18 18"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M10 8H17C17.5523 8 18 8.44771 18 9C18 9.55229 17.5523 10 17 10H10V17C10 17.5523 9.55229 18 9 18C8.44771 18 8 17.5523 8 17V10H1C0.447715 10 0 9.55229 0 9C0 8.44771 0.447715 8 1 8H8V1C8 0.447715 8.44771 0 9 0C9.55229 0 10 0.447715 10 1V8Z"
                              fill="white"
                            />
                          </svg>
                          New Products</span
                        ></a>
                      </button>
                  </div>
            </div-->
            <div class="table-responsivessss">
              <table id="myTable" class="display product-table" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center">
                          <input id="MyTableCheckAllButton" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </th>
                        <th class="fw-normal">OrderID.</th>
                        <th class="fw-normal">User</th>
                        <th class="fw-normal">Order Number</th>
                        <th class="fw-normal">Total Quantity</th>
                        <th class="fw-normal">Total Amount</th>
                        <th class="fw-normal">Date</th>
                        <th class="fw-normal">Status</th>
                        <th class="fw-normal">Action</th>
                        <!--th></th-->
                    </tr>
                </thead>
                <tbody>
                  @if(count($orders) > 0)
                    @foreach($orders as $key => $order)
                    <tr>
                        <td>
                          
                        </td>
                        <td class="py-3 align-middle">#{{ $order['id'] }}</td>
                        <td class="py-3 align-middle">{{ $order['get_user_detail']['first_name']}} {{ $order['get_user_detail']['last_name']}}</td>
                        <td class="py-3 align-middle">{{ $order['order_number'] }}</td>
                        <td class="py-3 align-middle">{{ $order['total_quantity'] }}</td>
                        <td class="py-3 align-middle">{{ $order['price'] }}</td>
                        <td class="py-3 align-middle">{{ date('d/m/Y', strtotime($order['created_at'])) }}</td>
                        <td class="py-3 align-middle">
                        @switch($order['status'])
                          @case(0)
                            <span class="badge bg--primary fw-normal px-4 py-2">PENDING</span>
                          @break
                          @case(1)
                            <span class="badge bg--primary fw-normal px-4 py-2">Processing</span>
                          @break
                          @case(2)
                            <span class="badge bg--primary fw-normal px-4 py-2">On Delivery</span>
                          @break
                          @case(3)
                            <span class="badge bg--green fw-normal px-4 py-2">Completed</span>
                          @break
                          @case(4)
                            <span class="badge bg--primary fw-normal px-4 py-2">Declined</span>
                          @break
                        @endswitch
                        </td>
                        <td class="py-3 align-middle">
                        <a href="{{ route('adminViewOrder', \Illuminate\Support\Facades\Crypt::encrypt($order['id'])) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        </td>
                        <!--td>
                          <div class="dropdown admin-btn-dropdown">
                            <button
                              class="btn"
                              type="button"
                              id="dropdownMenuButton1"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              <svg
                                width="20"
                                height="5"
                                viewBox="0 0 20 5"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                              >
                                <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M2.72053 0.64153C3.89903 0.64153 4.85439 1.59689 4.85439 2.77539C4.85439 3.95389 3.89903 4.90925 2.72053 4.90925C1.54203 4.90925 0.58667 3.95389 0.58667 2.77539C0.58667 1.59689 1.54203 0.64153 2.72053 0.64153ZM10.1887 0.641555C11.3672 0.641555 12.3226 1.59692 12.3226 2.77541C12.3226 3.95391 11.3672 4.90927 10.1887 4.90927C9.01023 4.90927 8.05487 3.95391 8.05487 2.77541C8.05487 1.59692 9.01023 0.641555 10.1887 0.641555ZM19.7911 2.77541C19.7911 1.59692 18.8357 0.641555 17.6572 0.641555C16.4787 0.641555 15.5234 1.59692 15.5234 2.77541C15.5234 3.95391 16.4787 4.90927 17.6572 4.90927C18.8357 4.90927 19.7911 3.95391 19.7911 2.77541Z"
                                  fill="#92929D"
                                />
                              </svg>
                            </button>
                            <ul
                              class="
                                dropdown-menu
                                border-0
                                br-10
                                table-dropdown
                              "
                              aria-labelledby="dropdownMenuButton1"
                            >
                              <li>
                                <a class="dropdown-item" href="#">
                                  <svg
                                    width="12"
                                    height="12"
                                    viewBox="0 0 12 12"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                  >
                                    <path
                                      fill-rule="evenodd"
                                      clip-rule="evenodd"
                                      d="M5.99999 9.63075L3.02528 11.1838C2.59709 11.4073 2.09828 11.0434 2.18049 10.5674L2.74768 7.28342L0.344274 4.95697C-0.00398681 4.61986 0.186951 4.0297 0.666677 3.96048L3.99146 3.48072L5.47761 0.490391C5.69212 0.0587652 6.30785 0.0587652 6.52237 0.490391L8.00851 3.48072L11.3333 3.96048C11.813 4.0297 12.004 4.61986 11.6557 4.95697L9.2523 7.28342L9.81949 10.5674C9.9017 11.0434 9.40289 11.4073 8.9747 11.1838L5.99999 9.63075ZM5.73002 8.4556C5.89917 8.36729 6.10081 8.36729 6.26996 8.4556L8.46911 9.60373L8.05017 7.17807C8.01733 6.98793 8.08063 6.79385 8.21927 6.65965L9.9902 4.94543L7.53902 4.59172C7.34936 4.56436 7.18523 4.44558 7.09995 4.27398L5.99999 2.06071L4.90003 4.27398C4.81474 4.44558 4.65062 4.56436 4.46096 4.59172L2.00977 4.94543L3.7807 6.65965C3.91934 6.79385 3.98265 6.98793 3.94981 7.17807L3.53087 9.60373L5.73002 8.4556Z"
                                      fill="currentColor"
                                    />
                                  </svg>

                                  Wishlist this Product</a
                                >
                              </li>
                              <li>
                                <a href="{{ route('sellerViewOrder', \Illuminate\Support\Facades\Crypt::encrypt($order['id'])) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                              </li>
                            </ul>
                          </div>
                        </td-->
                    </tr>
                    @endforeach
                    @else
                    <tr><td class="py-3 align-middle"><div>No Records</div></td></tr>
                    @endif
                    
                </tbody>
                
            </table>
            </div>
            
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>

@endsection