@extends('include.app')
@section('title', 'Categories')
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
                <h1 class="text-center">Categories</h1>
            </div>
        </div>
    </div>
</div>
</header>
<div class="page-section pt-1">
    <div class="container">
        <table id="example" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Avg.Price Change</th>
                    <th>Market Cap</th>
                    <th>Market Cap Change</th>
                    <th>Volume</th>
                    <th>Volume Change</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><a href="/categories/{{ $item['id'] }}">{{ $item['name'] }}</a></td>
                    <td>
                        <span
                            class="badge {{ (number_format($item['avg_price_change'],2) < 0) ? 'badge-danger' : 'badge-success' }} ">
                            {{ number_format($item['avg_price_change'],2)}}%
                        </span>
                    </td>
                    <td>
                        ${{ number_format($item['market_cap'],2) }}
                    </td>
                    <td>
                        <span
                            class="badge {{ (number_format($item['market_cap_change'],2) < 0) ? 'badge-danger' : 'badge-success' }} ">
                            {{ number_format($item['market_cap_change'],2)}}%
                        </span>
                    </td>
                    <td>
                        ${{ number_format($item['volume'],2) }}
                    </td>
                    <td>
                        <span
                            class="badge {{ (number_format($item['volume_change'],2) < 0) ? 'badge-danger' : 'badge-success' }} ">
                            {{ number_format($item['volume_change'],2)}}%
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Avg.Price Change</th>
                    <th>Market Cap</th>
                    <th>Market Cap Change</th>
                    <th>Volume</th>
                    <th>Volume Change</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection
