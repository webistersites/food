<?php
$printer = "\\\\BETE-PC\Balcao";
if($ph = printer_open($printer))
{
   $fh = fopen("cupom.txt", "rb");
   $content = fread($fh, filesize("cupom.txt"));
   fclose($fh);
       
   printer_set_option($ph, PRINTER_MODE, "RAW");
   printer_write($ph, $content);
   printer_close($ph);
}

?>