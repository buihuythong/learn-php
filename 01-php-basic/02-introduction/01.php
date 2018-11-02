<?php
    class ShowInfo {
        private $message;
        
        public function __construct($mss){
            $this->message = $mss;
        }
        
        public function showMessage(){
            echo "Lời chào là : " . $this->message;
        }
        
        
    };
    
    $info = new ShowInfo("Hello world");
    $info->showMessage();
    
  