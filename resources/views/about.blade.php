@extends('include.app')
@section('title', 'About')
@section('content')
<div class="container">
    <div class="page-banner">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-md-6">
          <nav aria-label="Breadcrumb">
            <ul class="breadcrumb justify-content-center py-0 bg-transparent">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">About</li>
            </ul>
          </nav>
          <h1 class="text-center">About Us</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="page-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3">
          <h2 class="title-section">About DuniaCrypto</h2>
          <div class="divider"></div>
          <p>Welcome to <a href="{{ route('home') }}">DuniaCrypto</a>, a place where everyone can see the price development of crypto assets or exchanges easily and conveniently. Make cryptocurrencies discoverable globally as efficiently as possible displaying impartial, high-quality and accurate information, and being able to draw conclusions based on their own understanding.</p>
          <p>The data displayed comes from the <a href="https://coinmarketcap.com/api/" rel="nofollow">CoinMarketCap API</a> which can be viewed directly based on the available documentation. Then the data may not be the same as the one on the CoinMarketCap site because the data provided is slightly delayed and limited and the API used uses the Basic version. So that one of the main features in monitoring crypto coin data graphically in real time is not available. Therefore, if you want to develop it again, please <a href="https://github.com/indrakuu/dunia-crypto">download</a> this project and upgrade the API version on <a href="https://coinmarketcap.com/" rel="nofollow">CoinMarketCap</a>.</p>
        </div>
        <div class="col-lg-6 py-3">
          <div class="img-fluid py-3 text-center">
            <img src="https://cdn-icons-png.flaticon.com/512/7439/7439942.png" style="width: 300px" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="page-section">
    <div class="container">
      <div class="row align-items-center">
          <div class="col-lg-6 py-3">
              <div class="img-fluid py-3 text-center">
                  <img src="https://cdn-icons-png.flaticon.com/512/7439/7439978.png" style="width: 300px" alt="">
                </div>
            </div>
            <div class="col-lg-6 py-3">
              <h2 class="title-section">Tentang DuniaCrypto</h2>
              <div class="divider"></div>
              <p>Selamat datang di <a href="{{ route('home') }}">DuniaCrypto</a> tempat dimana semua orang bisa melihat perkembangan harga aset kripto ataupun exchanger dengan mudah dan nyaman. Membuat kripto dapat ditemukan sefisien mungkin secara global yang menampilkan informasi yang tidak memihak, berkualitas tinggi dan akurat, serta dapat menarik kesimpulan berdasarkan pemahaman mereka sendiri.</p>
              <p>Data yang ditampilkan berasal dari <a href="https://coinmarketcap.com/api/" rel="nofollow">API CoinMarketCap</a> yang dapat dilihat langsung berdasarkan dokumentasi yang tersedia. Kemudian data mungkin saja tidak sama seperti yang ada pada situs CoinMarketCap karena data yang diberikan sedikit delay dan terbatas serta API yang digunakan menggunakan versi Basic. Sehingga salah satu fitur utama dalam memantau data koin kripto secara grafik secara realtime tidak tersedia. Oleh karena itu, jika ingin mengembangkannya kembali silahkan <a href="#">download</a> project ini dan upgrade versi API di <a href="https://coinmarketcap.com/" rel="nofollow">CoinMarketCap</a>.</p>
            </div>
      </div>
    </div>
  </div>
@endsection