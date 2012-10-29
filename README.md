Resource Mirror Bundle
======================

This bundle provides the following services:

* `orbt_resource_mirror.factory`: Resource mirror factory, useful as a factory service to create additional mirrors.
* `orbt_resource_mirror.mirror`: Main resource mirror. See Configuration below to configure the mirror.

Installation using Composer
---------------------------

Add the following to the `"require"` list in your `composer.json` file:

```
    "orbt/resource-mirror-bundle": "dev-master"
```

Run composer to update dependencies:

```bash
$ composer update
```

Or to just download this bundle:

```bash
$ composer update orbt/resource-mirror-bundle
```

Register this bundle in the application kernel:

```php
<?php
// app/AppKernel.php
public function registerBundles()
{
    $bundles = array(
        // ...
        new Orbt\Bundle\ResourceMirrorBundle\OrbtResourceMirrorBundle(),
        // ...
    );

    return $bundles;
}
```

Configuration
-------------

The resource mirror is configured under the key `orbt_resource_mirror`. There are two options:

* `base_url`: The base URL of the backend server to mirror.
* `directory`: The local directory to mirror resources to. Tip: use `%kernel.root_dir%/../web` for the web folder.

License
-------

This library is licensed under the MIT License. See the LICENSE file for detailed license information.
