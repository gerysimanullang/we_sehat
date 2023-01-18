<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'data_wesehat';

    $conn = mysqli_connect($host, $user, $pass, $db);

    if (!$conn) {
        echo "connection failed";
    }

    function cariObat($id, $conn) {
        $sql = "
        select obat from obat
        join penyakit on penyakit.id = obat.penyakit_id
        where penyakit = \"$id\";";

        $result = $conn -> query($sql);

        while ($row = $result->fetch_assoc()){
            $array[] = $row;
        }
        if (isset($array)){
            return $array;
        }
    }
?>