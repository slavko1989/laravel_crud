@include('head')

<div class="container">
  <h2>LARAVEL CRUD</h2>
  <p style="float:right;font-size: 20px;"><a href="{{ url('/create') }}">Add table</a></p>            @if(session()->has('message'))
      <p class="alert alert-success">{{ session()->get('message') }}</p>
      @endif
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
      <tbody>
        @foreach($crud as $crud)
      <tr>
        <td>{{ $crud->name }}</td>
        <td>{{ $crud->email }}</td>
        <td>{{ $crud->address }}</td>
        <td><a href="{{url('/edit/'. $crud->id) }}" class="btn btn-primary">EDIT</a> | <a href="{{url('/delete/'. $crud->id) }}" class="btn btn-danger">DELETE</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@include('footer')



