<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form input values
    $year = $_POST['year'];
    $make = $_POST['make'];
    $model = $_POST['model'];
    $type = $_POST['type'];

    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://car-data.p.rapidapi.com/cars?limit=10&page=0&year=2018&make=Audi&model=a4&type=Sedan",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: car-data.p.rapidapi.com",
            "X-RapidAPI-Key: c3f773e452mshe262d1d8b1bc2e4p175126jsn90538595a17b"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo $response;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Data API Form</title>
</head>
<body>

<form method="POST">
    <label for="year">Year:</label>
    <input type="text" name="year" id="year" required><br>

    <label for="make">Make:</label>
    <input type="text" name="make" id="make" required><br>

    <label for="model">Model:</label>
    <input type="text" name="model" id="model" required><br>

    <label for="type">Type:</label>
    <input type="text" name="type" id="type" required><br>

    <button type="submit">Submit</button>
</form>

</body>
</html>