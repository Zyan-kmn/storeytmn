
<x-backend>
     @php
        $id = $brand->id;
        $name = $brand->name;
        $logo = $brand->logo;
        $category_id = $brand->category_id;

    @endphp
  <div class="page-header">
    <div class="container-fluid">

      <h2 class="h5 no-margin-bottom">Unique Shop's Brand</h2>
    </div>


  </div>

  <div class="col-lg-12">
    <div class="block">
      <div class="title"><strong>Brand Updating Form</strong></div>
      <ul class="app-breadcrumb breadcrumb side" style="margin-left:90%;">
       <a href="{{ route('brand.index') }}" class="btn btn-outline-primary">
        <i class="icofont-double-left icofont-1x"></i>
      </a>
    </ul>
    <div class="block-body">
        <form action="{{ route('brand.update',$id) }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                  <input type="hidden" name="oldLogo" value="{{ $logo }}">
                            

        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Name</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="name" value="{{ $name }}">
            <div class="text-danger form-control-feedback">
              {{ $errors->first('name') }}
            </div>
          </div>
        </div>
        <div class="line"></div>

                      <div class="form-group row">
                                <label for="photo_id" class="col-sm-3 col-form-label"> Category </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="categoryid">
                                        <option> Choose Category </option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" @if($category_id == $category->id) {{'selected'}} @endif> 
                                              {{ $category->name }} </option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger form-control-feedback">
                                        {{ $errors->first('categoryid') }}
                                    </div>
                                </div>
                            </div>

          <div class="form-group row">

          <label class="col-sm-3 form-control-label">Logo</label>
          <div class="col-sm-9">
            <div class="text-danger form-control-feedback">
              {{ $errors->first('logo') }}
            </div>
          </div>
               <div class="line"></div>


                                <div class="col-sm-12" >
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="oldPhoto-tab" data-toggle="tab" href="#oldPhotoTab" role="tab" aria-controls="oldPhotoTab" aria-selected="true"> Old Logo </a>
                                        </li>
                                      
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="newPhoto-tab" data-toggle="tab" href="#newPhotoTab" role="tab" aria-controls="newPhotoTab" aria-selected="false"> New Logo </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-3" id="myTabContent">
                                        <div class="tab-pane fade show active" id="oldPhotoTab" role="tabpanel" aria-labelledby="oldPhoto-tab">
                                            <img src="{{ asset($logo) }}" class="img-fluid w-25">
                                        </div>
                                        
                                        <div class="tab-pane fade" id="newPhotoTab" role="tabpanel" aria-labelledby="newPhoto-tab">
                                            <input type="file" id="logo_id" name="logo">
                                        </div>
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
