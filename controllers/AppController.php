<?php

namespace controllers;

use database\DB;

session_start();

class AppController
{

	public $connection;

	public function __construct() {
		$this->connection = new DB();
	}



	public function beforeFilter()
	{
		// $session = $this->getSessionAuth();
		// $baseUrl = Router::url('/', true);
		// date_default_timezone_set('Asia/Ho_Chi_Minh');
		// $sessionUser = $this->getSessionAuth();
		// $this->set(compact('baseUrl', 'sessionUser'));
		// $this->debugLog($this);
	}
	public function getLimitPage()
	{
		// return Configure::read('limit_page');
	}
	public function logout()
	{
		$session = $this->getSessionAuth();
		session_destroy();
		// unset($_SESSION["user"]);
		// session_destroy();
		if (!$session) {
			header("Location: ../maneger_shop_basic1/sign-in");
		} else {
			header("Location: ../maneger_shop_basic1/dashboard");
		}
	}
	// Lưu sesion 
	// public function doLogin($username, $password) {


	// 	$query = $this->connection->query("SELECT * FROM user WHERE  user.username='" . $username . "'");
	// 	$user = $query->fetchArray();
	// 	// var_dump($user);
	// 	if(!empty($user)) {

	// 		$isValid = password_verify($password,($user["password"]));
	// 		// var_dump($isValid);die;
	// 		if($isValid) {
	// 		header("Location: ../maneger_shop_basic1/dashboard");
	// 		$_SESSION["user"] = $user;
	// 		} else {
	// 		header("Location: ../maneger_shop_basic1/sign-in");
	// 		$_SESSION["error"] = "Password is Invalid";
	// 		}
	// 	} else {
	// 		var_dump("vao day");
	// 		header("Location: ../maneger_shop_basic1/sign-in");
	// 		$_SESSION["error"] = "Username is Invalid";
	// 	}
	// }

	public function isLogIn()
	{
		$session = $this->getSessionAuth();
		if ($session) {
			return true;
		} else {
			$this->logout();
		}
	}
	// get session
	public function getSessionAuth()
	{
		$session = sizeof($_SESSION) > 0 && $_SESSION["user"] ? $_SESSION["user"] : null;
		return $session;
	}


	public function sendEmail($msg)
	{
		// $emailServer = new CakeEmail('smtp');
		// $emailServer->from(array('support@aecomapp.com' => '[BizwebApp]Aetheme - '.Configure::read('appname')));
		// $emailServer->to('nguyentu14@gmail.com');
		// $emailServer->emailFormat('text'); 
		// $emailServer->subject(__('Message:'));
		// $emailServer->send($msg);
	}
	public function sendEmailError($msg)
	{
		// $emailServer = new CakeEmail('smtp');
		// $emailServer->from(array('support@aecomapp.com' => '[BizwebApp]Aetheme - '.Configure::read('appname')));
		// $emailServer->to('nguyentu14@gmail.com');
		// $emailServer->emailFormat('text'); 
		// $emailServer->subject(__('Error from BizwebApp:'));
		// $emailServer->send($msg);
	}
	function createSlug($string)
	{
		$string = mb_strtolower($string, 'UTF-8');
		$arrTemp = array(
			'/ä|æ|ǽ/' => 'ae',
			'/ö|œ/' => 'oe',
			'/ü/' => 'ue',
			'/Ä/' => 'Ae',
			'/Ü/' => 'Ue',
			'/Ö/' => 'Oe',
			'/À|Á|Â|Ã|Ä|Å|Ǻ|Ā|Ă|Ą|Ǎ/' => 'A',
			'/à|á|â|ã|å|ǻ|ā|ă|ą|ǎ|ª/' => 'a',
			'/Ç|Ć|Ĉ|Ċ|Č/' => 'C',
			'/ç|ć|ĉ|ċ|č/' => 'c',
			'/Ð|Ď|Đ/' => 'D',
			'/ð|ď|đ/' => 'd',
			'/È|É|Ê|Ë|Ē|Ĕ|Ė|Ę|Ě/' => 'E',
			'/è|é|ê|ë|ē|ĕ|ė|ę|ě/' => 'e',
			'/Ĝ|Ğ|Ġ|Ģ/' => 'G',
			'/ĝ|ğ|ġ|ģ/' => 'g',
			'/Ĥ|Ħ/' => 'H',
			'/ĥ|ħ/' => 'h',
			'/Ì|Í|Î|Ï|Ĩ|Ī|Ĭ|Ǐ|Į|İ/' => 'I',
			'/ì|í|î|ï|ĩ|ī|ĭ|ǐ|į|ı/' => 'i',
			'/Ĵ/' => 'J',
			'/ĵ/' => 'j',
			'/Ķ/' => 'K',
			'/ķ/' => 'k',
			'/Ĺ|Ļ|Ľ|Ŀ|Ł/' => 'L',
			'/ĺ|ļ|ľ|ŀ|ł/' => 'l',
			'/Ñ|Ń|Ņ|Ň/' => 'N',
			'/ñ|ń|ņ|ň|ŉ/' => 'n',
			'/Ò|Ó|Ô|Õ|Ō|Ŏ|Ǒ|Ő|Ơ|Ø|Ǿ/' => 'O',
			'/ò|ó|ô|õ|ō|ŏ|ǒ|ő|ơ|ø|ǿ|º/' => 'o',
			'/Ŕ|Ŗ|Ř/' => 'R',
			'/ŕ|ŗ|ř/' => 'r',
			'/Ś|Ŝ|Ş|Š/' => 'S',
			'/ś|ŝ|ş|š|ſ/' => 's',
			'/Ţ|Ť|Ŧ/' => 'T',
			'/ţ|ť|ŧ/' => 't',
			'/Ù|Ú|Û|Ũ|Ū|Ŭ|Ů|Ű|Ų|Ư|Ǔ|Ǖ|Ǘ|Ǚ|Ǜ/' => 'U',
			'/ù|ú|û|ũ|ū|ŭ|ů|ű|ų|ư|ǔ|ǖ|ǘ|ǚ|ǜ/' => 'u',
			'/Ý|Ÿ|Ŷ/' => 'Y',
			'/ý|ÿ|ŷ/' => 'y',
			'/Ŵ/' => 'W',
			'/ŵ/' => 'w',
			'/Ź|Ż|Ž/' => 'Z',
			'/ź|ż|ž/' => 'z',
			'/Æ|Ǽ/' => 'AE',
			'/ß/' => 'ss',
			'/Ĳ/' => 'IJ',
			'/ĳ/' => 'ij',
			'/Œ/' => 'OE',
			'/ƒ/' => 'f',
			// for vietnamese
			"/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/" => 'a',
			"/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/" => 'e',
			"/(ì|í|ị|ỉ|ĩ)/" => 'i',
			"/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/" => 'o',
			"/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/" => 'u',
			"/(ỳ|ý|ỵ|ỷ|ỹ)/" => 'y',
			"/(đ)/" => 'd',
			"/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/" => 'A',
			"/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/" => 'E',
			"/(Ì|Í|Ị|Ỉ|Ĩ)/" => 'I',
			"/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/" => 'O',
			"/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/" => 'U',
			"/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/" => 'Y',
			"/(Đ)/" => 'D'
		);

		$table = array('.' => '-', '/' => '-', ' ' => '-',);
		foreach ($arrTemp as $key => $val) {
			$string = preg_replace($key, $val, $string);
		}
		$stripped = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $string);
		$string = strtr($stripped, $table);
		return $string;
	}
	public function callBuildSlug()
	{
		// get $name tu request
		$dataRequest = $this->request->data;
		$slug = $dataRequest['slug'];
		echo json_encode(['slug' => $this->createSlug($slug)]);
		die;
	}
	public function buildSlugTag()
	{
		// get $name tu request
		$dataRequest = $this->request->data;
		$slugTag = $dataRequest['tagName'];
		return $this->createSlug($slugTag);
	}
	public function compressCssInline($css)
	{
		/* remove comments */
		$css = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css);
		/* remove tabs, spaces, newlines, etc. */
		$css = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css);
		// $this->log($css);
		return $css;
	}



	//trung: get all cateogry childs str
	public function syncListChilds()
	{
		$listCategory = $this->Category->find('all');
		foreach ($listCategory as $key => $value) {
			$categoryId = $value['Category']['id'];
			$dataCateParent = $this->Category->findById($categoryId);
			$strChilds = $this->getChildCategory($categoryId);
			$dataCateParent['Category']['list_childs'] = $strChilds;
			$this->Category->save($dataCateParent);
		}
	}



	// get defaulurl image
	public function getDefaulUrlImage($size)
	{
		return "https://dummyimage.com/{$size['width']}x{$size['height']}/e5e5e5/fff";
		// return Router::url("/image/no-img-{$size['width']}x{$size['height']}.jpg", true);
	}
	public function cropImageProduct($media, $thumbSize)
	{
		$path = $media['path'];
		$id = $media['id'];
		$pathToImage = str_replace('/', DS, WWW_ROOT . $path);
		$media['path'] = $this->imageResize($id, $pathToImage, '', array('width' => $thumbSize['product_list'][0], 'height' => $thumbSize['product_list'][1]));
		return $media['path'];
	}
	// crop img function 
	public function imageResize($id, $src, $type, $size)
	{
		// $dirPath = WWW_ROOT;
		// $result = $this->getDefaulUrlImage($size);

		// if (!empty($src)) {
		// 	$fileImage = new File($src);
		// 	if ($fileImage->exists()) {

		// 			$file = getimagesize($src);
		// 			$width = $file[0];
		// 			$height = $file[1];
		// 			// make image resource
		// 			switch ($file['mime']) {
		// 				case 'image/jpeg':
		// 					$fileType = 'jpg';
		// 					$image = imagecreatefromjpeg($src);
		// 					break;
		// 				case 'image/png':
		// 					$fileType = 'png';
		// 					$image = imagecreatefrompng($src);
		// 					break;
		// 				case 'image/gif':
		// 					$fileType = 'gif';
		// 					$image = imagecreatefromgif($src);
		// 					break;
		// 				default:
		// 					$fileType = 'jpg';
		// 					$image = imagecreatefromjpeg($src);
		// 					break;
		// 			}

		// 			$arrInfo = pathinfo($src);
		// 			$thumbName = $arrInfo['filename'] . '-'. $id.'-thumb';
		// 			$thumbImage = $thumbName.'.'.$fileType;

		// 			// check exits folder, if not exits then create it
		// 			$folder = new Folder($dirPath.'image'.DS.'thumb', true);
		// 			if (is_null($folder->path)) $folder->create();

		// 			$path_to_image = str_replace( '/', DS, WWW_ROOT . 'image/thumb/' . $thumbImage);
		// 			$result = Router::url('/image/thumb/'.$thumbImage, true);

		// 			$fileThunmb = new File($path_to_image);

		// 			if (!$fileThunmb->exists()) {
		// 				// Start
		// 				$wThum = $size['width'];
		// 				$hThum = $size['height'];

		// 				$width = $file[0];
		// 				$height = $file[1];

		// 				if ($wThum > $width || $hThum > $height) {
		// 					$imageCrop = $this->resizeImageMax($image, $wThum, $hThum);
		// 					$this->saveImage($imageCrop, $file, $dirPath.'image'.DS.'thumb'.DS.$thumbImage);

		// 					imagedestroy($imageCrop);
		// 					// imagedestroy($image);
		// 					return $result;
		// 				}

		// 				$imageCrop = $this->resizeImageCrop($image, $wThum, $hThum);
		// 				$this->saveImage($imageCrop, $file, $dirPath.'image'.DS.'thumb'.DS.$thumbImage);
		// 				imagedestroy($imageCrop);
		// 				// imagedestroy($image);
		// 			} else {
		// 			}

		// 	}
		// }
		// return $result;
	}
	private function saveImage($imageSource, $file, $path)
	{
		switch ($file['mime']) {
			case 'image/jpeg':
				imagejpeg($imageSource, $path, 80);
				break;
			case 'image/png':
				imagepng($imageSource, $path);
				break;
			case 'image/gif':
				imagegif($imageSource, $path);
				break;
			default:
				imagejpeg($imageSource, $path, 80);
				break;
		}
	}

	function resizeImageCrop($image, $width, $height)
	{
		$w = @imagesx($image); //current width
		$h = @imagesy($image); //current height
		if ((!$w) || (!$h)) {
			return $image;
		}
		// no resizing needed
		if (($w == $width) && ($h == $height)) {
			return $image;
		}

		// try max width first
		$ratio = $width / $w;
		$newW = $width;
		$newH = $h * $ratio;

		//if that created an image smaller than what we wanted, try the other way
		if ($newH < $height) {
			$ratio = $height / $h;
			$newH = $height;
			$newW = $w * $ratio;
		}

		$image2 = imagecreatetruecolor($newW, $newH);
		imagecopyresampled($image2, $image, 0, 0, 0, 0, $newW, $newH, $w, $h);

		//check to see if cropping needs to happen
		if (($newH != $height) || ($newW != $width)) {
			$image3 = imagecreatetruecolor($width, $height);
			if ($newH > $height) { //crop vertically
				$extra = $newH - $height;
				$x = 0; //source x
				$y = round($extra / 2); //source y
				imagecopyresampled($image3, $image2, 0, 0, $x, $y, $width, $height, $width, $height);
			} else {
				$extra = $newW - $width;
				$x = round($extra / 2); //source x
				$y = 0; //source y
				imagecopyresampled($image3, $image2, 0, 0, $x, $y, $width, $height, $width, $height);
			}
			imagedestroy($image2);
			return $image3;
		} else {
			return $image2;
		}
	}
	private function resizeImageMax($image, $maxWidth, $maxHeight)
	{
		$w = imagesx($image); //current width
		$h = imagesy($image); //current height
		if ((!$w) || (!$h)) {
			return $image;
		}

		if (($w <= $maxWidth) && ($h <= $maxHeight)) {
			// no resizing needed
			return $image;
		}

		//try max width first
		$ratio = $maxWidth / $w;
		$newW = $maxWidth;
		$newH = $h * $ratio;

		//if that didn't work
		if ($newH > $maxHeight) {
			$ratio = $maxHeight / $h;
			$newH = $maxHeight;
			$newW = $w * $ratio;
		}

		$newImage = imagecreatetruecolor($newW, $newH);
		imagecopyresampled($newImage, $image, 0, 0, 0, 0, $newW, $newH, $w, $h);
		return $newImage;
	}
	public function getConfig($key)
	{
		$result = '';
		if ($key) {
			$data = $this->Config->findByKey($key);
			return isset($data['Config']['value']) ? $data['Config']['value'] : '';
		}
		return $result;
	}
	public function checkPermission($roleValidArr)
	{
		$session = $this->getSessionAuth();
		// $this->log($session);die;
		if ($session) {
			$role = $session['User']['role'];
			if (in_array($role, $roleValidArr)) {
				return true;
			} else {
				$this->redirect(Router::url('/dashboard', true));
			}
		} else {
			if (!$this->request->is('ajax')) {
				$this->redirect(Router::url('/dashboard', true));
			} else {
				die(json_encode(['status' => 'ERROR', 'message' => 'Không được quyền sử dụng chức năng này']));
			}
		}
	}
}
