<?php include 'inc/header.php'; ?>
<?php

    $id = $_GET["id"];

    if (empty($id)) {
        echo "id not selected";
    }else{
        $sql = "DELETE FROM feedback WHERE id= '".$id."' ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        header('location:feedback.php');
    }
?>