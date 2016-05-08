// Unit 6 Activity 1
function sayHello()
{
	echo 'Hello';
}

// Unit 6 Activity 2

class SimpleClass{
//proprty declaration public
		$helloText = 'Hi';
		//method declaration
		public function sayHello(){
			echo $this->helloText;
		}
}

$sc = new SimpleClass;
$sc->sayHello();
