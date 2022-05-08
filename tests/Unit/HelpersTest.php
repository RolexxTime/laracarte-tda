<?php

namespace Tests\Unit;


use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HelpersTest extends TestCase
{
    /** @test */
    public function page_title_should_return_the_base_title_if_title_is_empty()
    {
        $this->assertEquals('Laracarte - Lists of Artisans', page_title(''));
    }

    /** @test */
    public function page_title_should_return_the_correct_if_title_is_provided()
    {
        $this->assertEquals('About | Laracarte - Lists of Artisans', page_title('About'));
        $this->assertEquals('Home | Laracarte - Lists of Artisans', page_title('Home'));
    }
}
