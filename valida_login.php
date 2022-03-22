<?php
    //when you work with session always type(on the exit) ↓
    session_start();

//variable that verify if the authentication have been successful
    $usuario_autenticado = false;



    //users from system(we're going to use array because we don't know database yet)
    $usuarios_app = array(
        array('email' => 'admin@admin.com', 'senha' => 'admin'),
        array('email' => 'test@test', 'senha' => 'test'),
        array('email' => 'user@user.com', 'senha' => '123456'),
    );

    /*Explication: foreach will pass for single element and print them but in this is case the element is an array we use print_r*/
    foreach($usuarios_app as $user){
        //dot is concatenation of strings
        /*like this
        <?php

            $string1 = "Hello ";
            $string2 = "world!";
            $string = $string1 . $string2;

            echo $string;

         ?>


        */
        //verify if the User Form is equal to User app
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado){
        echo "Usuario Autenticado";
        $_SESSION['autenticado'] = "YES";
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = "NO";
        header('Location: index.php?login=error');

    }


    /*print_r($_GET);
    echo '<br />';

    echo $_GET['email'], PHP_EOL;
    echo '<br />';
    echo $_GET['senha'], PHP_EOL;*/