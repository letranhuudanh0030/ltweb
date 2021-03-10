<?php
function pre($data)
{
    echo "<pre>";
    print_r($data);die();
    echo "</pre>";
}

function htmlRead($html)
{
    return html_entity_decode(htmlspecialchars_decode($html));
}

function getTableById($table, $id)
{
    $qr = "SELECT * FROM $table WHERE id = $id";
    $db = new DB();
    $result = mysqli_query($db->conn, $qr);
    return $result->fetch_assoc();
}

function is_email($password) {
    $parttern = "/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
    if (preg_match($parttern, $password))
        return true;
}

function dateFormat($date, $format) {
    $date = date_create($date);
    return date_format($date,"$format");
}

