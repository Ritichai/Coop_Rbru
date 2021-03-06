<?php

namespace common\widgets\report;

class PDFReport extends PDFSetting {
    
    // Setting
    public function __construct($orientation = null) {
        parent::__construct(!empty($orientation) ? $orientation : $this->orientation, PDF_UNIT, $this->pageSize, true, $this->encoding, false);
        $this->init(); // ตั้งค่า
    }
    
    // Create Report .(PDF)
    public function table($filename = null, $items = array()){
        
        // สร้าง Header Report
        $this->setHeaderFont(array($this->fontName, '', $this->fontSize));
        $this->SetHeaderData(FALSE, 0, $this->title, 'ออก ณ วันที่ : ' . date('Y/m/d H:i:s',time()), array(0, 0, 0), array(0, 64, 128));
        
        // สร้าง Footer Report
        $this->setPrintFooter(false); // ปิดการแสดง footer
        
        // เพิ่มหน้า page
        $this->AddPage();
        
        // กำหนด Font
        $this->SetFont($this->fontName, '', 22);
        $this->Write(0, !empty($items['setting']['title']) ? $items['setting']['title'] : $this->title, '', 0, 'C', true, 0, false, false, 0);
        $this->Ln();
        
        if (!empty($items['setting']['name'])){
            $this->SetFont($this->fontName, '', 14);
            $this->Write(0, !empty($items['setting']['name']) ? $items['setting']['name'] : '', '', 0, 'L', true, 0, false, false, 0);
            $this->Ln();
        }
        
        /* =========================================================
         * Header Tatle
         * ========================================================= */ 
        
        $this->SetFillColor(220 ,220, 220); // สีพื้นหลัง "เหลือง"
        $this->SetTextColor(0, 0, 0); // สีตัวอักษร "ดำ"
        $this->SetDrawColor(0 ,0, 0); // สีเส้น "เทา"
        $this->SetLineWidth(0.2); // ขนาดเส้น
        $this->SetFont($this->fontName, '', $this->fontSize);
        
        $header = array();  
        $type = array(); 
        $width = array(); 
        $align = array(); 
        $sub = array();
        
        // เก็บค่าลงตัวแปร
        foreach ($items['header'] as $value) {
            $header[]   = $value[0]; // ข้อความ
            $type[]     = $value[1]; // ชนิด "ตัวอักษร" หรือ "ตัวเลข"
            $width[]    = $value[2]; // ความกว้าง
            $align[]    = $value[3]; // จัดตำแหน่ง
            $sub[]      = $value[4]; 
        }
        
        // Header
        $num_headers = count($header);
        
        for($i = 0; $i < $num_headers; ++$i) {
            $this->Cell($width[$i], 7, $header[$i], 1, 0, 'C', 1);
        }
        
        $this->Ln();
        
        /* =========================================================
         * Body Tatle
         * ========================================================= */ 
        
        $this->SetFillColor(220 ,220, 220); // สีพื้นหลังคั่นระหว่าง row "ฟ้าจาง"
        $this->SetTextColor(0, 0, 0); // สีตัวอักษร "ดำ"
        
        // Data
        $fill = 0;
        
        foreach($items['items'] as $rows) {
            
            foreach ($rows as $key => $row) {
                
                if ($type[$key] === 'text') {
                    $this->Cell($width[$key],6,$rows[$key].$sub[$key],'LR',0,$align[$key],$fill);
                }
                
                if ($type[$key] === 'number') {
                    $this->Cell($width[$key],6,number_format($rows[$key]).$sub[$key],'LR',0,
                    $align[$key], $fill);
                }
                
                if ($type[$key] === 'date') {
                    $this->Cell($width[$key],6,date("Y-m-d H:i:s",$rows[$key]).$sub[$key],'LR',0,
                    $align[$key], $fill);
                }
                
            }
            
            $this->Ln();
            $fill = !$fill;
            
        }
        
        $this->Cell(array_sum($width),0,'','T');
        $this->lastPage();
        
        $this->get($filename);
        
    }
    
    // แสดงรายงาน PDF
    public function get($filename = 'filename.pdf', $type = 'I'){
        $this->Output($filename, $type); 
    }
    
}