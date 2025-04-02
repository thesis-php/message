# Thesis Message

[![PHP Version Requirement](https://img.shields.io/packagist/dependency-v/thesis/message/php)](https://packagist.org/packages/thesis/message)
[![GitHub Release](https://img.shields.io/github/v/release/thesis/message)](https://github.com/thesis-php/message/releases)

This package provides two marker interfaces for messaging: [`Message`](src/Message.php) and [`Event`](src/Event.php).

## Installation

```shell
composer require thesis/message
```

## Usage

```php
use Thesis\Message\Message;
use Thesis\Message\Event;

final readonly class RegisterUser implements Message
{
    public function __construct(
        public Uuid $userId,
        public string $name,
    ) {}
}

final readonly class UserRegistered implements Event
{
    public function __construct(
        public Uuid $userId,
    ) {}
}

/**
 * @implements Message<string>
 */
final readonly class GetUserName implements Message
{
    public function __construct(
        public Uuid $userId,
    ) {}
}
```
