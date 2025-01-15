```php
function incrementValue(int &$value): void {
  $value++;
}

$number = 10;
incrementValue($number);
echo $number; // Output: 11

//Correct Usage
$anotherNumber = 20;
incrementValue($anotherNumber);
echo $anotherNumber; // Output: 21
```