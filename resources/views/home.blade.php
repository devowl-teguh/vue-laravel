@extends('layouts.app')

@section('title', 'Page Home')

@section('content')
<!-- As a heading -->
<nav-component></nav-component>
<div class="container">
  <div class="row">
      <router-view></router-view>
  </div>
</div>
@endsection
