<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('backend/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('backend/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{asset('backend/css/font.css')}}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('backend/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('backend/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{('backend/img/favicon.ico')}}">

     <link rel="stylesheet" type="text/css" href="{{ asset('icon/icofont/icofont.min.css') }}">    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-5">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Register Form</h1>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-7 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                    <form method="POST" action="{{ route('user.store') }}">
                        @csrf

                                            <div class="form-row">
                                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="label-material" for="inputprofile"> Profile</label><br>
                                  <input  id="inputprofile" type="file" name="profile" autofocus="" required/>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label class="label-material" for="inputName"> Name</label>
                                  <input class="form-control py-4" id="inputName" type="text" placeholder="Enter Name" name="name" autofocus="" required data-msg="Please enter your username"  />

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label class="label-material"  for="phone">Phone Number</label>
                                  <input class="form-control py-4" id="phone" type="text" placeholder="Enter Phone Number" name="phone" />
                                </div>
                            </div>
                       

                     </div>  
                                             <div class="form-group">
                            <label class="label-material"  for="address"> Address </label>
                            <textarea class="form-control" name="address"></textarea>
                        </div>  
                         <div class="col-md-3">

                                  <label class="small mb-1 col-12" for="shop">Shops</label>
                                  <select class="form-control" name="shop">
                                      <option>Choosen Shops</option>
                                      @foreach($data[0] as $shop)
                                      <option value="{{$shop->id}}">
                                          {{$shop->name}}
                                      </option>
                                      @endforeach
                                  </select>
                        </div>   


                      
                        <div class="form-group">
                            <label class="label-material"  for="inputEmailAddress">Email</label>
                            <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="email" />
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label class="label-material"  for="inputPassword">Password</label>
                                  <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password" />
                                  <font id="error" color="red"></font>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label class="label-material"  for="inputConfirmPassword">Confirm Password</label>
                                  <input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" />
                                  <font id="cerror" color="red"></font>

                                </div>
                            </div>
                        </div>


                        

                    <div class="form-group terms-conditions text-center">
                      <input id="register-agree" name="registerAgree" type="checkbox" required value="1" data-msg="Your agreement is required" class="checkbox-template">
                      <label for="register-agree">I agree with the terms and policy</label>
                    </div>
                    <div class="form-group text-center">
                      <input id="register" type="submit" value="Register" class="btn btn-primary">
                    </div>
                  </form><small>Already have an account? </small><a href="{{ route('login') }}" class="signup">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
    </div>
    <!-- JavaScript files-->
       <script src="{{asset('backend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('backend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('backend/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('backend/js/charts-home.js')}}"></script>
    <script src="{{asset('backend/js/front.js')}}"></script>    </body>
</html>