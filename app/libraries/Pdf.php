<?php

defined('BASEPATH') or exit('No direct script access allowed');

require_once('./dompdf/autoload.inc.php');

/* Esse trecho de código é preciso quando for hospedar */

use Dompdf\Adapter\CPDF;
use Dompdf\Dompdf;
use Dompdf\Exception;
use Dompdf\Options;

class Pdf
{

    function createPDF($html, $filename = '', $download = TRUE, $paper = 'A4', $orientation = 'portrait')
    {
        
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $options->set('isRemoteEnable', true);

        // $dompdf = new Dompdf\Dompdf(); //Para localhost
        $dompdf = new Dompdf(); //Para hospedagem
        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper, $orientation);
        $dompdf->render();
        if ($download)
            $dompdf->stream($filename . '.pdf', array('Attachment' => 1));
        else
            $dompdf->stream($filename . '.pdf', array('Attachment' => 0));
    }

}

?>