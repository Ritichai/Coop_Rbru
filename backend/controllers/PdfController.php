<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace backend\controllers;

/**
 * Description of PdfController
 *
 * @author Ritichai
 */
class PdfController  extends \yii\web\Controller{
    public function actionIndex(){
        $mpdf = new \mPDF;
        $mpdf->WriteHTML('Sample Text');
        $mpdf->Output('MyPDF.pdf','I');
        exit();
    }
}
