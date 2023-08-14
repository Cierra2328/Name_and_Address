<?php 

class Address{
    private string $name;
    private string $street;
    private string $city;
    private string $state;
    private int $zip;
    private string $phone;

    public function __construct(){
        $this->name = '';
        $this->street = '';
        $this->city = '';
        $this->state = '';
        $this->zip = 0;
        $this->phone = '';
    }

    public function get_name(){
        return $this->name;
    }

    public function set_name(string $value) {
        $this->name = $value;
    }

    public function get_street(){
        return $this->street;
    }

    public function set_street(string $value) {
        $this->street = $value;
    }

    public function get_city(){
        return $this->city;
    }

    public function set_city(string $value) {
        $this->city = $value;
    }

    public function get_state(){
        return $this->state;
    }

    public function set_state(string $value) {
        $this->state = $value;
    }
    
    public function get_zip(){
        return $this->zip;
    }

    public function set_zip(int $value) {
        $this->zip = $value;
    }

    public function get_phone(){
        return $this->phone;
    }

    public function set_phone(string $value) {
        $this->phone = $value;

    }

    public function validate_phone($value) {
        $value = str_replace(array('(', ')', ('-'), (' ')), '', $value);
        $pattern = '/^\d{10}$/';
        $match = preg_match($pattern, $value);
        if($match == false){
            return false;
        }
        else{
            return true;
        }
    }
    public function validate_state($value){
        $states = ['AL','AK','AZ','AR','CA','CO','CT','DE','FL','GA','HI','ID',
                'IL','IN','IA','KS','KY','LA','ME','MD','MA','MI','MN','MS',
                'MO','MT','NE','NV','NH','NJ','NM','NY','NC','ND','OH','OK',
                'OR','PA','RI','SC','SD','TN','TX','UT','VT','VA','WA','WV',
                'WI','WY'];
        $validate = in_array($value, $states);
        if($validate == true){
            return true;
        }
        else{
            return false;
        }
    }

    public function validate_zip($value){
        $pattern = '/^\d{5}$/';
        $match = preg_match($pattern, $value);
        if($match == true){
            return true;
        }
        else{
            return false;
        }
    }
}