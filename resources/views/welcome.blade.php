@extends('include.app')
@section('title', 'Let\'s check Crypto Assets Easily and Comfortably')
@section('content')
<div class="container">
    <div class="page-banner home-banner">
        <div class="row align-items-center flex-wrap-reverse h-100">
            <div class="col-md-6 py-5 wow fadeInLeft">
                <h1 class="mb-4">Let's check Crypto Assets Easily and Comfortably</h1>
                <p class="text-lg text-grey mb-5">View live top cryptocurrency prices, market cap and trading volume.
                    Discover new coins and trends today in the market.</p>
                <a href="{{ route('crypto') }}" class="btn btn-primary btn-split">Check out Crypto <div class="fab">
                        <span class="mai-play"></span>
                    </div></a>
            </div>
            <div class="col-md-6 py-5 wow zoomIn">
                <div class="img-fluid text-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/5171/5171046.png" style="width: 60%;" alt="">
                </div>
            </div>
        </div>
        <a href="#list" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a>
    </div>
</div>
<div class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card-service wow fadeInUp">
                    <div class="header">
                        <img src="https://cdn-icons-png.flaticon.com/512/4825/4825555.png" style="width: 50%;" alt="">
                    </div>
                    <div class="body">
                        <h5 class="text-secondary">{{ number_format($data3['total_cryptocurrencies'],0) }}
                            Cryptocurrencies</h5>
                        <p>There are currently {{ number_format($data3['total_cryptocurrencies'],0) }} cryptocurrencies
                            available</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-service wow fadeInUp">
                    <div class="header">
                        <img src="https://cdn-icons-png.flaticon.com/512/893/893078.png" style="width: 50%;" alt="">
                    </div>
                    <div class="body">
                        <h5 class="text-secondary">{{ number_format($data3['active_exchanges']) }} Spot Exchanges</h5>
                        <p>There are currently {{ number_format($data3['active_exchanges'],0) }} spot exchanges
                            available</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-service wow fadeInUp">
                    <div class="header">
                        <img src="https://cdn-icons-png.flaticon.com/512/2600/2600309.png" style="width: 50%" alt="">
                    </div>
                    <div class="body">
                        <h5 class="text-secondary">${{ number_format($data3['quote']['USD']['total_market_cap']) }}</h5>
                        <p>Currently there are a total of
                            ${{ number_format($data3['quote']['USD']['total_market_cap']) }} Market Cap</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-section">
    <div class="container">
        <div class="text-center wow fadeInUp">
            <div class="subhead">Top List Crypto</div>
            <h2 class="title-section">Cryptocurrency Prices by Market Cap</h2>
            <div class="divider mx-auto" id="list"></div>
        </div>
        <div class="wow fadeInUp">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>1h%</th>
                            <th>24h%</th>
                            <th>7d%</th>
                            <th>Market Cap</th>
                            <th>Circulating Supply</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)

                        <tr>
                            <td>{{ $item['cmc_rank'] }}</td>
                            <td><img class="img-fluid" style="width: 50px"
                                    src="https://s2.coinmarketcap.com/static/img/coins/64x64/{{ $item['id'] }}.png"
                                    alt=""> <a href="{{ route('detail.crypto', $item['id']) }}">{{ $item['name'] }}</a>
                            </td>
                            <td>${{ number_format($item['quote']['USD']['price'],2) }}</td>
                            <td>
                                <span
                                    class="badge {{ (number_format($item['quote']['USD']['percent_change_1h'],2) < 0) ? 'badge-danger' : 'badge-success' }} ">
                                    {{ number_format($item['quote']['USD']['percent_change_1h'],2)}}%
                                </span>
                            </td>
                            <td>
                                <span
                                    class="badge {{ (number_format($item['quote']['USD']['percent_change_24h'],2) < 0) ? 'badge-danger' : 'badge-success' }} ">
                                    {{ number_format($item['quote']['USD']['percent_change_24h'],2) }}%
                                </span>
                            </td>
                            <td>
                                <span
                                    class="badge {{ (number_format($item['quote']['USD']['percent_change_7d'],2) < 0) ? 'badge-danger' : 'badge-success' }} ">
                                    {{ number_format($item['quote']['USD']['percent_change_7d'],2) }}%
                                </span>
                            </td>
                            <td>${{ number_format($item['quote']['USD']['market_cap']) }}</td>
                            <td>${{ number_format($item['circulating_supply'],2) }} {{ $item['symbol'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>1h%</th>
                            <th>24h%</th>
                            <th>7d%</th>
                            <th>Market Cap</th>
                            <th>Circulating Supply</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="page-section bg-light pt-5 pb-5">
    <div class="container">
        <div class="text-center wow fadeInUp">
            <div class="subhead">Top Cryptocurrency Spot Exchanges</div>
            <h2 class="title-section">Exchanges by Market Cap</h2>
            <div class="divider mx-auto"></div>
        </div>
        <div class="row">
            @foreach ($data2 as $item)
            <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
                <div class="features">
                    <div class="header mb-3">
                        <img class="img-fluid" style="width: 70px"
                            src="https://s2.coinmarketcap.com/static/img/exchanges/64x64/{{ $item['id'] }}.png" alt="">
                    </div>
                    <h5><a href="{{ route('detail.exchanges', $item['id']) }}">{{ $item['name'] }}</a></h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
