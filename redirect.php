<?php

$conn = new mysqli("localhost","root","","url_shortener");

$code = $_GET['code'] ?? '';

if($code != ''){

    $q = "select long_url from url where short_code = '$code'";

    $result = $conn->query($q);

    if($result->num_rows > 0){

        $row = $result->fetch_assoc();

        header("Location: " . $row['long_url']);
        exit;

    }else{

        echo "Short URL not found.";

    }

}else{

    echo "Invalid Request.";

}
?>