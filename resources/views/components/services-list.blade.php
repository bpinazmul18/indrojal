@props(['services'])

<div class="row justify-content-center">
    @foreach ($services as $service)
    <div class="col-sm-6 col-md-4 col-lg-3 wow fadeInUp" data-wow-delay="{{$service->data_delay}}">
        <div class="card border-0 my-3 rounded-3 shadow-lg text-center p-4 service-image-box2 hv-background-before">
            <div class="order-number"></div>
            <div class="featured-post">
                <div class="entry-image">
                    <img src="{{ asset('asset/images/services/' . $service->icon_url) }}" alt="{{ $service->title }}">
                </div>
            </div>
            <div class="content-service">
                <h3 class="title mb-0">{{ $service->title }}</h3>
                <p class="my-2 desc">
                    {{ $service->description }}
                </p>
                <a class="stretched-link" href="{{ url($service->slug) }}"></a>
            </div>
        </div>
    </div>
    @endforeach
</div>
