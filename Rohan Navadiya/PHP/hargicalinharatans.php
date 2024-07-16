<?php
    class maths
    {
            public fuction get pi()
            {
            return 3.14;
            }
            public fuction get squar($num)
            {
                $squar=$num*$num;
                return $squar;
            }
    }
    class circle extends maths{
        public fuction_construct($radius){
            $this ->radius=$radius;
        }
        public fuction get area(){
            $area = $this ->getpi()*$this -> getsquar $this -> radius();

        }
    }
    class cyliender extends maths
    {
        public fuction_construct($radius,$height){
            $this -> height=$height;
            $this -> radius=$radius;
        }
        public fuction get volume(){
            $volume = $this -> getpi()*$this -> getsquar($this -> radius)*$this->height;
            return $volume;

        }
    }
    $c1
    ?>
        

            
        