# Log in using GitHub, Facebook, ... i.e. with oAuth

> [:en: From Zero to "Log In With GitHub" in Ten Minutes](https://laracasts.com/series/jeffreys-larabits/episodes/25)

Using [Laravel Breeze](https://laravel.com/docs/10.x/starter-kits#laravel-breeze) and [Laravel Socialite](https://laravel.com/docs/10.x/socialite) it can be quite easy to offer a `Register with` / `Log in with` feature.

The episode on Laracast is showing in less than 10 minutes how to create an authentication process using GitHub and retrieve back the GitHub id, name, email and token of the visitor. Then create the user in our database so, next time, the user can just click on `Log in with GitHub` button.

What's is nice then, it's the `createOrUpdate` method based on the GitHub id i.e. if the user update his GitHub profile, changes will be made in our application too.

Other links:

* [:fr: - Laravel Socialite : Authentification OAuth avec Google, Facebook et Github (Social login)](https://www.akilischool.com/cours/laravel-socialite-connexion-inscription-avec-google-facebook-github-linkedin-social-login)
