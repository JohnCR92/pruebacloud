<?php
try {
    $conn = new PDO("sqlsrv:server = tcp:servidorjohn.database.windows.net,1433; Database = servidorbdd", "johnc", "JohnHCR92");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "johnc@servidorjohn", "pwd" => "JohnHCR92", "Database" => "servidorbdd", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:servidorjohn.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

?>
