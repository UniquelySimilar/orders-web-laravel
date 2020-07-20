  <div class="form-group row">
    <label for="firstname" class="col-md-2 offset-md-2 col-form-label">First Name</label>
    <div class="col-md-6">
      <input type="text" class="form-control" id="firstname" name="first_name"
        value="{{ old('first_name', isset($customer) ? $customer->first_name : '') }}">
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
      <input type="text" class="form-control" id="lastname" name="last_name"
        value="{{ old('last_name', isset($customer) ? $customer->last_name : '') }}">
    </div>
    <span class="col-form-label"> *</span>
  </div>
  @error('last_name')
  <div class="form-group row">
    <div class="col-md-6 offset-md-4 text-danger">{{ $message }}</div>
  </div>
  @enderror

  <div class="form-group row">
    <label for="street" class="col-md-2 offset-md-2 col-form-label">Street</label>
    <div class="col-md-6">
      <input type="text" class="form-control" id="street" name="street"
        value="{{ old('street', isset($customer) ? $customer->street : '') }}">
    </div>
    <span class="col-form-label"> *</span>
  </div>
  @error('street')
  <div class="form-group row">
    <div class="col-md-6 offset-md-4 text-danger">{{ $message }}</div>
  </div>
  @enderror

  <div class="form-group row">
    <label for="city" class="col-md-2 offset-md-2 col-form-label">City</label>
    <div class="col-md-6">
      <input type="text" class="form-control" id="city" name="city"
        value="{{ old('city', isset($customer) ? $customer->city : '') }}">
    </div>
    <span class="col-form-label"> *</span>
  </div>
  @error('city')
  <div class="form-group row">
    <div class="col-md-6 offset-md-4 text-danger">{{ $message }}</div>
  </div>
  @enderror

  <div class="form-group row">
    <label for="state" class="col-md-2 offset-md-2 col-form-label">State</label>
    <div class="col-md-6">
      @php
        $selectedState = old('state', isset($customer) ? $customer->state : 'Colorado')
      @endphp
      <select class="form-control" id="state" name="state">
        @foreach($states as $key => $value)
          <option value="{{ $value }}" {{ $value == $selectedState ? 'selected' : '' }}>{{ $value }}</option>
        @endforeach
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="zipcode" class="col-md-2 offset-md-2 col-form-label">Zip Code</label>
    <div class="col-md-6">
      <input type="text" class="form-control" id="zipcode" name="zipcode"
        value="{{ old('zipcode', isset($customer) ? $customer->zipcode : '') }}">
    </div>
    <span class="col-form-label"> *</span>
  </div>
  @error('zipcode')
  <div class="form-group row">
    <div class="col-md-6 offset-md-4 text-danger">{{ $message }}</div>
  </div>
  @enderror

  <div class="form-group row">
    <label for="homephone" class="col-md-2 offset-md-2 col-form-label">Home Phone</label>
    <div class="col-md-6">
      <input type="text" class="form-control" id="homephone" name="home_phone"
        value="{{ old('home_phone', isset($customer) ? $customer->home_phone : '') }}" placeholder="###-###-####">
    </div>
    <span class="col-form-label"> *</span>
  </div>
  @error('home_phone')
  <div class="form-group row">
    <div class="col-md-6 offset-md-4 text-danger">{{ $message }}</div>
  </div>
  @enderror

  <div class="form-group row">
    <label for="workphone" class="col-md-2 offset-md-2 col-form-label">Work Phone</label>
    <div class="col-md-6">
      <input type="text" class="form-control" id="workphone" name="work_phone"
        value="{{ old('work_phone', isset($customer) ? $customer->work_phone : '') }}" placeholder="###-###-####">
    </div>
  </div>
  @error('work_phone')
  <div class="form-group row">
    <div class="col-md-6 offset-md-4 text-danger">{{ $message }}</div>
  </div>
  @enderror

  <div class="form-group row">
    <label for="email" class="col-md-2 offset-md-2 col-form-label">Email</label>
    <div class="col-md-6">
      <input type="email" class="form-control" id="email" name="email"
        value="{{ old('email', isset($customer) ? $customer->email : '') }}">
    </div>
    <span class="col-form-label"> *</span>
  </div>
  @error('email')
  <div class="form-group row">
    <div class="col-md-6 offset-md-4 text-danger">{{ $message }}</div>
  </div>
  @enderror

  <div class="form-group row">
    <div class="col-md-6 offset-md-4">
      <button type="submit" class="btn btn-light btn-outline-secondary">Save</button>
      <a class="btn btn-light btn-outline-secondary" href="{{ route('customers.index') }}" role="button">Cancel</a>
    </div>
  </div>
