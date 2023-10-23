<html>
    <head>
        <title>Meu Projeto WEB</title>
    </head>

    <head>
        <h1 style="text-align: center;">Meu Projeto WEB</h1>

        <br><br><br>

        <h2 style="text-align: center;">IP:
            <?php
            $ip = "IP não encontrado :(";

            if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
            }
            elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
            }  
            else{  
                $ip = $_SERVER['REMOTE_ADDR'];  
            }

            echo $ip;
            ?>  
        </h2>

        <h2 style="text-align: center;">
            Now:
            <?php
            echo date('Y-m-d H:i:s')
            ?>
        </h2>
    </head>
</html>