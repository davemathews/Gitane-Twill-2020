@extends('layouts.app')

@section('content')
<div id="cover" class="container-fluid">
    <div class="row">
        <div class="col-12 px-0">
            <div class="cover-picture d-none d-md-block"><img src="/img/desktop_cover_fas.jpg" alt="" width="100%"></div>
            <div class="cover-picture d-block d-md-none"><img src="/img/mobile_cover_fas.jpg" alt="" width="100%"></div>
            <div class="cover-overlay"></div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col py-5">
            <h1>@lang('common.store.plural')</h1>
        </div>
    </div>
    @include('site.partials.stores.french_stores')
</div>

@endsection