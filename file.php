<?php

    // Define a pasta onde vai ser salvo os arquivos
    $pastaUpload = 'C:/xampp/htdocs/envio_arquivo/uploads/';

    // Concatena o caminho da pasta com o nome do arquivo enviado
    $arquivoUpload = $pastaUpload . basename($_FILES['arquivo']['name']);

    echo '<pre>';
    // move_uploaded_file -> Função do PHP que recebe:
    //     (1) string -> Caminho temporário + nome do arquivo recebido (gerado automaticamente pelo PHP);
    //     (2) string -> Caminho onde o arquivo vai ser salvo.
    //     Retorna:
    //          bool -> TRUE se salvou com sucesso, FALSE se ocorreu um erro
    if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $arquivoUpload)) {
        echo "Arquivo válido e enviado com sucesso.\n";
    } else {
        echo "Occoreu um erro. Não foi possível salvar o arquivo.!\n";
    }

    // Printa na tela as informações do arquivo enviados pelo formulário
    echo 'Aqui está mais informações do arquivo:';
    print_r($_FILES);

    print "</pre>";
?>