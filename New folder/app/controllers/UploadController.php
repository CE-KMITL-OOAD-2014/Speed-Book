<?php
	Class UploadController extends BaseController{
		public funtion upload(){
			$fileUser =	Input::file('file') ;
			$fileUser->move('File');
			return $fileUser->getFilename();
		}
	} 

?>