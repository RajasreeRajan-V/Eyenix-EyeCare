@forelse ($eyeglasses as $item)
    <div class="col-lg-4 col-md-6 gallery-item-wrapper"
         data-brand="{{ $item->brand_id }}"
         data-shape="{{ $item->shape_id }}"
         data-frame="{{ $item->frame_id }}"
         data-gender="{{ $item->gender }}"
         data-colors="{{ $item->colors->pluck('id')->join(',') }}">

        @if ($item->back_image)
            <div class="gallery-item has-two-images">
                <div class="gallery-image-wrapper">
                    <img src="{{ asset('storage/' . $item->front_image) }}" class="img-fluid img-main" alt="{{ $item->name }}">
                    <img src="{{ asset('storage/' . $item->back_image) }}" class="img-fluid img-secondary" alt="{{ $item->name }}">
                </div>
                <div class="gallery-overlay">
                    <div class="gallery-content">
                        <i class="fas fa-glasses mb-3"></i>
                        <h5>{{ $item->name }}</h5>
                        <p>{{ $item->description ?? 'Premium eyeglass collection' }}</p>
                        @if($item->price)
                            <span class="text-info fw-bold">₹ {{ $item->price }}</span>
                        @endif
                    </div>
                </div>
            </div>
        @else
            <div class="gallery-item">
                <img src="{{ asset('storage/' . $item->front_image) }}" class="img-fluid" alt="{{ $item->name }}">
                <div class="gallery-overlay">
                    <div class="gallery-content">
                        <i class="fas fa-glasses mb-3"></i>
                        <h5>{{ $item->name }}</h5>
                        <p>{{ $item->description ?? 'Premium eyeglass collection' }}</p>
                        @if($item->price)
                            <span class="text-info fw-bold">₹ {{ $item->price }}</span>
                        @endif
                    </div>
                </div>
            </div>
        @endif
    </div>
@empty
    <div class="col-12">
        <p class="text-light">No eyeglasses available at the moment.</p>
    </div>
@endforelse
