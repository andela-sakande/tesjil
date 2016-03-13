@extends('layouts.master')
@section('title', 'Tesjil | A verified peopled directory!')

@section('custom-css')
<link rel="stylesheet" type="text/css" href="css/welcome.css">
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
      <div class="input-group">
        <input type="text" class="form-control" placeholder="What are you looking for?" aria-describedby="basic-addon2">
        <span class="input-group-addon" id="basic-addon2">Search</span>
      </div>
    </div>

  </div>
</div>
</header>
  <div class="title">Tesjil</div>
  <p>A verified peopled directory!</p>

@endsection
@section('scripts')
<script type="text/javascript" src="js/app.js"></script>
@endsection
