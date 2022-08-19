@extends('include.app')
@section('title', 'Cryptocurrencies')
@section('content')
    <div class="container">
      <div class="page-banner">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-md-6">
            <nav aria-label="Breadcrumb">
              <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                <li class="breadcrumb-item"><a href="\">Home</a></li>
                <li class="breadcrumb-item active">Cryptocurrencies</li>
              </ul>
            </nav>
            <h1 class="text-center">Cryptocurrency</h1>
          </div>
        </div>
      </div>
    </div>
  <div class="page-section pt-1">
    <div class="container">
      <div class="row my-5">
        @foreach ($data as $item)
        <div class="col-lg-4 py-3 wow fadeInUp">
          <div class="card-blog">
            <div class="header">
              <div class="post-thumb ">
                <img class="img-fluid" style="width:30%; height:35%; margin-left:35%; margin-top:20%" src="https://s2.coinmarketcap.com/static/img/coins/64x64/{{ $item['id'] }}.png" alt="">
              </div>
            </div>
            <div class="body">
              <h5 class="post-title text-center"><a href="{{ route('detail.crypto', $item['id']) }}">{{ $item['name'] }}</a></h5>
              <div class="post-date text-center">Released on {{ date('D d M Y', strtotime($item['first_historical_data'])) }}</div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <nav aria-label="Page Navigation">
        <ul class="pagination justify-content-center">
          <li class="page-item">{{ $data->links() }}</li>
        </ul>
      </nav>
    </div>
  </div>
@endsection