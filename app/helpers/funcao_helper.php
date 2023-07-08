<?php 


defined('BASEPATH') or exit('Ação não permitida');

function formata_data_banco_com_hora($string) {

    $dia_sem = date('w', strtotime($string));

    if ($dia_sem == 0) {
        $semana = "Domingo";
    } elseif ($dia_sem == 1) {
        $semana = "Segunda-Feira";
    } elseif ($dia_sem == 2) {
        $semana = "Terça-Feira";
    } elseif ($dia_sem == 3) {
        $semana = "Quarta-Feira";
    } elseif ($dia_sem == 4) {
        $semana = "Quinta-Feira";
    } elseif ($dia_sem == 5) {
        $semana = "Sexta-Feira";
    } else {
        $semana = "Sábado";
    }

    $dia = date('d', strtotime($string));

    $mes_num = date('m', strtotime($string));

    $ano = date('Y', strtotime($string));
    $hora = date('H:i', strtotime($string));

    return $dia . '/' . $mes_num . '/' . $ano . ' ' . $hora;
}

function formata_data_banco_sem_hora($string) {

    $dia_sem = date('w', strtotime($string));

    if ($dia_sem == 0) {
        $semana = "Domingo";
    } elseif ($dia_sem == 1) {
        $semana = "Segunda-Feira";
    } elseif ($dia_sem == 2) {
        $semana = "Terça-Feira";
    } elseif ($dia_sem == 3) {
        $semana = "Quarta-Feira";
    } elseif ($dia_sem == 4) {
        $semana = "Quinta-Feira";
    } elseif ($dia_sem == 5) {
        $semana = "Sexta-Feira";
    } else {
        $semana = "Sábado";
    }

    $dia = date('d', strtotime($string));

    $mes_num = date('m', strtotime($string));

    $ano = date('Y', strtotime($string));
    $hora = date('H:i', strtotime($string));

    return $dia . '/' . $mes_num . '/' . $ano;
}
