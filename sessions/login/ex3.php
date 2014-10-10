<?php

/**
* @param $date an String  that represent a date, format: M/D/YYYY HH:ii
*/
function guess($date)
{
  $today = date_create('now');
  $date1 = date_create($date);
  $today = date_timestamp_get($today); //$today to seconds
  $date1 = date_timestamp_get($date1); // $date1 to seconds
  $interval = ($today - $date1) / 60;
  return $interval;
}
//usage
echo "<br/>";
echo guess('10/09/2014 19:56');


/**
 * La funcion calcula el intervalo transcurrido en minutos desde una fecha pasada
 * como parametro en string con el siguiente formato: M/D/YYYY HH:ii hasta el momento 
 * en el que se ejecuta la funcion.
 */