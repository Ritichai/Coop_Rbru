<?php

namespace common\widgets\report;

require_once(__DIR__.'\tcpdf-6.2.11\tcpdf.php'); 

use TCPDF;

class PDFSetting extends TCPDF {

    protected $object         = null;
    
    protected $fontName       = 'freeserif';  // ตัวอักษร
    protected $fontSize       = 9;           // ขนาดอักษร
    
    protected $author         = 'ศูนย์สหกิจศึกษา';
    protected $title          = 'ศูนย์สหกิจศึกษาและพัฒนาอาชีพ มหาวิทยาลัยราชภัฏรำไพพรรณี';
    
    protected $pageSize       = 'A4';        // ขนาดกระดาษ A4
    protected $encoding       = 'UTF-8';     // รูปภาพภาษา UTF-8
    protected $orientation    = 'P';         // รูปแบบ P ตั้ง | L นอน
    


    public function init() {
        
        // ตั้งค่า font เริ่มต้น
        $this->SetFont($this->fontName, '', $this->fontSize);
        
        // Author
        $this->SetAuthor($this->author);
        $this->SetTitle($this->title);
        
        // สร้าง Header Report
        $this->setHeaderFont(array($this->fontName, '', $this->fontSize));
        $this->SetHeaderData('', 0, 'Report', 'Created : ' . date('Y-m-d H:i:s'));
        
        // สร้าง Footer Report
        $this->setFooterFont(array($this->fontName, '', $this->fontSize));
        
        // กำหนดค่าเริ่มต้น Font สำหรับช่องว่าง
        $this->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
        
        //ตั้งค่าหน้ากระดาษ
        $this->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $this->SetHeaderMargin(PDF_MARGIN_HEADER);
        $this->SetFooterMargin(PDF_MARGIN_FOOTER);
        $this->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM); // กำหนดการแบ่งหน้าอัตโนมัติ
        
    }
    
}