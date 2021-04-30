<?php

class Indek_model extends CI_Model{

    public function get_data(){

        $DataMahasiswa = array(
            array(191240000931,"ANANDA NISWATUL", "Prodi Teknik Informatika"," DB"),
            array(191240000932,"STEVEN JOE", "Prodi Teknik Informatika"," DB"),
            array(191240000933,"NADHIT ARDIANSYAH", "Prodi Teknik Informatika"," DB"),
            array(191240000934,"FITRI ANIYATUL", "Prodi Teknik Informatika"," DB"),
            array(191240000935,"MUHAMMAD FERDINAN", "Prodi Teknik Informatika"," DB"),
            array(191240000935,"AHMAD DANI SETIAWAN", "Prodi Teknik Informatika"," DB"),
            array(191240000936,"SERGIO RAMOS", "Prodi Teknik Informatika"," DB"),
        );
        return $DataMahasiswa;
        //return yang berarti mengembalikan nilai dalam suatu variabel dari DataMahasiswa
    }

    function get_resi(){
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
                CURLOPT_POSTFIELDS => "method=app.findTrack&data%5Bbillcode%5D=JD0113856760&data%5Blang%5D=en&data%5Bsource%5D=3&pId=0e765fcd079a9a2a16feeaf34b2e0b2c&pst=65c6e61877633da28fd8c0edc16d998b",
                CURLOPT_HTTPHEADER => array(
                        "cache-control: no-cache",
                        "content-type: application/x-www-form-urlencoded",
                        "postman-token: 5c07ce39-9f58-71e9-b990-1128569881bb"
                    ),
                ));
            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);
            $result = json_decode(json_decode($response)->data)->details;
            return $result;
    }
}