@extends('layouts.app')

@section('title', 'Edit Customer')

@section('content')
<header class="page-title">
  <span class="title-text d-inline-block align-middle">Edit Customer</span>
  <span>&nbsp;&nbsp;(* = Required)</span>
</header>
<form method="post" action="{{ route('customers.store') }}">
  @csrf
  @method('PUT')
  @include('customer.form-inputs')
</form>
@endsection
