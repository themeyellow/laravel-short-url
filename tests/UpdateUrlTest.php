<?php

namespace Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateUrlTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_generates_a_404_if_the_url_does_not_exist()
    {
        $url = ['url' => 'https://laravel.com', 'code' => 'abcde'];

        $getResponse = $this->get(route('shorturl.url.edit', ['id' => 100]));
        $putResponse = $this->put(route('shorturl.url.update', ['id' => 100]), $url);

        $this->assertEquals(404, $getResponse->status());
        $this->assertEquals(404, $putResponse->status());
    }

    /** @test */
    public function an_url_can_be_updated()
    {
        $url = array_merge($this->createUrl(), ['url' => 'https://github.com/gallib/laravel-short-url']);

        $response = $this->putJson(route('shorturl.url.update', ['id' => $url['id']]), $url)->json();

        $this->assertEquals($response['url'], $url['url']);
    }
}
