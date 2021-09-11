<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Paper;
use App\Publisher;
use App\Journal;

class PublisherTest extends TestCase
{

  /**
   * @test
   */
  public function the_publisher_can_publish_a_paper(): void
  {
    $paper = new Paper("Title", "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam tempore hic necessitatibus itaque, id neque voluptate velit. Vero asperiores consequatur molestias veritatis aspernatur placeat molestiae, neque dolorem iure similique tempore.", ["Bob Bilson"], ["my reference 1"]);

    $journal = $this->createStub(Journal::class);
    $journal->method('publish')->willReturn('111-11111-111-111111');

    $publisher = new Publisher($paper);

    $this->assertEquals('111-11111-111-111111', $publisher->publish($journal));
  }
}
