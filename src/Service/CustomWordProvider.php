<?php

namespace App\Service;

use KnpU\LoremIpsumBundle\KnpUWordProvider;
use KnpU\LoremIpsumBundle\WordProviderInterface;

class CustomWordProvider implements WordProviderInterface
{
  public function getWordList(): array
  {
      return ['beach'];
  }

}