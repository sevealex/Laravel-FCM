# Laravel FCM

## Introduction

Laravel FCM is an easy to use package working with both Laravel and Lumen for sending push notification with [Firebase Cloud Messaging](https://firebase.google.com/docs/cloud-messaging/) (FCM).

It currently **only supports HTTP protocol** for :

- sending a downstream message to one or multiple devices
- create migrate to save user tokens
- add fucntion helpers to get or create user tokens

## Installation

To get the latest version of Laravel-FCM on your project, require it from "composer":

    $ composer require prgayman/laravel-fcm

### Laravel

Register the provider directly in your app configuration file config/app.php `config/app.php`:

Laravel >= 5.5 provides package auto-discovery, thanks to rasmuscnielsen and luiztessadri who help to implement this feature in Laravel FCM, the registration of the provider and the facades should not be necessary anymore.

```php
'providers' => [
	Prgayman\Fcm\FcmServiceProvider::class,
]
```

Add the facade aliases in the same file:

```php
'aliases' => [

  'PFCM' => Prgayman\Fcm\Facades\Fcm::class,

]
```

Publish the package config file using the following command:

    $ php artisan vendor:publish --provider="Prgayman\Fcm\FcmServiceProvider"

### Lumen

Register the provider in your bootstrap app file `boostrap/app.php`

Add the following line in the "Register Service Providers" section at the bottom of the file.

```php
$app->register(Prgayman\Fcm\FcmServiceProvider::class);
```

For facades, add the following lines in the section "Create The Application" . FCMGroup facade is only necessary if you want to use groups message in your application.

```php
class_alias(\Prgayman\Fcm\Facades\Fcm::class, 'PFCM');
```

Copy the config file `fcm.php` manually from the directory `/vendor/prgayman/laravel-fcm/Config` to the directory `/config` (you may need to create this directory).

### Package Configuration

In your `.env` file, add the server key and the secret key for the Firebase Cloud Messaging:

```php
FIREBASE_SERVER_KEY=my_server_key
```

To get these keys, you must create a new application on the [firebase cloud messaging console](https://console.firebase.google.com/).

After the creation of your application on Firebase, you can find keys in `project settings -> cloud messaging`.
