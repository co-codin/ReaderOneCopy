<?php

namespace App\Services;

use App\Services\ServiceAbstract;

class ProductHunt extends ServiceAbstract
{
  public function get($limit = 10)
  {
    $response = $this->client->request('GET', 'https://api.producthunt.com/v1/posts?access_token=' .
    getenv('PRODUCT_HUNT_SECRET'));

     return json_decode($response->getBody())->posts;
  }
}