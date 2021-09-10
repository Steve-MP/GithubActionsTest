<?php

namespace App;

use \App\Interfaces\PaperInterface;

class Paper implements PaperInterface
{

  private $title;
  private $body;
  private $authors;
  private $references;

  public function __construct(string $title, string $body, array $authors, array $references)
  {
    $this->title = $title;
    $this->body = $body;
    $this->authors = $authors;
    $this->references = $references;
  }

  public function __toString(): string
  {
    return $this->title . "\n" . $this->body;
  }

  public function publish(): bool
  {
    return true;
  }

  /**
   * Get the value of title
   */
  public function getTitle(): string
  {
    return $this->title;
  }

  /**
   * Set the value of title
   *
   * @return  self
   */
  public function setTitle(string $title): self
  {
    $this->title = $title;

    return $this;
  }

  /**
   * Get the value of body
   */
  public function getBody(): string
  {
    return $this->body;
  }

  /**
   * Set the value of body
   *
   * @return  self
   */
  public function setBody(string $body): self
  {
    $this->body = $body;

    return $this;
  }
}
