<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://weatherapi-com.p.rapidapi.com/sports.json?q=London",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: weatherapi-com.p.rapidapi.com",
		"x-rapidapi-key: 310a5cbeb8msh1c376866dd33100p179e31jsnd62b07623d37"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$data = json_decode($response, true);
    echo "<table width='70%' border='1'><tr style='font-weight:bold'><td>Keys</td><td>Values</th></tr>";

	$da = $data['football'];
	for($i=0; $i < count($da); $i++){
		$da = $data['football'][$i];
    foreach ($da as $key => $value) {
		echo $key . "  - - ". $value."<br>";
	}
	}

echo "</table>";
echo "<br><br>";
var_dump($data);
}
?>