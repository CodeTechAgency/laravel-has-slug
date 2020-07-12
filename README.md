# Laravel Sluggable

Laravel package for managing models' slugs.

[![Latest version](https://img.shields.io/github/release/CodeTechPt/laravel-sluggable?style=flat-square)](https://github.com/CodeTechPt/laravel-sluggable/releases)
[![GitHub license](https://img.shields.io/github/license/CodeTechPt/laravel-sluggable?style=flat-square)](https://github.com/CodeTechPt/laravel-sluggable/blob/master/LICENSE)


## Installation

Add the package to your Laravel app using composer

```
composer require codetech/laravel-sluggable
```


### Service Provider

Register the package's service provider in config/app.php. In Laravel versions 5.5 and beyond, this step can be skipped if package auto-discovery is enabled.

```
'providers' => [

    ...
    Codetech\Sluggable\Providers\SluggableServiceProvider::class,
    ...

];
```


## Usage

Use the trait in your models.

```

use CodeTech\Sluggable\Traits\HasSlug;

class Theme extends Model
{
    use HasSlug;

    ...
```


---


## License

**codetech/laravel-sluggable** is open-sourced software licensed under the [MIT license](https://github.com/CodeTechPt/laravel-sluggable/blob/master/LICENSE).


## About CodeTech

[CodeTech](https://www.codetech.pt) is a web development agency based on Matosinhos, Portugal. Oh, and we LOVE Laravel!
