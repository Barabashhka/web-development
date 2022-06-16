<?php
function getParameter(string $name): ?string
{
    $inputJSON = file_get_contents('php://input');
    $input = json_decode($inputJSON, true);
    return $input[$name] ?? null;
}
$name = getParameter('name');
$email = getParameter('email');
$profession = getParameter('profession');
$checkbox = getParameter('agreement');
if ($checkbox === '1')
{
    $checkbox = 'Согласен(-на) на рассылку';
}
else
{
    $checkbox = 'Не согласен(-на) на рассылку';
}
$fp = fopen("./data/".$email.".txt", 'w+');
if ($fp === false)
{
    http_response_code(500);
    echo json_encode(['status' => 500,'message' => 'file not open']);
    return;
}

fwrite($fp, "Email: ".$email.PHP_EOL);

fwrite($fp, "Имя: ".$name.PHP_EOL);

fwrite($fp, "Деятельность: ".$profession.PHP_EOL);

fwrite($fp, "Согласие: ".$checkbox.PHP_EOL);

fclose($fp);

echo json_encode(['status' => 200,'message' => 'success']);