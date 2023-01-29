<?php
function encrypt_url($string) {
	$output = false;
	/*

     * read security.ini file & get encryption_key | iv | encryption_mechanism value for generating encryption code

     */
	$security = parse_ini_file('security.ini');
	$secret_key = $security['encryption_key'];
	$secret_iv = $security['iv'];
	$encrypt_method = $security['encryption_mechanism'];
	// hash
	$key = hash('sha256', $secret_key);
	// iv – encrypt method AES-256-CBC expects 16 bytes – else you will get a warning
	$iv = substr(hash('sha256', $secret_iv), 0, 16);
	//do the encryption given text/string/number
	$result = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
	$output = base64_encode($result);
	return $output;
}

function decrypt_url($string) {
	$output = false;
	/*

       * read security.ini file & get encryption_key | iv | encryption_mechanism value for generating encryption code

       */
	$security = parse_ini_file('security.ini');
	$secret_key = $security['encryption_key'];
	$secret_iv = $security['iv'];
	$encrypt_method = $security['encryption_mechanism'];
// hash
	$key = hash('sha256', $secret_key);
	// iv – encrypt method AES-256-CBC expects 16 bytes – else you will get a warning
	$iv = substr(hash('sha256', $secret_iv), 0, 16);
	//do the decryption given text/string/number
	$output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
	return $output;
}

function getCurrentDateTime(){
	return date('Y-m-d H:i:s');
}

function getDecryptArray($postVal=array()){
	$result = array();
	if(!empty($postVal)){
		foreach($postVal as $key=>$val){
			$result[$key] = decrypt_url($val);
		}
	}
	return $result;
}

function getDateFDYHI($date){
	return date('F d, Y  H:i',strtotime($date));
}

function printData($array, $isexist=true){
	echo "<pre>";
	print_r($array);
	echo "</pre>";
	if($isexist === true){
		die();
	}
}

function getDateFormatted($date,$format='FdYHi'){
	if($date=='' || is_null($date) || $date=='0000-00-00'){
		return '--';
	}
	$dateFormat = '';
	switch ($format){
		case 'dmY': $dateFormat='d-m-Y'; break;
		case 'dMY': $dateFormat='d-M-Y'; break;
		case 'dmYHi': $dateFormat='d-m-Y H:i'; break;
		case 'dmYHiA': $dateFormat='d-m-Y H:i A'; break;
		case 'FdY':  $dateFormat='F d, Y'; break;
		case 'FdYHi': $dateFormat='F d, Y  H:i'; break;
		case 'Hi': $dateFormat='H:i'; break;
		case 'HiA': $dateFormat='H:i A'; break;
		case 'MdYHiA': $dateFormat='M d,Y H:i'; break;
		case 'hiA': $dateFormat='h:i A'; break;
		case 'jdY':  $dateFormat='M d, Y'; break;
	}
	return date($dateFormat, strtotime($date));
}



function checkValueExist($value)
{
	$aReturn = $value;
	if ($value == '' || is_null($value))
	{
		$aReturn = '--';
	}
	return $aReturn;
}

/*Get Storage Status */
function countCart()
{
	$CI = &get_instance();
	$CI->load->model('Ecommers_model');
	$postVal['ip_address'] = $_SERVER['REMOTE_ADDR'];
	$menu = $CI->Ecommers_model->getCartData($postVal);
	return $menu;
}
?>
