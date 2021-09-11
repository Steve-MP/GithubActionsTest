<?php

namespace App\Interfaces;

use App\Interfaces\PaperInterface;
use App\Interfaces\JournalInterface;

interface PublisherInterface
{
  public function __construct(PaperInterface $paper);
  public function publish(JournalInterface $journal): string;
}
