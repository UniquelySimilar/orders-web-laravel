@extends('layouts.app')

@section('title', 'Add Customer')

@section('content')
<div class="container">
<header class="page-title">
  <span class="title-text d-inline-block align-middle">Add Customer</span>
  <span>&nbsp;&nbsp;(* = Required)</span>
</header>
<form method="post" action="{{ route('customers.store') }}">
  @csrf
  @include('customer.form-inputs')
</form>
</div>
@endsection
