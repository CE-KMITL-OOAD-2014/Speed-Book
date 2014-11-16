<?php
	Class UploadController extends BaseController{

		public function upload(){
		
		// $fileUser =	Input::file('file') ; 
		// $name =	$fileUser->getClientOriginalname();
		// $fileUser->move('File',$name);
	//	$size = $fileUser->getSize();
		// // return Redirect::to('upload');
		

			$file = Input::file('file');							//check hasImage 
			if($file!=NULL){
				$destinationPath = app_path()."/../public/File_b";
				$filename = date('Y-m-d').'_'.$file->getClientOriginalName(); 
				$uploadSuccess = $file->move($destinationPath, $filename);
				//
						//if user choose file to upload profile picture,save filename and move file to floder
			}
		
			$test = new book_database() ;
			$test->bookname = $filename ;
			$test->save();
			return Redirect::to('upload') ;

		}

	} 

?>

