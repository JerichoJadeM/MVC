<?php
    
    echo SITENAME . "<hr>" . $data['Title'] . "<br>" . "AUTHOR: " . $data['Author'] . "<br>";

    echo "<br> USERS: <br>";
    foreach($data['Users'] as $user){
        echo $user->fname . " " . $user->lname . "<br>";
    }
?>