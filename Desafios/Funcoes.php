<?php


function validar_nome_usuario($nome){
    ctype_alpha($nome)


}


function validar_email($email) {    
    // Remove os caracteres ilegais, caso tenha
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    
    // Valida o e-mail
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo("{$email} é um e-mail válido.");
    } else {
        echo("{$email} não é um e-mail válido.");
    }
}

function validar_senha($senha){
    if ( count($senha)<6)
    return "A senha deve conter pelo menos 6 caracteres."

    else{
        return "Senha cadastrada com sucesso"
    }

}