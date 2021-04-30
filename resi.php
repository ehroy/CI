<?php
function tembak_dalam(){

    $kontolodon = randomkontol();

    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://jet.co.id/index/router/index.html",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "method=app.findTrack&data%5Bbillcode%5D=".$kontolodon."&data%5Blang%5D=en&data%5Bsource%5D=3&pId=0e765fcd079a9a2a16feeaf34b2e0b2c&pst=65c6e61877633da28fd8c0edc16d998b",
    CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
            "content-type: application/x-www-form-urlencoded",
            "postman-token: 5c07ce39-9f58-71e9-b990-1128569881bb"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        $kontolmaneh = json_decode(json_decode($response)->data)->details;
        if(empty($kontolmaneh)){
            $pelernoob = "Not Valid => " . $kontolodon . "\n";
            // echo $pelernoob;
            // echo "\e91m [×]".$pelernoob."  [•]  Hapus ~> ";
        } else {
            $peler = "Valid => ". $kontolodon  ." |: " . $kontolmaneh[count($kontolmaneh)-1]->desc . " | " . $kontolmaneh[count($kontolmaneh)-1]->city . " |". $kontolmaneh[count($kontolmaneh)-1]->scantime  ."\n\n";
            $open = fopen("resi.txt", "a");
            fwrite($open, $peler);
            fclose($open);
            echo $peler;
            echo "\033[1;35m[✓]".$peler;
        }
    }
}

function randomkontol(){
    // return array_rand(array('JP'=>'', 'JD'=>''),1) . "" . substr(str_shuffle("0123456789"), 0, 9);
    return "JD1130" . substr(str_shuffle("0123456789"), 0, 6);
}

while(true){
    tembak_dalam();
}