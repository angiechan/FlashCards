<?
class View {
	

	public static function renderHeader() {

		?>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="index.php">Flash Moustache</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Nav header</li>
                                    <li><a href="#">Separated link</a></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form pull-right">
                            <input class="span2" type="text" placeholder="Email">
                            <input class="span2" type="password" placeholder="Password">
                            <button type="submit" class="btn">Sign in</button>
                        </form>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

		<?



	}

	public static function renderStudentInfo($student) {

		?>

		<div class='student-info'>

			<div class="student-name">
				<?=$student->name?>
			</div>
			<div class="student-score">
				Flash Score: <?=$student->score?>
			</div>
		</div>


		<?

	}


}

class Student {

	public $name;
	public $score;

	function __construct($array) {

		foreach ($array as $key => $value) {
			$this->$key = $value;
		}
	}

}

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
			'name'=>'Sally', 
			'score'=>79));


	}



}





?>