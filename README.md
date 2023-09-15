# Landofcoder All Products Listing

## Overview
Module provides listing displaying all products, within limits of root category

### Features
* by default listing is located under ../catalog_all/index/index


## Prerequisites
Magento 2.2 or higher
PHP 7.1 or higher


## Installing ##

You can install the module by downloading a .zip file and unpacking it inside
``app/code/Lof/AllProductsListing`` directory inside your Magento
or via Composer (required).

To install the module via Composer simply run
```
composer require landofcoder/module-all-products-listing
```

Than enable the module by running these command in the root of your Magento installation
```
bin/magento module:enable Lof_AllProductsListing
bin/magento setup:upgrade
```


## Usage ##

#### Changing listing url ####
In order to change url of listing to more user-friendly use native Magento feature - url rewrite.
As target path should be used controller url - ```catalog_all/index/index```.


## Versioning ##


## Authors

* **Landofcoder** - [Landofcoder](https://github.com/landofcoder)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details
