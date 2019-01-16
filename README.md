## Install
- `composer require dndvl/php-helper-runtime`

## Use
```
<?php

use \Dndvl\HelperRuntime\Runtime;

Runtime::start();
Runtime::start('name1');

$result = Runtime::resultAll();
```

### Methods
`Runtime::start($name = 'default'')` - start / return timer\
`Runtime::stop($name = 'default'')` - stop timer and get result\
`Runtime::result($name = 'default')` - get result\
`Runtime::resultAll()` - get all results as array