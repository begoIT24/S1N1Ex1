<?php
require_once("Ex2_exNotes.php");
class Ex2_exNotesTest extends PHPUnit\Framework\TestCase{

        public function testDonarResultatMajor60 () {
            $nota = new Calificacio();
            $this->assertEquals ("El grau assolit és Primera divisió", $nota->donarResultat(65));
        }

        public function testDonarResultatIgual60 () {
            $nota = new Calificacio();
            $this->assertEquals ("El grau assolit és Primera divisió", $nota->donarResultat(60));
        }


        public function testDonarResultatMajor45 () {
            $nota = new Calificacio();
            $this->assertEquals ("El grau assolit és Segona divisió", $nota->donarResultat(50));
        }

        public function testDonarResultatIgual45 () {
            $nota = new Calificacio();
            $this->assertEquals ("El grau assolit és Segona divisió", $nota->donarResultat(45));
        }

        public function testDonarResultatMajor33 () {
            $nota = new Calificacio();
            $this->assertEquals ("El grau assolit és Tercera divisió", $nota->donarResultat(40));
        }

        public function testDonarResultatIgual33 () {
            $nota = new Calificacio();
            $this->assertEquals ("El grau assolit és Tercera divisió", $nota->donarResultat(33));
        }

        public function testDonarResultatMenor33 () {
            $nota = new Calificacio();
            $this->assertEquals ("L'estudiant ha de reprovar", $nota->donarResultat(20));
        }

}