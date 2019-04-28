<?php
    /*
    This file contains:
        1. Get Connection
        2.
    */
    
    function getConnection() {
        // Create connection
        $conn = oci_connect("ibajwa", "bajw5680", "141.238.9.4/xe");
        
        if (!$conn) {
            $e = oci_error();
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        }
        return $connection;
    }

    // Safe query
    function runSafeQuery($query, $params) {
        $connection = getConnection();

        // Prepare
        $statement = $connection->prepare($query);
        if ($statement == false) {
            die("Prepare failed: " . $connection->error);
        }

        // Binding parameters
        if (count($params) > 0) {
            $statement->bind_param(...$params);
        }
        if ($statement->error) {
            die("Bind failed: " . $statement->error);
        }

        $success = $statement->execute();

        if ($success == false) {
            die("Execute failed: " . $statement->error);
        }

        $result = $statement->get_result();

        $connection->close();

        $results = [];

        while ($result && $row = $result->fetch_array()) {
            $result[] = $row;
        }

        return $result;
    }


?>