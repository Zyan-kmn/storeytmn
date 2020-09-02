<x-backend>

  <div class="col-md-12">
    <div class="block margin-bottom-sm">
        <div class="title"><strong>Shops List Table</strong></div>
        <ul class="app-breadcrumb breadcrumb side"style="margin-left:90%;">
            <a href="{{ route('shop.create') }}" class="btn btn-outline-primary">
                <i class="icofont-plus icofont-1x"></i>
            </a>
        </ul>

        <div class="table-responsive"> 
            <table class="table table-striped" id="dataTable">
              <thead>
                <tr>
                  <th>#</th>
                  <th>ShopName</th>
                  <th>Address</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
           @php $i=1; @endphp

           @foreach($shops as $shop)

           @php
           $id = $shop->id;
           $name = $shop->name;
           $address = $shop->address;

           @endphp
           <tr>
              <th scope="row">{{$i++}}</th>

              <td>{{$name}}</td>
              <td> 
                {{$address}}
                    </td>

            <td>
                <a href="{{ route('shop.edit',$id) }}" class="btn btn-outline-warning">
                    <i class="icofont-ui-settings icofont-1x"></i>
                </a>

                <form action="{{ route('shop.destroy',$id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?')">

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