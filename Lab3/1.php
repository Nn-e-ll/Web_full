<?php
//a
$str = 'ahb acb aeb aeeb adcb axeb';
preg_match_all('/a..b/', $str, $matches);
print_r($matches[0]);

//b
$str1 = 'a1b2c3';
$str1 = preg_replace_callback('/\d+/', function($match)
 {
    return pow($match[0], 3);
}, $str1);
echo $str1;
?>
