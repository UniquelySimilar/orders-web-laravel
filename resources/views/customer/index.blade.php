@extends('layouts.app')

@section('title', 'Customers')

@section('content')
<div class="container">
<header class="page-title">
  <span class="title-text d-inline-block align-middle">Customers</span>
  <a class="btn btn-light btn-outline-secondary" href="{{ route('customers.create') }}" role="button">Add Customer</a>
</header>
<table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th>LAST NAME</th>
      <th>FIRST NAME</th>
      <th>CITY</th>
      <th>STATE</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach($customers as $customer)
    <tr>
      <td>{{ $customer->last_name }}</td>
      <td>{{ $customer->first_name }}</td>
      <td>{{ $customer->city }}</td>
      <td>{{ $customer->state }}</td>
      <td>
        <a href="{{ route('customers.edit', ['customer' => $customer->id]) }}">Edit</a>
      </td>
      <td>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<example-component></example-component>
<modal-component @close="showModal = false">
  <!--
    you can use custom content here to overwrite
    default content
  -->
  <h3 slot="header">custom header</h3>
</modal-component>
@endsection
