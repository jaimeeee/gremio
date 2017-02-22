<?php $imageSize = getimagesize(public_path('storage/project_images/' . $image->id . '_n.jpg')); ?>
    <div class="project-item{{ $image->size_class }}">
@if ($image->media)
      {!! $image->media->html !!}
@else
      <a href="{{ url('proyectos/' . $image->url) }}">
        <img src="{{ asset('storage/project_images/' . $image->id . '_n.jpg') }}" alt="{{ $image->title }}" class="image-fill" data-width="{{ $imageSize[0] }}" data-height="{{ $imageSize[1] }}">
      </a>
@endif
    </div>
