# CacheConfig

## Installation
```bash
  composer require geeksdevelop/cacheconfig
```
### Service Provider

Add the package to your application service providers in `config/app.php` file.

```php
'providers' => [
    /*
     * Package Service Providers...
     */
    Geeksdevelop\Cacheconfig\CacheConfigServiceProvider::class,
],
```

### Publish
Publish the migration to your application. Run these commands inside your terminal.
```bash
  php artisan vendor:publish --provider="Geeksdevelop\Cacheconfig\CacheConfigServiceProvider"
```

### Set up package
You can configure the package to use a custom TABLE where the configuration data, the KEY of the cache and the FILTERS will be stored for the query of the data.
```php
    /*
    |--------------------------------------------------------------------------
    | Name of the configuration table
    |--------------------------------------------------------------------------
    */
    'table' => 'settings',

    /*
    |--------------------------------------------------------------------------
    | Cache key name
    |--------------------------------------------------------------------------
    */
    'key' => 'env',

    /*
    |--------------------------------------------------------------------------
    | Filters search
    |--------------------------------------------------------------------------
    */
    'filters' => [
      // ['id', '=', 1]
    ],
```