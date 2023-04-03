<?php

require '../../../config.inc.php';
require 'models/Book.php';

/* Bestaand boek */
$boek1 = new Book(2);

/* Niet bestaand boek */
$boek2 = new Book();
$boek2->title = "1984";
$boek2->author = "George Orwell";
$boek2->isbn = "9780141836144";

/* Print het boek uit */
print_r($boek1) . "<br>";
print_r($boek2);
