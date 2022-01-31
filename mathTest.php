<?php
use PHPUnit\Framework\TestCase;
//require("index.php");

class mathTest extends TestCase
{
    public function testDivision()
    {
        
            $un=5; 
            $deux=2;
            
            if($deux == 0){
                throw new Exception("Division par 0 : Impossible");
                
            }
            else if(is_null($un)===true && is_null($deux)===true)
            {
               throw new Exception("Aucune valeur entrer");
            }
            
           return ($un / $deux);
    }

}
?>
