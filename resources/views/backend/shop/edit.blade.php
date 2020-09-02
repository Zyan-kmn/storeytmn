
<x-backend>
     @php
        $id = $shop->id;
        $name = $shop->name;
        $address = $shop->address;

    @endphp
  <div class="page-header">
    <div class="container-fluid">

      <h2 class="h5 no-margin-bottom">Unique Shops</h2>
    </div>


  </div>

  <div class="col-lg-12">
    <div class="block">
      <div class="title"><strong>Category Updating Form</strong></div>
      <ul class="app-breadcrumb breadcrumb side" style="margin-left:90%;">
       <a href="{{ route('shop.index') }}" class="btn btn-outline-primary">
        <i class="icofont-double-left icofont-1x"></i>
      </a>
    </ul>
    <div class="block-body">
        <form action="{{ route('shop.update',$id) }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')


                            

        <div class="form-group row">
          <label class="col-sm-3 form-control-label">SHOPName</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="name" value="{{ $name }}">
            <div class="text-danger form-control-feedback">
              {{ $errors->first('name') }}
            </div>
          </div>
        </div>
        <div class="line"></div>

          <div class="form-group row">

          <label class="col-sm-3 form-control-label">Address</label>
          <div class="col-sm-9">
           <input type="text" class="form-control" name="address" value="{{ $address }}">

            <div class="text-danger form-control-feedback">
              {{ $errors->first('address') }}
            </div>
          </div>
               <div class="line"></div>

                              
                            </div>
                           </div>

      <div class="line"></div>
        <div class="form-group row">
          <div class="col-sm-9 ml-auto">
            <button type="reset" class="btn btn-secondary">Cancel</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>
</x-backend>
