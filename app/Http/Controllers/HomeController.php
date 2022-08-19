<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class HomeController extends Controller
{
  // Untuk Halaman Beranda
    public function index(){
        $response = httpHeader()
          ->get(getAPI() . '/v1/cryptocurrency/listings/latest')
            ->json();
        $exchange = httpHeader()
          ->get(getAPI() . '/v1/exchange/map?sort=volume_24h&limit=8')
            ->json();
        $globalMetric = httpHeader()
          ->get(getAPI() . '/v1/global-metrics/quotes/latest')
            ->json();
        return view(
          'welcome',
          [
            'data' => $response['data'],
            'data2' => $exchange['data'],
            'data3' => $globalMetric['data'],
          ]);
    }

    //Untuk Halaman Detail Crypto
    public function detail($id){
        $response = httpHeader()
          ->get(getAPI() . '/v1/cryptocurrency/info?id='. $id)
          ->json();
          
          $response2 = httpHeader()
          ->get(getAPI() . '/v2/cryptocurrency/quotes/latest?id='. $id)
          ->json();
        return view(
          'detail', 
          [
            'data' => $response['data'][$id],
            'data2' =>$response2['data'][$id],
          ]);
    }

  // Untuk Halaman Crypto
    public function crypto(){
        $response = httpHeader()
          ->get(getAPI() . '/v1/cryptocurrency/map?start=1&sort=cmc_rank')
          ->json(); 
        $myCollection = collect($response['data']);
        $data = $this->paginate($myCollection);
        return view('crypto', ['data' => $data]);
    }

    //Untuk Halaman exchange
    public function exchange(){
      $response = httpHeader()
      ->get(getAPI() . '/v1/exchange/map?sort=volume_24h')
      ->json();
    
      $myCollection = collect($response['data']);
      $data = $this->paginate($myCollection);
      return view('exchange', ['data' => $data]);
    }
    
    //Untuk Halaman Detail Exchange
    public function exchangeDetail($id){
      $response = httpHeader()
      ->get(getAPI() . '/v1/exchange/info?id='. $id)
      ->json();
    return view(
      'detail_exchange', 
      [
        'data' => $response['data'][$id],
      ]);
    }

    //Untuk Halaman Categories
    public function categories(){
      $response = httpHeader()
      ->get(getAPI() . '/v1/cryptocurrency/categories')
      ->json();
    return view(
      'category', 
      [
        'data' => $response['data'],
      ]);
    }
    
    //Untuk halaman detail Category
    public function category($id){
      $response = httpHeader()
      ->get(getAPI() . '/v1/cryptocurrency/category?id='.$id)
      ->json();
    return view(
      'detail_category', 
      [
        'data' => $response['data'],
      ]);
    }

    //Untuk membuat pagination
    public function paginate($items, $perPage = 51, $page = null, $options=[])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator(
          $items->forPage($page, $perPage), 
          $items->count(), $perPage, $page, 
          [
          'path' => request()->url(),
          'query' => request()->query(),
          ],
          $options
        );
    }
}