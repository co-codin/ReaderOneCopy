<?php

namespace App\Cache;

use Predis\Client as Predis;

class RedisAdapter
{
  protected $client;

  public function __construct(Predis $client)
  {
    $this->client = $client;
  }
}