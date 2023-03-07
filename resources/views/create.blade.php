@include('head')

<div class="container">
  <h2>CREATE NEW USER</h2>
  <p style="float:right;font-size: 20px;color: black;" class="btn btn-primary"><a href="{{ url('/') }}" style="color: black;">Home page</a></p> 	  @if(session()->has('message'))
  		<p class="alert alert-success">{{ session()->get('message') }}</p>
  		@endif           
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Confirm</th>
      </tr>
    </thead>
      <tbody>
   <form method="post" action="{{ url('store') }}">
   	@csrf
      <tr>
        <td><input type="text" name="name" placeholder="enter you name" value={{ old('name') }}>
         @error('name')
         {{ $message}}
         @enderror 
        </td>
        <td><input type="text" name="email" placeholder="enter you email" value={{ old('email') }}>
          @error('email')
         {{ $message}}
         @enderror </td>
        <td><input type="text" name="address" placeholder="enter you address" value={{ old('address') }}>
          @error('address')
         {{ $message}}
         @enderror </td>
        <td><input type="submit" name="submit" value="create"></td>
      </tr>
  </form>
    </tbody>
  </table>
</div>

@include('footer')



