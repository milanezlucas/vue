<?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($_POST)) {
    $_POST = (array) json_decode(file_get_contents('php://input'), true);
}

if ( $_POST['action'] == 'teste' ) {
    $arr = array(
        'titulo'    => $_POST['titulo'],
        'autor'     => $_POST['autor'],
        'cabecalho' => 'Vim do Ajax'
    );

    echo json_encode($arr);

    // echo '{ 
    //     "livros": [{ "titulo": "is The New Black", "autor": "Piper Kerman", "checked": true },    
    //             { "titulo": "A Origem das Espécies", "autor": "Chares Dalrwin", "checked": false }], 
    //     "cabecalho": "Vim do Ajax", 
    //     "novoLivro": "",
    //     "novoAutor": ""
    //     }';
}

// titulo: 'Livro do AJax',
//         autor: 'Autor A'