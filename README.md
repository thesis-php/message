# Thesis Message

[![PHP Version Requirement](https://img.shields.io/packagist/dependency-v/thesis/message/php)](https://packagist.org/packages/thesis/message)
[![GitHub Release](https://img.shields.io/github/v/release/thesisphp/message)](https://github.com/thesisphp/message/releases)

This package provides four interfaces for messaging: [`Message`](src/Message.php), [`Command`](src/Command.php), [`Event`](src/Event.php) and [`Call`](src/Call.php).

## Installation

```shell
composer require thesis/message
```

## Usage

```php
use Thesis\Message\Call;
use Thesis\Message\Command;
use Thesis\Message\Event;

final readonly class RegisterUser implements Command
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
 * @implements Call<string>
 */
final readonly class GetUserName implements Call
{
    public function __construct(
        public Uuid $userId,
    ) {}
}
```
