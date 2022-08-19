@extends('include.app')
@section('title', $data['name'])
@section('content')
<div class="page-section pt-1">
    <div class="container">
        <nav aria-label="Breadcrumb">
            <ul class="breadcrumb p-0 mb-0 bg-transparent">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item">Exchange</li>
                <li class="breadcrumb-item active">{{ $data['name'] }}</li>
            </ul>
        </nav>
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-single-wrap">
                    <div class="header">
                        <div class="post-thumb">
                            <img src="https://placeimg.com/640/480/tech" alt="">
                        </div>
                        <div class="meta-header">
                            <div class="post-author">
                                <div class="avatar">
                                    <img src="{{ $data['logo'] }}" alt="">
                                </div>
                            </div>
                            <div class="post-sharer">
                                <a href="{{ implode(",", $data['urls']['website']) }}" target="_blank" rel="nofollow"
                                    class="btn google-plus" title="Website"><span class="mai-globe"></span></a>
                                <a href="{{ implode(",", $data['urls']['fee']) }}" target="_blank" rel="nofollow"
                                    class="btn" title="Price"><span class="mai-pricetag"></span></a>
                                <a href="{{ implode(",", $data['urls']['chat']) }}" target="_blank" rel="nofollow"
                                    class="btn social-facebook" title="Chat"><span class="mai-logo-telegram"></span></a>
                                <a href="{{ implode(",", $data['urls']['twitter']) }}" target="_blank" rel="nofollow"
                                    class="btn social-twitter" title="Twitter"><span
                                        class="mai-logo-twitter"></span></a>
                            </div>
                        </div>
                    </div>
                    <h1 class="post-title">
                        {{ $data['name'] }}
                    </h1>
                    <div class="post-meta">
                        <div class="post-date">
                            <span class="icon">
                                <span class="mai-information-circle"></span>
                            </span> <a href="#">{{ date('D d M Y', strtotime($data['date_launched']) )}}</a>
                            | Weekly Visitor :
                                <span class="badge badge-success">{{ number_format($data['weekly_visits'],0) }}</span>
                        </div>
                    </div>
                    <div class="post-content">
                        <h4 class="widget-title">Spot Volume 24h</h4>
                        <div class="divider"></div>
                        <h2>
                            ${{ number_format($data['spot_volume_usd'],2) }}
                        </h2>
                    </div>
                    <br>
                    <div class="post-content">
                        <h4 class="widget-title">Description</h4>
                        <div class="divider"></div>
                        @if($data['notice'])
                        <p>
                            {{$data['notice'] }}
                        </p>
                        @elseif($data['description'])
                        <p>
                            {{ $data['description'] }}
                        </p>
                        @else
                        <p>
                            Description Not Available
                        </p>
                        @endif
                    </div>
                    <div class="post-content">
                        <h4 class="widget-title">Fee</h4>
                        <div class="divider"></div>
                        <ul>
                            <li>
                                Maker Fee : {{ $data['maker_fee'] }}%
                            </li>
                            <li>
                                Taker Fee : {{ $data['taker_fee'] }}%
                            </li>
                        </ul>
                    </div>
                    <div class="post-content">
                        <h4 class="widget-title">Fiat Supported</h4>
                        <div class="divider"></div>
                        @if ($data['fiats'])
                        @foreach ($data['fiats'] as $item)
                        <a href="#!" class="tag-cloud-link">{{ $item }}</a>
                        @endforeach
                        @else
                        <a href="#!" class="tag-cloud-link">Not Available</a>
                        @endif
                    </div>
                </div>
            </div>
            @include('include.sidebar')
        </div>
    </div>
</div>
@endsection
