<?php
    $url = 'localhost/exercicio_api/api.php/alunos';
    $response = file_get_contents($url);
    $data = json_decode($response, true);

    var_dump($data);


?>