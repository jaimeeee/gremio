@extends('layouts.site')

@section('header')
  <meta property="og:title" content="{{ $project->name }}">
  <meta property="og:type" content="{{ env('FACEBOOK_NAMESPACE') }}:project">
  <meta property="og:url" content="{{ url('proyectos/' . $project->url) }}">
  <meta property="og:image" content="{{ asset('storage/images/' . $project->image_name . '.jpg') }}">
  <meta property="og:image:width" content="680">
  <meta property="og:image:height" content="380">
  <meta property="og:description" content="{{ $project->description }}">
  <meta property="og:locale" content="es_MX">
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:site" content="@jaimeeee">
  <meta property="twitter:creator" content="@jaimeeee">
  <meta property="twitter:title" content="{{ $project->name }}">
  <meta property="twitter:description" content="{{ $project->description }}">
  <meta property="twitter:image" content="{{ asset('storage/images/' . $project->image_name . '.jpg') }}">
  <meta property="twitter:url" content="{{ url('proyectos/' . $project->url) }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/default-skin/default-skin.min.css">
@endsection

@section('content')
  <div class="container">
    <h2 class="lower project"><small>{{ $project->subtitle ?: $project->category->name }}</small>{{ $project->name }}</h2>
    <div id="project-description">
      <div class="col tags">
@if ($project->link)
        <a href="{{ $project->link }}" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i> Visitar web</a>
@endif
@if ($project->client)
        <span><strong>Cliente: </strong> {{ $project->client }}</span>
@endif
@if ($project->duration)
        <span><strong>Duración: </strong> {{ $project->duration }}</span>
@endif
@if ($project->materials)
        <span><strong>Materiales: </strong> {{ $project->materials }}</span>
@endif
@if ($project->finish)
        <span><strong>Acabados: </strong> {{ $project->finish }}</span>
@endif
      </div>
      <div class="col description">{!! $project->description !!}</div>
      <div class="col credits">
        {!! $project->credits !!}
        <p class="share">
          <strong>Compartir:</strong>
          <a href="https://twitter.com/intent/tweet?text={{ urlencode($project->name) }}&amp;url={{ urlencode(url('proyectos/' . $project->url)) }}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="http://www.facebook.com/sharer.php?u={{ urlencode(url('proyectos/' . $project->url)) }}" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
        </p>
      </div>
    </div>
  </div>
  <div class="container">
    <img src="{{ asset('storage/projects/' . $project->id . '_f.jpg') }}" alt="{{ $project->name }}" class="img-full">
  </div>
  <div id="project-grid">
    <div class="grid-sizer"></div>
<?php $i = 0; ?>
@foreach ($project->images as $image)
@include ('snippets.project-image-item')
@if ($i == 3)
    <div class="project-item separator"></div>
@endif
<?php $i++; ?>
@endforeach
  </div>
  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true"><div class="pswp__bg"></div><div class="pswp__scroll-wrap"><div class="pswp__container"> <div class="pswp__item"></div><div class="pswp__item"></div><div class="pswp__item"></div></div><div class="pswp__ui pswp__ui--hidden"> <div class="pswp__top-bar"> <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Cerrar (Esc)"></button> <button class="pswp__button pswp__button--share" title="Compartir"></button> <button class="pswp__button pswp__button--fs" title="Ver en pantalla completa"></button> <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button> <div class="pswp__preloader"> <div class="pswp__preloader__icn"> <div class="pswp__preloader__cut"> <div class="pswp__preloader__donut"></div></div></div></div></div><div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap"> <div class="pswp__share-tooltip"></div></div><button class="pswp__button pswp__button--arrow--left" title="Anterior (flecha izquierda)"> </button> <button class="pswp__button pswp__button--arrow--right" title="Siguiente (flecha derecha)"> </button> <div class="pswp__caption"> <div class="pswp__caption__center"></div></div></div></div></div>
@endsection

@section('footer')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.1.0/masonry.pkgd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe-ui-default.min.js"></script>
  <script>gremiodiseno.projectInit();</script>
@endsection
