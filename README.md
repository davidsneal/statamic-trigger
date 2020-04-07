# Trigger

Allows you to make a simple `POST` request to a configured URL. Particularly helpful for deployment triggers.

## Installation 

`composer require davidsneal/trigger`

Copy `dist/js/cp.js` to your public folder `public/vendor/davidsneal/trigger/js/cp.js`

Sorry, I've yet to figure out a better way to do this ^^

## Configuration

Set the URL that the `POST` request should be made to in your `.env` via `TRIGGER_FIRE_URL`

(optional) Publish Trigger's default configuration and language files by running `php artisan vendor:publish --provider="Davidsneal\Trigger\ServiceProvider"`

You could require Trigger for something different to triggering a deployment, all text displayed by Trigger is customisable.

## Usage

You can access the Trigger from the CP menu under Tools. Use the published language file to change the item name, and config file to change the icon, should you wish.

![menu](https://github.com/davidsneal/statamic-trigger/blob/master/img/menu.png?raw=true)

This is the default component view, again you can change every item of text, including the confirmation modal.

![main](https://github.com/davidsneal/statamic-trigger/blob/master/img/main-screen.png?raw=true)

![confirmation](https://github.com/davidsneal/statamic-trigger/blob/master/img/confirmation.png?raw=true)

## Permissions

Trigger adds a permission you can assign to groups as required.

![permission](https://github.com/davidsneal/statamic-trigger/blob/master/img/permission.png?raw=true)
