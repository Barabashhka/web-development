<?php
$query = 'ab';
$symbol = substr($query, 1, 1);
echo $symbol;
if ((($symbol >= 'a') and ($symbol <= 'z')) or (($symbol >= 'A') and ($symbol <= 'Z')))
{
    echo 'Hello';
}
else
{
     echo 'Good Bye';
}