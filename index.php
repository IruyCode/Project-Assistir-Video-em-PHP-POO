<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP POO</title>
</head>
<body>
    <pre>
    <h1>projecto php em POO</h1>
    <?php
        require_once '/xampp/htdocs/poo_php/Project-Assistir-Video-em-PHP-POO/Video/Class_video.php';
        require_once '/xampp/htdocs/poo_php/Project-Assistir-Video-em-PHP-POO/Pessoa/Class_users.php';
        require_once 'Class_visualizacao.php';
            $v[0] = new Video("Aula teste 1");
            $v[1] = new Video("Aula teste 2 HTML");
            

            $p[0] = new Users("Joana","F","JuGado@gmail.com");
               

                $vis[0] = new Visualizacao($p[0],$v[0]); // Jaana assitir HTML 5
                  
                $vis[1] = new Visualizacao($p[0],$v[1]);
                    print_r($vis[1]);

                $vis[0]->avaliar();  
                print_r($vis[0]);        

    ?>
    </pre>
</body>
</html>