# Log Analyzer

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ramguiao23/log-analyzer.svg?style=flat-square)](https://packagist.org/packages/ramguiao23/log-analyzer)
[![Total Downloads](https://img.shields.io/packagist/dt/ramguiao23/log-analyzer.svg?style=flat-square)](https://packagist.org/packages/ramguiao23/log-analyzer)
[![License](https://img.shields.io/packagist/l/ramguiao23/log-analyzer.svg?style=flat-square)](LICENSE)
[![PHP Version](https://img.shields.io/packagist/php-v/ramguiao23/log-analyzer.svg?style=flat-square)](https://www.php.net/)

## Description

**Log Analyzer** is a Laravel package that parses application logs and generates AI-powered summaries. It simplifies debugging and monitoring by giving you quick insights from your log files.

## Features

- Parse Laravel log files efficiently.
- Generate AI-driven summaries for quick insights.
- Easy integration with existing Laravel projects.

## Requirements

- PHP 8.2+
- Laravel 12+
- OpenAI API key (for AI-powered summaries)

## Installation

Install via Composer:

## Usage

use Rmhl\LogAnalyzer\LogAnalyzer;

$analyzer = new LogAnalyzer();
$summary = $analyzer->analyze('storage/logs/laravel.log');

echo $summary;

## License

MIT License. See LICENSE file for details.

