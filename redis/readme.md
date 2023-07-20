# Redis - PHP cache management service

> [🇬🇧 Trending Articles with Sorted Sets](https://laracasts.com/series/learn-laravel-and-redis-through-examples/episodes/3)
> [🇬🇧 How to Structure Your Caching Layer](https://laracasts.com/series/learn-laravel-and-redis-through-examples/episodes/6)

The two videos here above show techniques on using Redis for, f.i., storing the most popular blog posts in redis. No database connection required and this is very fast.

Just store f.i. the url or the blog article id in Redis and use the `Incr` (increment) method to increment the number of view by one. Really easy to do and to retrieve.
