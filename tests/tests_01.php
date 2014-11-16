<?PHP
class uploadTest extends  PHPUnit_Framework_TestCase{
	public function test(){
		this = new fileUpload() ;
		this -> setName($name) ;
		this -> setSize($size) ;
		this -> setData ($data) ;
		
		this-> assertEquals($name,this->getUser());
		this-> assertEquals($size,this->getSize());
		this-> assertEquals($data,this->getData());

	}
}

?>