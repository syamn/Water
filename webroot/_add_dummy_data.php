<?php
require_once("../bootstrap.php");


for($i = 1; $i <= 1300; $i++) {
    $sql = "INSERT INTO info SET time = :time, locate = :locate, flg = :flg, comment = :comment, address = :address";
    $params = [
        "time" => time(),
        "locate" => "33.87953701355925,134.14306640625",
        "flg" => 0,
        "comment" => "auto-" . $i,
        "address" => "no address",
    ];
    DB::conn()->query($sql, $params);
}

die('OK: ' . $i . ' rows inserted';