<?php
include "dbconnection.php";
$id=$_GET["id"];
mysqli_query($conn, "delete from dogs  where id=$id");
?>

<script type="text/javascript">
    window.location="dogs.php";
</script>
