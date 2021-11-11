# ACF Fields

Creating custom fields programmatically with the help of [Wordplate/Extended ACF](https://github.com/wordplate/extended-acf) makes it easy to maintain and extend a clean setup for your Wordpress custom fields.

The aim of this repository is to create a pool of custom field types to spare you coding time. Feel free to extend this library.

## Installation

1. Run `composer require schrittweiter/acf` in your theme folder
2. Make sure you are autoloading your composer vendors e.g.
```php
require_once __DIR__.'/vendor/autoload.php';
```

## Usage
Now you can make use of the fields like this (Please refer to the docs of wordplate in order to understand how to setup)
```php
<?php
  use WordPlate\Acf\Location;
  use WordPlate\Acf\Image;
  use WordPlate\Acf\Text;
  use Schrittweiter\Acf\Fields\Button; // Our new Field type

  add_action('acf/init', function() {
    register_extended_field_group([
      'title' => 'About',
      'fields' => [
        Image::make('Image'),
        Text::make('Title'),
        Button::make('My Button', 'button') // gets registered here
      ],
      'location' => [
        Location::if('post_type', 'page')
      ],
    ]);
  });
```

and thats it! Happy creating

## Todo

- [ ] Add to wpackagist instead of packagist, since this is a WP only extension
