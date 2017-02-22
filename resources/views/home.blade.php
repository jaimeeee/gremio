@extends('layouts.site')

@section('content')
  <div id="home-text">
    <span>Texto de prueba</span>
  </div>
  <div id="projects-grid">
    <div class="grid-sizer"></div>
@foreach ($banners as $banner)
@include('snippets.banner-item')
@endforeach
  </div>
@endsection

@section('footer')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.1.0/masonry.pkgd.min.js"></script>
  <script>gremiodiseno.projectsInit();</script>
@endsection
