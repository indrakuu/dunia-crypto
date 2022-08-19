@extends('include.app')
@section('title', $data['name'])
@section('content')
<div class="page-section pt-1">
    <div class="container">
        <nav aria-label="Breadcrumb">
            <ul class="breadcrumb p-0 mb-0 bg-transparent">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item">Cryptocurrencies</li>
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
                                <span class="badge badge-success">Rank #{{ $data2['cmc_rank'] }}</span>
                                <span class="badge badge-secondary">{{ $data['category'] }}</span>
                            </div>

                            <div class="post-sharer">
                                <a href="{{ implode(",", $data['urls']['website']) }}" target="_blank" rel="nofollow"
                                    class="btn social-facebook" title="Website"><span class="mai-globe"></span></a>
                                <a href="{{ implode(",", $data['urls']['reddit']) }}" target="_blank" rel="nofollow"
                                    class="btn" title="Reddit"><span class="mai-logo-reddit"></span></a>
                                <a href="{{ implode(",", $data['urls']['source_code']) }}" target="_blank"
                                    rel="nofollow" class="btn btn-dark" title="Source Code"><span
                                        class="mai-logo-github"></span></a>
                                <a href="{{ implode(",", $data['urls']['message_board']) }}" target="_blank"
                                    rel="nofollow" class="btn google-plus " title="Forum"><span
                                        class="mai-mail"></span></a>
                            </div>
                        </div>
                    </div>
                    <h1 class="post-title">
                      {{ $data['name'] }} ({{ $data['symbol'] }}) 
                    </h1>
                    <div class="post-meta">
                        <div class="post-date">
                            <span class="icon">
                                <span class="mai-information-circle"></span>
                            </span> <a href="#">{{ date('D d M Y', strtotime($data['date_added']) )}}</a>
                        </div>
                    </div>
                    <div class="post-content">
                      <h4 class="widget-title">Price</h4>
                      <div class="divider"></div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Price</th>
                                    <th>1h%</th>
                                    <th>24h%</th>
                                    <th>7d%</th>
                                    <th>30d%</th>
                                    <th>60d%</th>
                                    <th>90d%</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @if($data2['cmc_rank'])
                                    <td>${{ number_format($data2['quote']['USD']['price'],2) }}</td>
                                    <td>
                                        <span
                                            class="badge {{ (number_format($data2['quote']['USD']['percent_change_1h'],2) < 0) ? 'badge-danger' : 'badge-success' }}">
                                            {{ number_format($data2['quote']['USD']['percent_change_1h'],2) }}%
                                        </span>
                                    </td>
                                    <td>
                                        <span
                                            class="badge {{ (number_format($data2['quote']['USD']['percent_change_24h'],2) < 0) ? 'badge-danger' : 'badge-success' }}">
                                            {{ number_format($data2['quote']['USD']['percent_change_24h'],2) }}%
                                        </span>
                                    </td>
                                    <td>
                                        <span
                                            class="badge {{ (number_format($data2['quote']['USD']['percent_change_7d'],2) < 0) ? 'badge-danger' : 'badge-success' }}">
                                            {{ number_format($data2['quote']['USD']['percent_change_7d'],2) }}%
                                        </span>
                                    </td>
                                    <td>
                                        <span
                                            class="badge {{ (number_format($data2['quote']['USD']['percent_change_30d'],2) < 0) ? 'badge-danger' : 'badge-success' }}">
                                            {{ number_format($data2['quote']['USD']['percent_change_30d'],2) }}%
                                        </span>
                                    </td>
                                    <td>
                                        <span
                                            class="badge {{ (number_format($data2['quote']['USD']['percent_change_60d'],2) < 0) ? 'badge-danger' : 'badge-success' }}">
                                            {{ number_format($data2['quote']['USD']['percent_change_60d'],2) }}%
                                        </span>
                                    </td>
                                    <td>
                                        <span
                                            class="badge {{ (number_format($data2['quote']['USD']['percent_change_90d'],2) < 0) ? 'badge-danger' : 'badge-success' }}">
                                            {{ number_format($data2['quote']['USD']['percent_change_90d'],2) }}%
                                        </span>
                                    </td>
                                    @else
                                    <td colspan="7" class="text-center">Market data is untracked. This project is featured as an 'Untracked Listing'</td>
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                        <p>
                          Market Cap
                            <span class="icon" data-toggle="tooltip" data-placement="bottom" title="The total market value of a cryptocurrency's circulating supply. It is analogous to the free-float capitalization in the stock market.">
                                <span class="mai-information-circle"></span>
                            </span>
                          : ${{ number_format($data2['quote']['USD']['market_cap'],2) }}
                      </p>
                      <p>
                        Fully Diluted Market Cap 
                        <span class="icon" data-toggle="tooltip" data-placement="bottom" title="The market cap if the max supply was in circulation.
                        Fully-diluted market cap (FDMC) = price x max supply. If max supply is null, FDMC = price x total supply. if max supply and total supply are infinite or not available, fully-diluted market cap shows - -.">
                          <span class="mai-information-circle"></span>
                        </span>
                        : ${{ number_format($data2['quote']['USD']['fully_diluted_market_cap'],2) }}
                      </p>
                        <p>
                            Volume 24h
                            <span class="icon" data-toggle="tooltip" data-placement="bottom" title="A measure of how much of a cryptocurrency was traded in the last 24 hours.">
                              <span class="mai-information-circle"></span>
                            </span>
                            : ${{ number_format($data2['quote']['USD']['volume_24h'],2) }}
                            <span
                            class="badge {{ (number_format($data2['quote']['USD']['volume_change_24h'],2) < 0) ? 'badge-danger' : 'badge-success' }}">
                            {{ number_format($data2['quote']['USD']['volume_change_24h'],2) }}%
                          </span>
                        </p> 
                        <p>
                          Circulating Supply 
                          <span class="icon" data-toggle="tooltip" data-placement="bottom" title="The amount of coins that are circulating in the market and are in public hands. It is analogous to the flowing shares in the stock market.">
                            <span class="mai-information-circle"></span>
                          </span>
                            : {{ number_format($data2['circulating_supply'],2) }}
                            {{ $data2['symbol'] }}
                        </p>
                        @if($data2['max_supply'] != null)
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="{{ $data2['max_supply'] }}"
                                style="width: {{ round($data2['circulating_supply']/$data2['max_supply']*100,2) }}%">
                                {{ number_format($data2['total_supply'],2) }} {{ $data['symbol'] }}</div>
                        </div>
                        @else
                        @endif
                        <p>
                            <ul>
                                <li>
                                    Max Supply 
                                    <span class="icon" data-toggle="tooltip" data-placement="bottom" title="The maximum amount of coins that will ever exist in the lifetime of the cryptocurrency. It is analogous to the fully diluted shares in the stock market.
                                    If this data has not been submitted by the project or verified by the CMC team, max supply shows - -.">
                                      <span class="mai-information-circle"></span>
                                    </span>
                                    : {{ number_format($data2['max_supply'],2) }}
                                </li>
                                <li>
                                    Total Supply 
                                    <span class="icon" data-toggle="tooltip" data-placement="bottom" title="The amount of coins that have been already created, minus any coins that have been burned. It is analogous to the outstanding shares in the stock market.
                                    If this data has not been submitted by the project or verified by the CMC team, total supply shows - -.">
                                      <span class="mai-information-circle"></span>
                                    </span>
                                    : {{ number_format($data2['total_supply'],2) }}
                                </li>
                            </ul>
                        </p>                        
                    </div>
                    <div class="post-content">
                      <h4 class="widget-title">Description</h4>
                        <div class="divider"></div>
                        <p>
                          {{ $data['description'] }}
                      </p>
                    </div>

                    <div class="post-content">
                      <h4 class="widget-title">Tag</h4>
                        <div class="divider"></div>

                        <div class="tag-clouds">
                            @if ($data['tag-names']==null)
                            <p>
                                Tag Not Available
                            </p>
                            @else
                            @foreach ($data['tag-names'] as $item)
                            <a href="#!" class="tag-cloud-link">{{ $item }}</a>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>

            </div>
            @include('include.sidebar')
        </div>
    </div>
</div>
@endsection
