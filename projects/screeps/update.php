<?php
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://screeps.com/api/user/memory?shard=shard3",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_SSL_VERIFYHOST => false,
      CURLOPT_SSL_VERIFYPEER => false,
      CURLOPT_ENCODING => "",
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_POSTFIELDS => '{}',
      CURLOPT_HTTPHEADER => array(
        "X-Token: d9da1bfc-bbb0-4a45-9a02-b42f56ff7699",
        "Accept: application/json",
        "Accept-Encoding: gzip, deflate",
        "Content-Type: application/json",
      ),
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl);
    $response = json_decode($response,true);
    $response = $response["data"];
    $result = gzdecode(base64_decode(substr($response,3)));
    echo json_encode($result);
    curl_close($curl);
 ?>
