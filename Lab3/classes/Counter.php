<?php 
class Counter implements Counter_Interface{
    private $_count;
    public function __construct(){
        $this->_count = $this->get_count();
    }
    public function get_count(){
        if(file_exists(_counter_file_)){
            return intval(file_get_contents(_counter_file_));
        }
    else{
        return 0;
    }
}

public function increament(){
     if(!isset($_SESSION[_session_key_counter_])){
    $this->_count++;
    $_SESSION[_session_key_counter_]=true;
    return $this->_count;
 }
 else{
    return false;
 }
    
}

public function update_counter(){
    $fp = fopen(_counter_file_,"w+");
    fwrite($fp,$this->_count);
    fclose($fp);
}

public function icremeant_and_update(){
    if($this->increament() != false){
        $this->update_counter();
    }
}

public static function get_title(){
    return "Visitors Counter";
} 

}

?>