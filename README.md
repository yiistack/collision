<p align="center">
    <a href="https://github.com/yiistack" target="_blank">
        <img src="https://github.com/yiistack.png" height="100px">
    </a>
    <h1 align="center">Yii Stack Collision</h1>
    <br>
</p>

[![Latest Stable Version](https://poser.pugx.org/yiistack/collision/v/stable.png)](https://packagist.org/packages/yiistack/collision)
[![Total Downloads](https://poser.pugx.org/yiistack/collision/downloads.png)](https://packagist.org/packages/yiistack/collision)
[![Build status](https://github.com/yiistack/collision/workflows/build/badge.svg)](https://github.com/yiistack/collision/actions?query=workflow%3Abuild)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/yiistack/collision/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/yiistack/collision/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/yiistack/collision/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/yiistack/collision/?branch=master)
[![Mutation testing badge](https://img.shields.io/endpoint?style=flat&url=https%3A%2F%2Fbadge-api.stryker-mutator.io%2Fgithub.com%2Fyiistack%2Fcollision%2Fmaster)](https://dashboard.stryker-mutator.io/reports/github.com/yiistack/collision/master)
[![static analysis](https://github.com/yiistack/collision/workflows/static%20analysis/badge.svg)](https://github.com/yiistack/collision/actions?query=workflow%3A%22static+analysis%22)
[![type-coverage](https://shepherd.dev/github/yiistack/collision/coverage.svg)](https://shepherd.dev/github/yiistack/collision)

The package provides [Collision](https://github.com/nunomaduro/collision) adapter for Yii 3.0

## Requirements

- PHP 8.0 or higher.

## Installation

The package could be installed with composer:

```
composer require yiistack/collision --prefer-dist
```

## General usage

Add these definitions to your console app:

```php
return [
    SolutionsRepository::class => FriendlySolutionsRepository::class,
    WriterContract::class => Writer::class,
];
```

### Unit testing

The package is tested with [PHPUnit](https://phpunit.de/). To run tests:

```shell
./vendor/bin/phpunit
```

### Mutation testing

The package tests are checked with [Infection](https://infection.github.io/) mutation framework. To run it:

```shell
./vendor/bin/roave-infection-static-analysis-plugin
```

### Static analysis

The code is statically analyzed with [Psalm](https://psalm.dev/). To run static analysis:

```shell
./vendor/bin/psalm
```
