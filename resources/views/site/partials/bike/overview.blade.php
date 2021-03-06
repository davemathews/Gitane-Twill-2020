<section class="page-section" id="product-overview">
    <div class="container-fluid">
        <div class="row">
                @php( $images = $bike->images('gallery', 'default') )
                <div id="product-pictures" class="col-12 col-lg-7 px-0 py-5 owl-carousel">
                    @foreach( $images as $item )
                        <img src="{{ $item }}" alt="">
                    @endforeach
                </div>
            <div id="product-info" class="col-12 col-lg-5">
                @include('site.partials.bike.overview.block_name')
                @include('site.partials.bike.overview.block_price')
                @include('site.partials.bike.overview.block_description')
                @include('site.partials.bike.overview.block_colors')
                @include('site.partials.bike.overview.block_sizes')
                @include('site.partials.bike.overview.block_certificate')
            </div>
        </div>
    </div>
</section>