<x-backend>
  
            <!-- Form Panel    -->
            

  <div class="page-header">
    <div class="container-fluid">

      <h2 class="h5 no-margin-bottom">Unique Shops</h2>
    </div>


  </div>

  <div class="col-lg-12">
    <div class="block">
      <div class="title"><strong>Registration Here</strong></div>
      <ul class="app-breadcrumb breadcrumb side" style="margin-left:90%;">
       <a href="{{ route('shop.index') }}" class="btn btn-outline-primary">
        <i class="icofont-double-left icofont-1x"></i>
      </a>
    </ul>
    <div class="block-body">
                    <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                        @csrf

                                            <div class="form-row">
                                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="label-material" for="inputprofile"> Profile</label><br>
                                  <input  id="inputprofile" type="file" name="photo" autofocus="" required/>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                  <label class="label-material" for="inputName"> Name</label>
                                  <input class="form-control py-4" id="inputName" type="text" placeholder="Enter Name" name="name" autofocus="" required data-msg="Please enter your username"  />

                                </div>
                            </div>
                            <div class="col-md-6">
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

                        <div class="form-group row">
                          <label class="col-sm-12 form-control-label">Shops</label>
                          <div class="col-sm-12">
                            <select name="shop" class="form-control mb-3 mb-3">
                              <option> Choosen Shops </option>
                              @foreach($data[0] as $shop)
                                <option value="{{$shop->id}}">
                                    {{$shop->name}}
                                </option>
                              @endforeach
                            </select>
                          </div>
                        </div>  


                      
                        <div class="form-group">
                            <label class="label-material"  for="inputEmailAddress">Email</label>
                            <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="email" />
                        </div>


                    <div class="form-group text-center">
                      <input id="register" type="submit" value="Register" class="btn btn-primary">
                    </div>
                  </form>
                </div>
             
            </div>
          </div>
           <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
    
</x-backend>