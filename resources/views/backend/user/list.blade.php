<x-backend>

  <div class="col-md-12">
    <div class="block margin-bottom-sm">
        <div class="title"><strong> {{ $title }} Table</strong></div>
        <ul class="app-breadcrumb breadcrumb side"style="margin-left:90%;">
            <a href="{{ route('user.create') }}" class="btn btn-outline-primary">
                <i class="icofont-plus icofont-1x"></i>
            </a>
        </ul>

        <div class="table-responsive"> 
            <table class="table table-striped" id="dataTable">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>

                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
           @php $i=1; @endphp

           @foreach($users as $user)

           @php
           $id = $user->id;
           $name = $user->name;
           $email = $user->email;
           $phone = $user->phone;

           @endphp
           <tr>
              <th scope="row">{{$i++}}</th>

              <td>{{$name}}</td>
              <td> 
                {{$email}}
              </td>
              <td>{{$phone}}</td>

            <td>
                

                <form action="{{ route('user.destroy',$id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?')">

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