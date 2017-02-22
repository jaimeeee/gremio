<?php $imageSize = getimagesize(public_path('storage/projects/' . $project->id . '_t.jpg')); ?>
    <div class="project-item{{ $project->size_class }}">
      <a href="{{ url('proyectos/' . $project->url) }}" class="cover">
        <span class="name">{{ $project->name }}</span>
        <span class="category">{{ $project->category->name }}</span>
      </a>
      <img src="{{ asset('storage/projects/' . $project->id . '_t.jpg') }}" alt="{{ $project->name }}" class="image-fill" data-width="{{ $imageSize[0] }}" data-height="{{ $imageSize[1] }}">
    </div>
