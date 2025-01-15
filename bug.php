```php
function incrementValue(int &$value): void {
  $value++;
}

$number = 10;
incrementValue($number);
echo $number; // Output: 11

//Incorrect usage
incrementValue(10); //This will result in a fatal error: Cannot pass parameter 1 by reference
```