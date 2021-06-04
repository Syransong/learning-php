<!-- Defining Variables -->
<!-- All variables start with a dollar sign $ -->

<!-- Using Variables (Examples) -->
<?php
  $age = 34;

  echo $age; // Outpus 34

  $age = 35; // Reassigns variable value

  $double_age = $age * 2;
  echo $double_age; // Outputs 70
?>

<!-- Constants -->
<?php
  define('VERSION', 1.1);
  echo VERSION;

  VERSION = 1.2; //Will not work
  define('VERSION', 1.2); // Also will not work as constants are immutable. Constants are also case-sensitive
?>
