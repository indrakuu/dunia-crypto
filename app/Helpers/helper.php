<?php

function getAPI(){
  return 'https://pro-api.coinmarketcap.com';
}

// CoinMarketCap API Key
function getAPIkey(){
  //contoh
  // return 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx';
  return 'Api key disini';
}

function httpHeader(){
  return Http::withHeaders([
    'accept' => 'application/json',
    'X-CMC_PRO_API_KEY'=> getAPIkey()
  ]);
}

function getFiat(){
    $response = httpHeader()
      ->get(getAPI(). '/v1/fiat/map')
        ->json();
    return $response['data'];
}
function getPopularCrypto(){
    $response = httpHeader()
      ->get(getAPI(). '/v1/cryptocurrency/map?sort=cmc_rank&limit=3')
        ->json();
    return $response['data'];
}
function getGlobalMetrics(){
    $response = httpHeader()
      ->get(getAPI() . '/v1/global-metrics/quotes/latest')
        ->json();
    return $response['data'];
}  

?>