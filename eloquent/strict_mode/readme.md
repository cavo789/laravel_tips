# Enabling Strict Mode for Eloquent models

> [:en: Laravel's Strict Mode](https://laracasts.com/series/jeffreys-larabits/episodes/29)

Laravel will allow to write `$user->emal` (instead of `$user->email` i.e. with a typo). He'll think that `email` is a valid attribute even if, when displaying it's value, we'll get null or an empty string.

We can force Laravel to be strict and refuse access to inexisting attributes using the **Strict mode**  
