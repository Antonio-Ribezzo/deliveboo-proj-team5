@extends('layouts.app')
@section('content')
<div class="bg-food div-food d-flex justify-content-center align-items-center px-5">
  {{-- <div class="img-login"></div> --}}
  <div class="d-flex justify-content-around align-items-center">
    <div class="mx-4  div-register">
      <a class="text-decoration-none ui-btn" href="{{ route('login') }}">{{ __('Login') }}
      </a>
    </div>
    <div class="mx-4  div-register">
      <a class="text-decoration-none ui-btn" href="{{ route('register') }}">{{ __('Register') }}</a>
    </div>
  </div>
  <div class="div-color "></div>
</div>
@endsection