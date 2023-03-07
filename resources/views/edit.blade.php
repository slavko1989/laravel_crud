@include('head')

<div class="container">
  <h2>EDIT USER</h2>
  <p style="float:right;font-size: 20px;color: black;" class="btn btn-primary"><a href="{{ url('/') }}" style="color: black;">Home page</a></p> 	  @if(session()->has('message'))
  		<p class="alert alert-success">{{ session()->get('message') }}</p>
  		@endif           
  <table class="table">
    <thead>
      <tr>
        <th></th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Confirm</th>
      </tr>
    </thead>
      <tbody>
   <form method="post" action="{{ url('update') }}">
   	@csrf
      <tr>
        <td><input type="hidden" name="id" value="{{ $update->id }}"></td>
        <td><input type="text" name="name" placeholder="enter you name" value={{ $update->name }}>
         @error('name')
         {{ $message}}
         @enderror 
        </td>
        <td><input type="text" name="email" placeholder="enter you email" value={{ $update->email  }}>
          @error('email')
         {{ $message}}
         @enderror </td>
        <td><input type="text" name="address" placeholder="enter you address" value={{ $update->address }}>
          @error('address')
         {{ $message}}
         @enderror </td>
        <td><input type="submit" name="submit" value="update"></td>
      </tr>
  </form>
    </tbody>
  </table>
</div>

@include('footer')



