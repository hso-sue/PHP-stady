<?php

$age = 5;

if($age >= 10 && $age < 20) {
  echo ("10代です");
} else if($age >= 20 && $age < 30) {
  echo "20代です";
} else if($age >= 30 && $age < 40) {
  echo "30代です";
} else {
  echo "それ以外";
}

$age."\n";