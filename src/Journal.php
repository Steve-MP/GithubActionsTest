<?php

namespace App;

use App\Interfaces\PaperInterface;
use App\Interfaces\JournalInterface;

class Journal implements JournalInterface
{
  public function publish(PaperInterface $paper): string
  {
    return '19374-324-5634-67345234';
  }
}
