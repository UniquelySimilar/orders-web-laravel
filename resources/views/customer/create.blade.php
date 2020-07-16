@extends('layouts.app')

@section('title', 'Add Customer')

@section('content')
<h3 class="page-title">Add Customer</h3>
<form method="post" action="{{ route('customers.store') }}">
  @csrf
  <div class="form-group row">
    <label for="firstname" class="col-md-2 offset-md-2 col-form-label">First Name</label>
    <div class="col-md-6">
      <input type="text" class="form-control" id="firstname" name="first_name">
    </div>
    <span class="col-form-label"> *</span>
  </div>
  @error('first_name')
  <div class="form-group row">
    <div class="col-md-6 offset-md-4 text-danger">{{ $message }}</div>
  </div>
  @enderror

  <div class="form-group row">
    <label for="lastname" class="col-md-2 offset-md-2 col-form-label">Last Name</label>
    <div class="col-md-6">
      <input type="text" class="form-control" id="lastname" name="last_name">
    </div>
    <span class="col-form-label"> *</span>
  </div>

  <div class="form-group row">
    <label for="street" class="col-md-2 offset-md-2 col-form-label">Street</label>
    <div class="col-md-6">
      <input type="text" class="form-control" id="street" name="street">
    </div>
    <span class="col-form-label"> *</span>
  </div>

  <div class="form-group row">
    <label for="city" class="col-md-2 offset-md-2 col-form-label">City</label>
    <div class="col-md-6">
      <input type="text" class="form-control" id="city" name="city">
    </div>
    <span class="col-form-label"> *</span>
  </div>

  <div class="form-group row">
    <label for="state" class="col-md-2 offset-md-2 col-form-label">State</label>
    <div class="col-md-6">
      <select class="form-control" id="state" name="state">
      <!-- TODO: populate options from request -->
        <option value="Colorado" selected>Colorado</option>
        <option value="Oklahoma">Oklahoma</option>
        <option value="Texas">Texas</option>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="zipcode" class="col-md-2 offset-md-2 col-form-label">Zip Code</label>
    <div class="col-md-6">
      <input type="text" class="form-control" id="zipcode" name="zipcode">
    </div>
    <span class="col-form-label"> *</span>
  </div>

  <div class="form-group row">
    <label for="homephone" class="col-md-2 offset-md-2 col-form-label">Home Phone</label>
    <div class="col-md-6">
      <input type="text" class="form-control" id="homephone" name="home_phone">
    </div>
    <span class="col-form-label"> *</span>
  </div>

  <div class="form-group row">
    <label for="workphone" class="col-md-2 offset-md-2 col-form-label">Work Phone</label>
    <div class="col-md-6">
      <input type="text" class="form-control" id="workphone" name="work_phone">
    </div>
  </div>

  <div class="form-group row">
    <label for="email" class="col-md-2 offset-md-2 col-form-label">Email</label>
    <div class="col-md-6">
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <span class="col-form-label"> *</span>
  </div>

  <div class="form-group row">
    <div class="col-md-6 offset-md-4">
      <button type="submit" class="btn btn-light btn-outline-secondary">Save</button>
      <a class="btn btn-light btn-outline-secondary" href="{{ route('customers.index') }}" role="button">Cancel</a>
    </div>
  </div>
</form>
@endsection
