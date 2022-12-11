@props(['items'])

<div class="row justify-content-center">
    @foreach ($items as $items)
    <div class="col-sm-6 col-md-4 col-lg-3 wow fadeInUp" data-wow-delay="{{$items->data_delay}}">
        <div class="card border-0 my-3 rounded-3 shadow-lg text-center p-4 service-image-box2 hv-background-before">
            <div class="order-number"></div>
            <div class="featured-post">
                <div class="entry-image">
                    <img src="{{ asset('asset/images/services/' . $items->icon_url) }}" alt="{{ $items->title }}">
                </div>
            </div>
            <div class="content-service">
                <h3 class="title mb-0">{{ $items->title }}</h3>
                <p class="my-2 desc">
                    {{ $items->description }}
                </p>
                <a class="stretched-link" href="{{ url($items->slug) }}"></a>
            </div>
        </div>
    </div>
    @endforeach
</div>
