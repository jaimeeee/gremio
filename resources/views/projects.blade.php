@extends('layouts.site')

@section('content')
  <div class="container">
    <h2 class="lower">{{ $category->name }}</h2>
  </div>
  <div id="projects-grid" class="no-top">
    <div class="grid-sizer"></div>
@foreach ($category->projects()->orderBy('created_at')->get() as $project)
@include('snippets.project-item')
@endforeach
  </div>
@endsection

@section('footer')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.1.0/masonry.pkgd.min.js"></script>
  <script>gremiodiseno.projectsInit();</script>
@endsection
