<?php

namespace App\Interfaces;

interface PaperInterface
{
  public function __construct(string $title, string $body, array $authors, array $references);

  public function __toString(): string;

  public function publish(): bool;

  public function getTitle(): string;

  public function setTitle(string $title): self;

  public function getBody(): string;

  public function setBody(string $body): self;
}
