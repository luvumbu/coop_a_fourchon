<?php 

     
class My_date {
 
    
    public $my_date ; 
          function __construct($my_date) {
            $this->my_date = $my_date;
          }
    
    
          // Methods
     
          function my_date() {
            return $this->my_date;
          }
    
          function my_anne() {
            return $this->my_date[0].$this->my_date[1].$this->my_date[2].$this->my_date[3];
          }
          function my_mois() {
            return $this->my_date[5].$this->my_date[6];
          }
          function my_jour() {
            return $this->my_date[8].$this->my_date[9];
          }
      
        }
        
        //$apple = new My_date("2024-02-29");
        //$apple->my_date();
        //$apple->my_anne();
        //$apple->my_mois();



        ?>