<?php
    $link = mysqli_connect('localhost','root','','c9');
 
    if(mysqli_connect_errno())
        {
            echo 'Error in connection with data base('.mysqli_connect_errno().' ): '. mysqli_connect_error();
            exit();
        }
    
    function get_users_data_()
        {
            global $link;
            $sql = "SELECT * FROM users";
            $result = mysqli_query($link, $sql);
            $users = mysqli_fetch_all($result, 1);
            return $users;
        }
?>