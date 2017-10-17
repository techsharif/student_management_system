<?php
// for data add

include('functions.php');
include('form_submit.php');
include('render_functions.php');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management System</title>

    <style>
        .main{
            margin: 0 auto;
            width: 700px;
            background: #ecfff4;
            padding: 10px;
        }
    </style>
</head>
<body>

<div class="main">

    <form action="" method="GET">
        <input type="number" name="id" placeholder="id">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="phone" placeholder="phone">
        <input type="submit" name="add-data" value="Add">
    </form>

    <form action="" method="GET">
        <input type="number" name="search-id" placeholder="id">
        <input type="submit" name="search-data" value="search">
    </form>

    <hr>

            <?php render_student_info() ?>


<!--        <tr>-->
<!--            <th>Id</th>-->
<!--            <th>Name</th>-->
<!--            <th>Phone</th>-->
<!--        </tr>-->

</div>


</body>
</html>
