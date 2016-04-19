Yii2 widget flash message
==============

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist plance/yii2-widget-flash "*"
```

or add

```
"plance/yii2-widget-flash": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Set flash message:
```php
/**
 * $url - redirect url
 * $value - message
 * $key - bool (wrong or success message)
 */

return Flash::set($url, $value, $key);
```

Set this in layout, for show message:
```php
<?php echo Flash::widget(); ?>
```