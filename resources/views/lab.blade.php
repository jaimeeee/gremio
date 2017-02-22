@extends('layouts.site')

@section('content')
  <div id="lab-title" class="container">
    <h2>LAB-GD</h2>
    <h3>Buscar lo inesperado,<br>nunca había sido tan<br>divertido.</h3>
  </div>
  <div id="projects-grid">
    <div class="grid-sizer"></div>
@foreach ($images as $image)
@include('snippets.lab-item')
@endforeach
  </div>
@endsection

@section('footer')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.1.0/masonry.pkgd.min.js"></script>
  <script>gremiodiseno.projectsInit();</script>
@endsection
