<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Interfaces\PaperInterface;
use App\Paper;

class PaperTest extends TestCase
{

  private $paper;

  public function setup(): void
  {
    $this->paper = new Paper(
      "The Title",
      "Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem error nemo architecto officia esse quo suscipit, saepe repudiandae itaque perspiciatis atque sunt molestias corrupti nihil facilis. Inventore ut reiciendis dolores.",
      ["Bob Roberts", "Chin Mohan"],
      ["Penn, D., Wang, O., & Topps, VD. (2019) Fun with Beers. Journal of Things 14(8), pp.12-19."]
    );
  }

  /** @test */
  public function a_paper_can_be_created_with_all_the_right_inputs(): void
  {
    $this->assertInstanceOf(Paper::class,  $this->paper);
  }

  /** @test */
  public function a_paper_can_be_published(): void
  {
    $this->assertTrue($this->paper->publish());
  }

  /** @test */
  public function a_paper_can_be_converted_to_a_string(): void
  {
    $this->assertEquals($this->paper->getTitle() . "\n" . $this->paper->getBody(), (string) $this->paper);
  }
}
