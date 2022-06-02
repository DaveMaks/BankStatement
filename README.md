# BankStatement
Разбор обмена файлов из банкк клиента

## Использование
```php
include_once 'Parsing.php'
...
use BankStatement\Parsing;
...
$list=Parsing::File('/var/www/app/libs/BankStatement/src/tst.txt', '180340012118')
```

