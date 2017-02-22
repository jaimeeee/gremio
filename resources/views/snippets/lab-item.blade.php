<?php $fileExtension = is_file(public_path('storage/lab/' . $image->id . '.png')) ? 'png' : 'jpg'; ?>
<?php $imageSize = getimagesize(public_path('storage/lab/' . $image->id . '_n.' . $fileExtension)); ?>
    <div class="project-item{{ $image->size_class }}" style="transform: translateY({{ $image->offset }}px); z-index: {{ $image->offset }};">
      <img src="{{ asset('storage/lab/' . $image->id . '_n.' . $fileExtension) }}" alt="{{ $image->name }}" class="image-fill" data-width="{{ $imageSize[0] }}" data-height="{{ $imageSize[1] }}">
    </div>
