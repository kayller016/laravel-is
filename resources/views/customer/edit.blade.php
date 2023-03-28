@include('partials.header')
<x-nav />
<h3>Edit Account</h3>
<form action="/updateCustomer" method="Post">
    @CSRF
<div class="mb-3">
        <label for="name" class="form-label"> </label>
        <input type="hidden" class="form-control" name="id" value="{{$customer->id}}">
<div class="mb-3">
        <label for="name" class="form-label">First Name</label>
        <input type="name" class="form-control" name="firstName" value="{{$customer->firstName}}">

</div>
<div class="mb-3">
        <label for="name" class="form-label">Last Name</label>
        <input type="name" class="form-control" name="lastName" value="{{$customer->lastName}}">

</div>
        <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
        value="{{$customer->email}}">
@error('email')
<p>invalid email</p>
@enderror
<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

</div>
<div class="mb-3">
<label for="ContactNo" class="form-label">Contact</label>
<input type="contactNo" class="form-control" name="contactNumber" value="{{$customer->contactNumber}}">
@error('email')
<p>invalid password</p>
@enderror
</div>

<div class="mb-3">
<label for="address" class="form-label">address</label>
<input type="address" class="form-control" name="address" value="{{$customer->address}}">

</div>
<button type="submit" class="btn btn-primary">Submit</button>
<a class="navbar-brand" href="login">Login instead</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
</form>