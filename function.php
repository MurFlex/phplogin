<?php
    function checkdb($link){
        $sql = "SELECT * FROM people";
        $result = mysqli_query($link, $sql);
        $categories = mysqli_fetch_all($result);
        return $categories;
    }
    $categories = checkdb($link);