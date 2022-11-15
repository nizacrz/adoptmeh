<?php
include "dbconnection.php";
$id=$_GET["id"];
mysqli_query($conn, "delete from cats  where id=$id");
?>

<script type="text/javascript">
    window.location="cats.php";
</script>
