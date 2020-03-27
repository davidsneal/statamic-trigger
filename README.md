# Anvil

Allows you to deploy your Forge site and see the latest deployment log

## Install

1. From your site folder, run `composer require edalzell/anvil`

## Configure

1. Publish the configuration, `php artisan vendor:publish --provider=Edalzell\Anvil\ServiceProvider`
2. Add your Forge [token](https://forge.laravel.com/user/profile#/api), server & site id to your `.env` file:

```
FORGE_TOKEN=your-token-here
FORGE_SERVER=server-id
FORGE_SITE=site-id
```

## Usage

From the CP menu under Utilities: 

![menu](https://github.com/edalzell/statamic-anvil/blob/master/img/menu.png?raw=true)

Once on the main screen you can Deploy your site, see your last deployment log or visit your site on Forge:

![main](https://github.com/edalzell/statamic-anvil/blob/master/img/main-screen.png?raw=true)


Logo image credit: Photo by [Maranda Vandergriff](https://unsplash.com/@mkvandergriff?utm_medium=referral&utm_campaign=photographer-credit&utm_content=creditBadge) on Unsplash
