<?php

for($i = 1; $i <= 10; $i ++) {
  if($i == 3){
    continue;
  } else if($i == 7) {
    break;
  } 
  echo $i."\n";
}
