
<html>
<head><title>Sort Students</title></head>
<body>
<?php
// Create an array of student names
$students = array("Ravi", "Anjali", "Kiran", "sidahrth", "Arun");

// Display original array
echo "<h2>Original Students List:</h2>";
echo "<pre>";
print_r($students);
echo "</pre>";

// Copy for ascending - Original nashtapeduthanda
$ascStudents = $students;
asort($ascStudents);
echo "<h2>Students List Sorted In Ascending Order (asort):</h2>";
echo "<pre>";
print_r($ascStudents);
echo "</pre>";

// Copy for descending - Original nashtapeduthanda
$descStudents = $students;
arsort($descStudents);
echo "<h2>Students List Sorted In Descending Order (arsort):</h2>";
echo "<pre>";
print_r($descStudents);
echo "</pre>";
?>
</body>
</html>