<?php

print("test 3");

// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:xxmtestdb.database.windows.net,1433; Database = ext2db", "xxmtestdb_admin", "$RFV6yhn");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Step1 OK \n";
   
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

?>
