<?php 

namespace Class ; 


interface PdfDownloader extends HtmlDownloader{

    public function downloadPDF():string;
   
}