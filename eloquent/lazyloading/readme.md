# Disable Lazy Loading 

> [:en: Disable Lazy Loading](https://laracasts.com/series/jeffreys-larabits/episodes/3)

Lazy loading is associated to the **N+1** well-known Laravel features i.e. if we don't pay attention, by running `$post->all()` (getting all blog posts) then by showing their authors `$post->author->email` we can have a loop: for each single blog post, Laravel will run a new query to get the author.

If there are 100 blog posts, we'll run 101 queries. And this silently since we will not see it (unless we're using debug tools like [Laravel Telescope](https://laravel.com/docs/master/telescope)).

So, the idea is to prohibit lazy loading and throw a fatal error during development so we can immediately see the problem and solve it.
