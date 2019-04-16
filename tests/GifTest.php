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
        $name = 'test_name';

        factory('App\Gif')->create(['name' => $name]);

        $this->get('v1/gifs?search=test');

        $this->assertEquals(ucfirst($name), json_decode($this->response->getContent(), true)["data"][0]["data"]["gif"]["name"]);

        $this->assertResponseStatus(200);
    }
}
