@extends('layouts.app')

@section('title', 'Customers')

@section('content')
<h3 class="page-title">Customers</h3>
<table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th>LAST NAME</th>
      <th>FIRST NAME</th>
      <th>CITY</th>
      <th>STATE</th>
    </tr>
  </thead>
  <tbody>
    @foreach($customers as $customer)
    <tr>
      <td>{{ $customer->last_name }}</td>
      <td>{{ $customer->first_name }}</td>
      <td>{{ $customer->city }}</td>
      <td>{{ $customer->state }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
