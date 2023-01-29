<?php
defined('BASEPATH') OR exit('No direct script access allowed');
define('DOMPDF_ENABLE_AUTOLOAD', false);
//require_once("./vendor/dompdf/dompdf/dompdf_config.inc.php");
require_once("./vendor/dompdf/autoload.inc.php");
use Dompdf\Dompdf;
use Dompdf\Options;

class Pdfgenerator 
{
    protected $dompdf;

    public function __construct()
    {
        $this->dompdf = new Dompdf();
        $this->dompdf->set_paper('A4', 'portrait');
    }

    function addPage($pagecontent, $contenttype='html') {
        $this->dompdf->load_html(preg_replace('/>\s+</', '><',$pagecontent));

    }

    function createPdf($filename,$attachment=0){
        $this->dompdf->render();
        if($attachment == 1) {
            $this->dompdf->stream($filename.".pdf", array("Attachment" => $attachment));
        }
        else {
            return  $filedata =  $this->dompdf->output();
//            $this->load->helper('download');
//            $data = file_get_contents(FILE_UPLOAD_PATH . $file_path);
            //force_download($filename, $filedata);

        }
    }

    public function generate($html, $filename='', $stream=TRUE, $customPaper='A4', $orientation="portrait", $attachment=0, $customized=0,$is_load_file=false)
    {
        $html = $this->replaceRelativePath($html);
        if($is_load_file===true) {

            $dompdf = new Dompdf();
            $dompdf->set_option('chroot', FILE_UPLOAD_PATH);
            $dompdf->load_html_file($html);
        }
        else {
            $options = new Options();
            $options->set('isRemoteEnabled', TRUE);
            $dompdf = new Dompdf($options);
            $dompdf->load_html(preg_replace('/>\s+</', '><', $html));
        }

        if($customized == 1) {
            $customPaper = array(0,0,720,1440);
            $dompdf->set_paper($customPaper);
            $dompdf->render();
            $font = Font_Metrics::get_font("helvetica", "bold");
            $dompdf->get_canvas()->page_text(300, 1400, "Page: {PAGE_NUM} of {PAGE_COUNT}", $font, 10, array(0,0,0));
        } else {
            $dompdf->set_paper('A4', 'portrait');
            $dompdf->render();
        }
        if ($stream) {
             $dompdf->stream($filename.".pdf", array("Attachment" => $attachment));
        } else {
            return $dompdf->output();
          //$path = 'theme/cube/uploads/pdfstatement/'.$filename.'.pdf';
          //file_put_contents($path, $dompdf->output());
         // return $path;
       }
    }

    public function unset_dompdf(){
        $dompdf = new Dompdf();
        unset($dompdf);
    }

    public function replaceRelativePath($data)
    {
        if(empty($data))
        return false;
	$logoLeft = '/var/www/html/CI3/theme/assets/img/logo/logo_1.gif';
	$logoLeftBase64 = $logoLeft ? base64_encode(file_get_contents($logoLeft)) : '';
	$logoLeftBase64 = 'data:image/png;charset=utf-8;base64,'.$logoLeftBase64;

	$logoRight = 'var/www/html/CI3/theme/assets/img/logo/logo_1.gif';
        $logoRightBase64 = $logoRight ? base64_encode(file_get_contents($logoRight)) : '';
        $logoRightBase64 = 'data:image/png;charset=utf-8;base64,'.$logoRightBase64;
	
	$data = str_replace([$logoLeft, $logoRight], [$logoLeftBase64, $logoRightBase64], $data);
        return $data;
    }
}
