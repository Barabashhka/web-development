<?php

const DIR = './data/';
function getValue(?string $fileString): string
{
   if (!$fileString) {
      return '';
   }
   return substr($fileString, strpos($fileString, ':') + 1);
}

$fileNames = array_diff(scandir(DIR), ['.', '..']);

$users = [];
foreach($fileNames as $fileName)
{
   $file = file(DIR .  $fileName);
   $email = substr($fileName, 0, strlen($fileName)-4);
   $name = getValue($file[1]);
   $activity = getValue($file[2]);
   $agreement = getValue($file[3]);

   $data = [
      'name' => $name,
      'email' => $email,
      'activity' => $activity,
      'agreement' => $agreement
   ];
   $users[] = $data;
}

echo json_encode($users);