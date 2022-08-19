<div class="col-lg-4">
    <div class="widget">
        <div class="widget-box">
            <h4 class="widget-title">Global Metrics</h4>
            <div class="divider"></div>
            <ul class="categories">
                <li><a href="#!">Cryptos : {{ getGlobalMetrics()['total_cryptocurrencies'] }}</a></li>
                <li><a href="#!">Exchanges : {{ getGlobalMetrics()['active_exchanges'] }}</a></li>
                <li><a href="#!">Market Cap : ${{ number_format(getGlobalMetrics()['quote']['USD']['total_market_cap']) }}</a></li>
                <li><a href="#!">24h Vol : ${{ number_format(getGlobalMetrics()['quote']['USD']['total_volume_24h']) }}</a></li>
                <li><a href="#!">Dominance : BTC:{{ number_format(getGlobalMetrics()['btc_dominance'],2) }}% | ETH:{{ number_format(getGlobalMetrics()['eth_dominance'],2) }}%</a></li>
            </ul>
        </div>
        <div class="widget-box">
            <h4 class="widget-title">Popular Cryptocurrencies</h4>
            <div class="divider"></div>
            @foreach(getPopularCrypto() as $item)
            <div class="blog-item">
                <a class="post-thumb" href="{{ route('detail.crypto', $item['id']) }}">
                    <img class="img-fluid" style="width:50%; height:50%; margin-left:25%; margin-top:20%" src="https://s2.coinmarketcap.com/static/img/coins/64x64/{{ $item['id'] }}.png" alt="">
                </a>
                <div class="content">
                    <h6 class="post-title"><a href="{{ route('detail.crypto', $item['id']) }}">{{ $item['name'] }}</a>
                    </h6>
                    <div class="meta">
                        <a href="#"><span class="mai-calendar"></span>{{ date('D d M Y', strtotime($item['first_historical_data'])) }}</a>
                        <span class="badge badge-success">Rank #{{ $item['rank'] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="widget-box">
            <h4 class="widget-title">Fiat Cloud</h4>
            <div class="divider"></div>
            <div class="tag-clouds">
                @foreach(getFiat() as $item)
                <a href="#!" class="tag-cloud-link" title="{{ $item['name'] }}">
                    {{ $item['sign'] }} ({{ $item['symbol'] }})
                </a>
                @endforeach
            </div>
           
        </div>
    </div>
</div>