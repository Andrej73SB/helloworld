<?php
    $ip_address = new stdClass();
    //whether ip is from share internet
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip_address->ip = $_SERVER['HTTP_CLIENT_IP'];
    } //whether ip is from proxy
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip_address->ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } //whether ip is from remote address
    else {
        $ip_address->ip = $_SERVER['REMOTE_ADDR'];
    }
    $ip_address = json_encode($ip_address);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>AK-hello-world</title>
</head>

<body>
    <?php
    echo $ip_address;
    ?>
</body>

</html>