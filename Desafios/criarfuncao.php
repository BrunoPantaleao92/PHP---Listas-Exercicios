<?php

function criar_formulario($metodo, ...$campos) {
    {
 
        $form = "<form method='$metodo'>";
        foreach ($campos as $campo) {
            $form .= "<label for='$campo'>$campo:</label>";
            $form .= "<input type='text' id='$campo' name='$campo'><br>";
        }
        $form .= "<input type='submit' value='Enviar'>";
        $form .= "</form>";
        return $form;
    }
}

?>