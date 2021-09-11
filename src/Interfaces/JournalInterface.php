<?php

namespace App\Interfaces;

use App\Interfaces\PaperInterface;

interface JournalInterface
{
  public function publish(PaperInterface $paper);
}
