<?php
/** 
* Plugin Name: Tiempo de Lectura
* Plugin URI: https://nohaywebs.com/tiempo-de-lectura
* Description: Añade el tiempo estimado de lectura
* Version: 1.0
* Author: Marce Concepción
* Author URI: https://nohaywebs.com 
*/

add_action('the_content', 'time-to-read');

function time_to_read($content)
{
    $wpm = 300; // Cantidad de palabras por minuto que lee la persona media
    $word_count = str_word_count($content); //Recuento de palabras del contenido
    $estimated_time_to_read = floor($word_count / $wpm);

    if ($estimated_time_to_read > 0){

        return '<p> Tiempo estimado de lectura: ' . $estimated_time_to_read . 'minutos </p>' . $content;
    }else {
        return '<div> Tiempo estimado de lectura: menos de un minuto </div>' . $content;
    }
}