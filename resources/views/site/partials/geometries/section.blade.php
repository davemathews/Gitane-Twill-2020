@if(count($bike->geometries) > 0)
<section id="product-geometries" class="py-5 {{ $bike->geometries_theme }}">
    <div class="container">
        <div class="row">
            <div class="g-head g-head-white g-head-a20">g head-white
        </div>
        <div class="col-12">
            <h2 class="text-uppercase">@lang('bike.geometry.plural')</h2>
        </div>
        <div class="col-12 col-lg-6" style="background:#111114 !important;">
            <img src="{{ $bike->geometries->first()->image('picture', 'default', ['w' => 1200]) }}" alt="" style="background:#111114 !important;">
        </div>
        <div class="col-12 col-lg-6">
            @if($bike->geometries->first()->geometry_type == "tandem")
            @include('site.partials.geometries.table-tandem')
            @else
            @include('site.partials.geometries.table')
            @endif
        </div>
    </div>
</section>
@endif