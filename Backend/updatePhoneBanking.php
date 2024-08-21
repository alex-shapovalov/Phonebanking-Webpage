<?php
$eol = "\n";
$DSN = 'ccgopvt';

$conn = odbc_connect($DSN, "userName", "password");

if (!$conn) {
    exit("Connection Failed:" . odbc_errormsg());
}

$formSelection = $_POST['options'];
$rowID = (int) $_POST['id'];

switch ($formSelection) {
    case '1':
        $status = 'NA';
        break;
    case '2':
        $status = 'HU';
        break;
    case '3':
        $status = 'WN';
        break;
    case '4':
        $status = 'CN';
        break;
    default:
        die(json_encode(['success' => false, 'error' => 'Invalid']));
}

$sql = "UPDATE phoneBanking SET Status = '" . $status . "' WHERE id = '" . $rowID . "'";

odbc_exec($conn, $sql);

?>


