<?php
$eol = "\n";
$DSN = 'ccgopvt';

$conn = odbc_connect($DSN, "userName", "password");

if (!$conn) {
    exit("Connection Failed:" . odbc_errormsg());
}

$sql = "SELECT * FROM phoneBanking WHERE Status = \"\" OR Status = \"NA\" AND County = \"Chittenden\" ORDER BY RAND() LIMIT 1;";
$result = odbc_exec($conn, $sql);

$rowID = odbc_result($result, "ID");
$rowFirstName = odbc_result($result, "FirstName");
$rowLastName = odbc_result($result, "LastName");
$rowAddress = odbc_result($result, "Address");
$rowCounty = odbc_result($result, "County");
$rowPhone = odbc_result($result, "Phone");

$data = array(
    "id" => $rowID,
    "firstName" => $rowFirstName,
    "lastName" => $rowLastName,
    "address" => $rowAddress,
    "county" => $rowCounty,
    "phone" => $rowPhone,
);

echo json_encode($data);

?>


