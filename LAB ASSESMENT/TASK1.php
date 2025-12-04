<?php
//TASK1
echo "<h3>Task 1: The area of a Rectangle , perimeter. </h3>";
$length = 15;
$width = 7;
$area = $length * $width;
$perimeter = 2 * ($length + $width);
echo "Rectangle Calculation Results:<br>";
echo "Length: " . $length . " units<br>";
echo "Width: " . $width . " units<br>";
echo "Area: " . $area . " square units<br>";
echo "Perimeter: " . $perimeter . " units<br>";

//TASK2
// Define the amount and VAT rate
echo "<h3>Task 2: Calculate the VAT (Value Added Tax) over an amount Hints. </h3>";
$amount = 1000; // Base amount
$vatRate = 0.15; // 15% VAT

// Calculate VAT
$vatAmount = $amount * $vatRate;
$totalAmount = $amount + $vatAmount;

// Display the results
echo "VAT Calculation:<br>";
echo "Base Amount: $" . number_format($amount, 2) . "<br>";
echo "VAT Rate: " . ($vatRate * 100) . "%<br>";
echo "VAT Amount: $" . number_format($vatAmount, 2) . "<br>";
echo "Total Amount (including VAT): $" . number_format($totalAmount, 2) . "<br>";

// TASK 3: Odd or Even Check
echo "<h3>Task 3: Odd or Even Check</h3>";
$number = 25;
echo "The given number is:$number<br><br>";

if ($number % 2 == 0) 
    {
    echo "The number $number is even.<br><br>";
    } 
    else 
    {
    echo "The number $number is odd.<br><br>";
    }

// TASK 4: Largest of Three Numbers
echo "<h3>Task 4: Largest of Three Numbers</h3>";
$num1 = 45;
$num2 = 78;
$num3 = 32;
echo "The three number is: $num1,$num2,$num3 <br><br>";
if ($num1 >= $num2 && $num1 >= $num3) 
{
    echo "The largest number is: $num1<br>";
    } 
    elseif ($num2 >= $num1 && $num2 >= $num3) 
        {
    echo "The largest number is: $num2<br>";
        } else 
    {
    echo "The largest number is: $num3<br>";
}


// TASK 5: Odd Numbers (10 to 100)
echo "<h3>Task 5: Odd Numbers between 10 and 100</h3>";
echo "Odd numbers from 10 to 100: ";

for ($i = 10; $i <= 100; $i++)
    {
    if ($i % 2 != 0) 
        {
        echo $i . " ";
        }
    }
echo "<br>";

// TASK 6: Search in Array

echo "<h3>Task 6: Search Element in Array</h3>";

// Define an array
$numbers = array(10, 20, 30, 40, 50, 60, 70);
$searchElement = 40;
$found = false;

echo "Array: ";
foreach ($numbers as $value) 
{
    echo $value . " ";
}
echo "<br>";

echo "Searching for element: $searchElement<br>";

// Search for the element
foreach ($numbers as $value) 
{
    if ($value == $searchElement) 
    {
        $found = true;
        break;
    }
}

if ($found) 
{
    echo "Element $searchElement found in the array.<br>";
    } else 
{
    echo "Element $searchElement not found in the array.<br>";
}

echo "<h3>Task 7: The following shapes Hints: USE NESTED LOOP</h3>";

for ($i = 1; $i <= 3; $i++) 
    {
    for ($j = 1; $j <= $i; $j++) 
        {
        echo "* ";
        }
    echo "<br>";
    }
echo "<br>";

for ($i = 3; $i >= 1; $i--) 
    {
    for ($j = 1; $j <= $i; $j++)
        {
        echo $j . " ";
        }
    echo "<br>";
    }
echo "<br>";
$ch = 'A';

for ($i = 1; $i <= 3; $i++) 
    {
    for ($j = 1; $j <= $i; $j++) 
        {
        echo $ch . " ";
        $ch++;
        }
    echo "<br>";
    }
echo "<br>";
?>
