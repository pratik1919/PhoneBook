<?php
/**
 * Created by PhpStorm.
 * User: sanjeev-budha
 * Date: 3/1/16
 * Time: 10:14 AM
 */
?>

<?php

    include('databaseConnection.php');

    if(isset($_GET['del']))
    {
        $id = $_GET['del'];

        $delete = "DELETE FROM contact WHERE id = $id";

        $conn->query($delete);

        $message=array("success"=>true);
        echo json_encode($message);

        header("Location:dashboard.php");
    }

?>