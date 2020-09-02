<x-backend>

  <div class="col-md-12">
    <div class="block margin-bottom-sm">
        <div class="title"><strong>Brand List Table</strong></div>
        <ul class="app-breadcrumb breadcrumb side"style="margin-left:90%;">
            <a href="{{ route('brand.create') }}" class="btn btn-outline-primary">
                <i class="icofont-plus icofont-1x"></i>
            </a>
        </ul>

        <div class="table-responsive"> 
            <table class="table table-striped" id="dataTable">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Logo</th>
                  <th>Category Name</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
           @php $i=1; @endphp

           @foreach($brands as $brand)

           @php
           $id = $brand->id;
           $name = $brand->name;
           $logo = $brand->logo;

            $categoryid = $brand->category_id;
           $category = $brand->category->name;

           @endphp
           <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$name}}</td>
              <td> 
                <img src="{{ asset($logo) }}" class="img-fluid" style="width: 70px;">
                </td>
                <td>{{$category}}</td>

            <td>
                <a href="{{ route('brand.edit',$id) }}" class="btn btn-outline-warning">
                    <i class="icofont-ui-settings icofont-1x"></i>
                </a>

                <form action="{{ route('brand.destroy',$id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?')">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-outline-danger" type="submit"> 
                        <i class="icofont-close icofont-1x"></i>
                    </button>

                </form>
            </td>

        </tr>
        @endforeach

    </tbody>
</table>
</div>
</div>
</div>
</x-backend>