<?php
    require_once "../conf/koneksi.php";

    $json = array();
    $sqlQuery = "SELECT * FROM pinjam ORDER BY id_pinjam";

    $result = mysqli_query($koneksi, $sqlQuery);
    $eventArray = array();
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($eventArray, $row);
    }
    mysqli_free_result($result);

    mysqli_close($koneksi);
    echo json_encode($eventArray);
?>