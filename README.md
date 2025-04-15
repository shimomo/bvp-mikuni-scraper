# BVP Mikuni Scraper

[![Build Status](https://github.com/shimomo/bvp-mikuni-scraper/workflows/Tests/badge.svg)](https://github.com/shimomo/bvp-mikuni-scraper/actions?query=workflow%3Atests)
[![codecov](https://codecov.io/gh/shimomo/bvp-mikuni-scraper/graph/badge.svg?token=ND29H7ZHTA)](https://codecov.io/gh/shimomo/bvp-mikuni-scraper)
[![PHP Version Require](https://poser.pugx.org/bvp/mikuni-scraper/require/php)](https://packagist.org/packages/bvp/mikuni-scraper)
[![Latest Stable Version](https://poser.pugx.org/bvp/mikuni-scraper/v/stable)](https://packagist.org/packages/bvp/mikuni-scraper)
[![Latest Unstable Version](https://poser.pugx.org/bvp/mikuni-scraper/v/unstable)](https://packagist.org/packages/bvp/mikuni-scraper)
[![License](https://poser.pugx.org/bvp/mikuni-scraper/license)](https://packagist.org/packages/bvp/mikuni-scraper)

## Installation
```bash
composer require bvp/mikuni-scraper
```

## Usage
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use BVP\MikuniScraper\Scraper;

print_r(Scraper::scrapeComments(12));
print_r(Scraper::scrapeComments(12, '2025-04-05'));

print_r(Scraper::scrapeForecasts(12));
print_r(Scraper::scrapeForecasts(12, '2025-04-05'));

print_r(Scraper::scrapeTimes(12));
print_r(Scraper::scrapeTimes(12, '2025-04-05'));
```

## License
The BVP Mikuni Scraper package is open source software licensed under the [MIT license](LICENSE).
