@extends('layouts.master')
@section('title', 'Tesjil | A verified peopled directory!')

@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">
</head>
@endsection
@section('content')
<header>
<div class="container">
  <div class="intro-text">
    <div class="intro-lead-in">
      Discover The City Gems
    </div>
    <div class="intro-description">
      Find great, trusted and verified hands for your services.
    </div>
    <div class="intro-search">
      <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon">@</span>
        <input type="text" class="form-control" placeholder="What are you looking for?">
        <span class="input-group-btn">
          <button class="btn btn-success" type="button">Search</button>
        </span>
      </div>
    </div>
    </div>
  </div>
</div>
</header>
  <section class="services">

  </section>

@endsection
@section('scripts')
<script type="text/javascript" src="js/app.js"></script>
@endsection
