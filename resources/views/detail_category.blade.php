@extends('include.app')
@section('title', $data['name'])
@section('content')
    <div class="container">
      <div class="page-banner">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <nav aria-label="Breadcrumb">
              <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                <li class="breadcrumb-item"><a href="\">Home</a></li>
                <li class="breadcrumb-item active">Categories</li>
              </ul>
            </nav>
            <h1 class="text-center">{{ $data['name'] }}</h1>
            <p class="text-center">Result : {{ $data['num_tokens'] }}</p>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="page-section">
    <div class="container">
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
            @foreach ($data['coins'] as $item)
            
        <tr>
            <td>{{ $item['cmc_rank'] }}</td>
            <td><img class="img-fluid" style="width: 50px" src="https://s2.coinmarketcap.com/static/img/coins/64x64/{{ $item['id'] }}.png" alt=""> <a href="{{ route('detail.crypto', $item['id']) }}">{{ $item['name'] }}</a> </td>
            <td>${{ number_format($item['quote']['USD']['price'],2) }}</td>
            <td>
                <span class="badge {{ (number_format($item['quote']['USD']['percent_change_1h'],2) < 0) ? 'badge-danger' : 'badge-success' }} ">
                    {{ number_format($item['quote']['USD']['percent_change_1h'],2)}}%
                </span>
            </td>

            <td>
                <span class="badge {{ (number_format($item['quote']['USD']['percent_change_24h'],2) < 0) ? 'badge-danger' : 'badge-success' }} ">
                    {{ number_format($item['quote']['USD']['percent_change_24h'],2) }}%
                </span>
            </td>


            <td>
                <span class="badge {{ (number_format($item['quote']['USD']['percent_change_7d'],2) < 0) ? 'badge-danger' : 'badge-success' }} ">
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
@endsection