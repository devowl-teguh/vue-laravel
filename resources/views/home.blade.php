@extends('layouts.app')

@section('title', 'Page Home')

@section('content')
<!-- As a heading -->
<div class="container">
  <div class="row">
      <router-view></router-view>
  </div>
</div>
@endsection
