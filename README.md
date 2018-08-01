<p>Validate and get credit card type by Number</p>

### Installation
Via Composer

```sh
composer require 'betalabs/credit-card-type'
```

### Usage

```php
require __DIR__  . '/vendor/autoload.php';

$card = '4111111111111111';

echo CreditCardType\CreditCardType::get($card); //visa
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).