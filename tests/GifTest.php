<?php

use Laravel\Lumen\Testing\DatabaseMigrations;

class GifTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A test for the search functionallity of the gif controller.
     *
     * @return void
     */
    public function testSearch()
    {
        factory('App\Gif')->create(['name' => 'test_name']);

        $this->get('v1/gifs?search=test');

        $this->assertEquals('test_name', json_decode($this->response->getContent(), true)[0]['name']);

        $this->assertResponseStatus(200);
    }
}
