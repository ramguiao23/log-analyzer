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

## Configuration

Add the following to your `.env` file:

```env
OPENAI_API_KEY=your_openai_api_key_here
OPENAI_MODEL=gpt-5-nano,gpt-4,gpt-5  # Optional


## Usage

use Rmhl\LogAnalyzer\LogAnalyzer;

$analyzer = new LogAnalyzerPackage();
echo $analyzer->analyze("Slow query detected");

## License

MIT License. See LICENSE file for details.

