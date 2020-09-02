
<x-backend>
  
  <div class="page-header">
    <div class="container-fluid">

      <h2 class="h5 no-margin-bottom">Unique Shop's Category</h2>
    </div>


  </div>

  <div class="col-lg-12">
    <div class="block">
      <div class="title"><strong>Category List</strong></div>
      <ul class="app-breadcrumb breadcrumb side" style="margin-left:90%;">
       <a href="{{ route('category.index') }}" class="btn btn-outline-primary">
        <i class="icofont-double-left icofont-1x"></i>
      </a>
    </ul>
    <div class="block-body">
      <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">

        @csrf
        
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Name</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="name">
            <div class="text-danger form-control-feedback">
              {{ $errors->first('name') }}
            </div>
          </div>
        </div>
        <div class="line"></div>

        <div class="form-group row">
          <label for="photo_id" class="col-sm-3 form-control-label">Photo</label>
          <div class="col-sm-9">
            <input type="file" name="photo" id="photo_id" >
            <div class="text-danger form-control-feedback">
              {{ $errors->first('photo') }}
            </div>
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
