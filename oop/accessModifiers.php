<?php
class Teachers{
    private function questionPapers(){
        return "question paper for students";
    }
    function exam(){
        if($this->questionPapers()=="question paper for students"){
            echo "do something";
        }else{
            echo "do else";
        }
    }
    protected function studentMarks(){
        echo "all students marks";
    }
}

class Management extends Teachers{
    function reviewExam(){
        $this->studentMarks();
    }
}
$t1= new Teachers();
$t2= new Management();
// echo $t1->questionPapers();
// echo $t1->exam();
// echo $t1->studentMarks();
echo $t2->reviewExam();
?>