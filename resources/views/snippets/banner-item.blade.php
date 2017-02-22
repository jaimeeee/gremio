<?php $imageSize = getimagesize(public_path('storage/banners/' . $banner->id . '_n.jpg')); ?>
    <div class="project-item{{ $banner->size_class }}">
      <a href="{{ $banner->link }}" class="cover">
        <span class="name">{{ $banner->title }}</span>
        <span class="category">{{ $banner->subtitle }}</span>
      </a>
      <img src="{{ asset('storage/banners/' . $banner->id . '_n.jpg') }}" alt="{{ $banner->title }}" class="image-fill" data-width="{{ $imageSize[0] }}" data-height="{{ $imageSize[1] }}">
    </div>
