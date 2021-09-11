<?php

namespace App;

use App\Interfaces\JournalInterface;
use App\Interfaces\PaperInterface;
use App\Interfaces\PublisherInterface;

class Publisher implements PublisherInterface
{

  private PaperInterface $paper;

  public function __construct(PaperInterface $paper)
  {
    $this->paper = $paper;
  }

  public function publish(JournalInterface $journal): string
  {
    return $journal->publish($this->paper);
  }
}
