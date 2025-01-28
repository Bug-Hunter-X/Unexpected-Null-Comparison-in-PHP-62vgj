```php
function my_function($arg) {
  if ($arg === null) {
    return null; // Handle only NULL input
  }
  // ... rest of your function
}

$result = my_function(null);
var_dump($result); // Output: NULL

$result = my_function(0);
var_dump($result); // Output: int(0)

$result = my_function(false);
var_dump($result); // Output: bool(false)
```