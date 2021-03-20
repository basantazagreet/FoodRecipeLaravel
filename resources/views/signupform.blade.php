<h1>User Registration form</h1>

@if(Session::get('register_status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{Session::get('register_status')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
@endif
{{$errors}}




<form action="signup" method="POST" >
@csrf

<input type="text" name="name" placeholder="Enter Name">
<span style="color:red">@error('name'){{$message}} @enderror</span>
<br><br>


<input type="text" name="address" placeholder="Enter Address">
<span style="color:red">@error('address'){{$message}} @enderror</span>
<br><br>


<input type="email" name="email" placeholder="Enter Email address">
<span style="color:red">@error('email'){{$message}} @enderror</span>
<br><br>



<input type="number" name="phone" placeholder="Enter Phone">
<span style="color:red">@error('phone'){{$message}} @enderror</span>
<br><br>

<input type="text" name="username" placeholder="Enter Username">
<span style="color:red">@error('username'){{$message}} @enderror</span>
<br><br>

<input type="password" name="password" placeholder="Password">
<span style="color:red">@error('password'){{$message}} @enderror</span>
<br><br>


<input type="password" name="retype" placeholder="Retype-Password">
<span style="color:red">@error('retype'){{$message}} @enderror</span>
<br><br>




<input type="submit" value="Add data">
<input type="reset" values="Cancel">

</form>