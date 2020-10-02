<?php
namespace App;

class WA
{
    public static function sendMessage($nama, $wa, $total_pax, $total_bayar, $alamat, $alamat_penjemputan){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://wa.me/6285230514056?text=Haloo%20Admin.%0A%0A*Paket%20Luxury*%20%0A%20%20Nama%20%3A%20$nama%2C%0A%20%20No.%20Whatsapp%20%3A%20$wa%2C%20%0A%20%20Total%20Penumpang%20%20%3A%20$total_pax%2C%0A%20%20Total%20Bayar%20%3A%20$total_bayar%2C%0A%20%20Alamat%20%3A%20$alamat%2C%0A%20%20Alamat%20Penjemputan%20%3A%20$alamat_penjemputan%2C%0A%0AVia%20pesonatravel.id%2F",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
          ));

        $response = curl_exec($curl);

        curl_close($curl);

        $data = json_decode($response, true);
        $status = $data['ok'];

        return $status;
    }
}