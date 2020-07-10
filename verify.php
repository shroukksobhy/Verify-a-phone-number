<?php
include 'config.php';

$url = 'http://apilayer.net/api/validate?access_key=';
function readHTML($url)
{
    $phone_number =  htmlspecialchars($_POST["number"]);
    // set API Access Key
    $access_key = 'f6dc26b3d9c60f5820316a026a6941cd';

    // Initialize CURL:
    $ch = curl_init($url . $access_key . '&number=' . $phone_number);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Store the data:
    $json = curl_exec($ch);
    curl_close($ch);

    $validationResult = json_decode($json, true);

    if ($validationResult['valid'] == false) {
        echo 'wrong number';
        die();
    }
    // Task3  -> Store in database 
    $sql = "INSERT INTO numbers (country_code, country_name,number,carrier) VALUES (:country_code, :country_name,:number,:carrier)";
    $pdo = PDO();
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':country_code' => $validationResult['country_code'],
        ':country_name' => $validationResult['country_name'],
        ':number' => $validationResult['number'],
        ':carrier' => $validationResult['carrier'],

    ]);
    // End Task 3 

    // Access and use your preferred validation result objects
    return '<b>Country Prefix: </b>' . $validationResult['country_prefix']  . '<br>' .
        '<b>Country Code: </b>' . $validationResult['country_code']  . '<br>' .
        '<b>Country Name: </b>' . $validationResult['country_name']  . '<br>' .
        '<b>Number: </b>' . $validationResult['number']  . '<br>' .
        '<b>Carrier: </b>' . $validationResult['carrier']  . '<br>' .
        '<b>Line Type: </b>' . $validationResult['line_type']  . '<br>' .
        '<b>International Format: </b>' . $validationResult['international_format']  . '<br>' .
        '<b>Local Format: </b>' . $validationResult['local_format'];

    //return utf8_encode($json);
    //return $validationResult['country_code'];
}
echo nl2br(readHTML($url));