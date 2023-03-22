@extends('master')

@section('content')
    <div class="custom-product">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                @foreach ($products  as $key => $product)
                @if($key == 0)
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                @else
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $key }}" aria-label="Slide {{ $key }}"></button>
                @endif
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach ($products as $key => $product)
                        <div class="carousel-item active">
                            <a href="/detail{{ $product['id'] }}">
                                <img src="{{ $product->gallery }}" class="d-block" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>{{ $product->name }}</h5>
                                    <p>{{ $product->description }}</p>
                                </div>
                            </a>
                        </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="trending-wrapper py-5">
            <h2 class="text-center py-3">Trending Products</h2>
            @foreach ($products as $key => $product)
                    <div class="trending-item text-center">
                        <a href="/detail/{{ $product['id'] }}">
                            <img src="{{ $product->gallery }}" class="trending-image" alt="...">
                            <div class="">
                                <h5>{{ $product->name }}</h5>
                            </div>
                        </a>
                    </div>
            @endforeach
        </div>
    </div>
@endsection
