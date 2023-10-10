<?php

echo "test 2 \n";

$serverName = "xxmtestdb.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "ext2db", // update me
        "Uid" => "xxmtestdb_admin", // update me
        "PWD" => "#EDC4rfv" // update me
    );
    //Establishes the connection
echo "step 1 \n";
    $conn = sqlsrv_connect($serverName, $connectionOptions);
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}
echo "step 2 \n";
    $tsql = "SELECT @@Version AS SQL_VERSION";
    $stmt = sqlsrv_query($conn, $tsql);
echo "step 3 \n";
    if ($stmt === false) {
        echo "Failed to run the simple query (system-assigned).\n";
        print_r(sqlsrv_errors());
    } else {
        echo "conn ok";
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            echo $row['SQL_VERSION'] . PHP_EOL;
        }

        sqlsrv_free_stmt($stmt);
    }

echo "end";

?>
