# Laravel Short Url [![Build Status](https://travis-ci.org/gallib/laravel-short-url.svg?branch=master)](https://travis-ci.org/gallib/laravel-short-url)

Laravel Short Url is a package allowing you to shorten urls.

## Installation

With composer

```
composer require gallib/laravel-short-url
```

then run

```
php artisan vendor:publish --provider="Gallib\ShortUrl\ShortUrlServiceProvider"
php artisan migrate
```

And that's all. Laravel short url is now set up on your homepage.
