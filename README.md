# :package_name

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

A Laravel library to convert videos to dash format. Coding is based on PSR-4 Standards

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practises by being named the following.

```
bin/        
config/
src/
tests/
vendor/
```


## Install

Via Composer

``` bash
$ composer require pnrhost/vidtodash
```

## Usage

``` php
$dash = new Vidtodash\Vidtodash($file);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email <privyreza[at]gmail.com> instead of using the issue tracker.

## Credits

- [pnrhost][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/pnrhost/vidtodash.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/pnrhost/vidtodash/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/pnrhost/vidtodash.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/pnrhost/vidtodash.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/pnrhost/vidtodash.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/pnrhost/vidtodash
[link-travis]: https://travis-ci.org/pnrhost/vidtodash
[link-scrutinizer]: https://scrutinizer-ci.com/g/pnrhost/vidtodash/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/pnrhost/vidtodash
[link-downloads]: https://packagist.org/packages/pnrhost/vidtodash
[link-author]: https://github.com/pnrhost
[link-contributors]: ../../contributors
