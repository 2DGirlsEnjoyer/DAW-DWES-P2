<?php
$n=10;
for ($i=0;$i<$n;$i++){
    for($j=0;$j<=$i;$j++){
        echo "* ";
    }
echo " ".'<br>';
}
for ($i=0;$i<$n;$i++){
    for($j=$n-1;$j>=$i;$j--){
        echo "* ";
    }
    echo " ".'<br>';
};
