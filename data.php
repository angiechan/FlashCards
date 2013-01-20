<?
class Data {

	public static function getStudents() {

		return array(
			new Student(array('name'=>'Sally', 'score'=>79)),
			new Student(array('name'=>'Jack', 'score'=>13)),
			new Student(array('name'=>'Jill', 'score'=>31)),
			new Student(array('name'=>'Mary', 'score'=>74)),
			new Student(array('name'=>'Bob', 'score'=>48)),
			new Student(array('name'=>'Elliot', 'score'=>63)),
			new Student(array('name'=>'Agatha', 'score'=>98)),
			new Student(array('name'=>'Riley', 'score'=>42)),
			new Student(array('name'=>'Karis', 'score'=>67))
		);


	}

	public static function getStudent() {

		return new Student(array(
			'name'=>'Riley', 
			'score'=>79));

	}



}

?>