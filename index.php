<?php
    
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'almacenamiento_juguetes';

    if(isset($_POST)) {
        storageValidation($_POST['student_age']);
    }
 
    function storageValidation($student_age) {
        class SmallKids {
            public $ageRange = array(0,5);
            public $storage = 'parte inferior';
    
            public function mostrar() {
                echo $this->ageRange[1];
            }
        }
    
        class MediumKids {
            public $ageRange = array(6,7);
            public $storage = 'parte media';
        }
    
        class BigKids {
            public $ageRange = array(8, 14);
            public $storage = 'parte alta';
        }
    
        $small_kids = new SmallKids();
        $medium_kids = new MediumKids();
        $big_kids = new BigKids();

        $students_groups = array($small_kids, $medium_kids, $big_kids);

        for($i = 0; $i < count($students_groups); $i++) {
            $ageRangeArr = $students_groups[$i]->ageRange;

            if($student_age >= min($ageRangeArr) && $student_age <= max($ageRangeArr)) {
                echo 'El estudiante ' . 'con ' . $student_age . ' años' . ' 
                tendrá sus juguetes en la ' . $students_groups[$i]->storage . ' de la bodega';
            } 
        }
    }
?>