<?php
// Array ( [id] => 5 [deleteStudent] => )
require_once 'connect.php';
if (isset($_GET['deleteStudent'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM `students` Where `id`= $id";
    $deleteStudent = mysqli_query($connect, $query);

    if ($deleteStudent) {
        // IF you want redirect on some page after success event we will use this.
        header('Location: ../index.php');
    } else {
        echo mysqli_error($connect);
    }
} else {
    echo "You should not be here!!";
}
