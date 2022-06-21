<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://weatherapi-com.p.rapidapi.com/ip.json?q=100.0.0.1",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: weatherapi-com.p.rapidapi.com",
		"x-rapidapi-key: 373092cd7bmshcb2ed5d7cddf889p11ae2djsnf1db00f03448"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
$data = json_decode($response, true);
echo $data['tz_id'];
echo "<br><br>";
var_dump($data);
}

?>