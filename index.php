<?php require_once'functions.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="log_form.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <title>Document</title>
</head>
<body>
    <table class = "main_table">
        <?php $users = get_users_data_(); ?>
        <?php foreach ($users as $user) :?>
            <tr>
              <th scope="row"><?=$user['id']?></th>
              <td><?=$user['name']?></td>
              <td><?=$user['second_name']?></td>
              <td><?=$user['work_station_id']?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>