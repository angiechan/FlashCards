<?
include_once('view.php');

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
        <div id="wrap">

        <?
            print View::renderHeader();
        ?>

        <div class="container">


            <div class="row">


                <ul class="nav nav-tabs">
                  <li class="active"><a href="#">Students</a></li>
                </ul>


            </div>


            <div class="row">
                <div class="span3">

                    <aside class="student-list">
                        <ul class="nav nav-list">
                        <?
                            foreach (Data::getStudents() as $student) {
                                $class = $student->name=='Riley' ? 'active' : '';
                                print "<li class='$class'><a href='wererwe'>".$student->name."</a></li>";
                            }
                        ?>
                        </ul>

                    </aside>
               </div>
                <div class="span1">
               </div>
                <div class="span8">
                    
                    <?
                        $sid = 1;
                        $student = Data::getStudent($sid);
                        View::renderStudentInfo($student);
                    ?>

                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#">Notify Parents</a></li>
                      <li><a href="#">View Vocabulary Words</a></li>
                      <li><a href="#">Progress</a></li>
                    </ul>

                    <form>
                        <h4>Comments</h4    >
                        <textarea rows="6" style="width:90%;" name="comment"></textarea>
                        <p><a class="btn btn-primary " href="about.html">Send</a></p>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <div class="container-fluid">
            <div class="push"></div>
            <hr>
            <div id="footer">
            <footer>
                <p>&copy; Flash Moustache 2013</p>
            </footer>
        </div>
        </div> <!-- /container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
