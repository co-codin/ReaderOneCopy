<?php

namespace App\Services\Transformers;

use App\Services\Transformers\TransformerAbstract;

class RedditTransformer extends TransformerAbstract
{
  public function transform($payload)
  {
    return [
            'title' => $payload->data->title,
            'link' => 'https://reddit.com' . $payload->data->permalink,
            'timestamp' => $payload->data->created_utc,
            'service' => 'Reddit'
        ];
  }
}
