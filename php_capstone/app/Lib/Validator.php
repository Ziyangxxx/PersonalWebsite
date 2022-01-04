<?php

namespace App\Lib;

class Validator
{
    private $post = [];
    private $errors = [];

    public function __construct($array)
    {
        $this->post = $array;
    }

    /* VALIDATION METHODS
    ----------------------------------------------------------*/

    /**
     * Validate required elements in an array
     * @param array $required array of required keys
     */
    public function required($required)
    {
        foreach($required as $key) {
            if (empty($this->post[$key])) {
                $this->errors[$key][] = $this->label($key) . " is a required field.";
            }
        }
    }

    /* UTILITY METHODS
    ----------------------------------------------------------*/

    /**
     * Validate street name
     * @param string $field
     * @return void
     */
    function street($field)
    {
        $string = $this->post[$field];
        // This regex is from : https://regexlib.com/
        $pattern = '/^(\d{3,})\s?(\w{0,10})\s([a-zA-Z]{2,30})\s([a-zA-Z]{2,15})\.?\s?(\w{0,5})$/';
  
        if(preg_match($pattern, $string) === 0){
            $this->errors[$field][] = "Invalid street name.";
        }

    }

    /**
     *  Validate illegal character
     * @param string $field
     * @return void
     */
    function legal($field)
    {
        $string = $this->post[$field];

        $pattern = '/^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/';

        if(!preg_match($pattern, $string)){
            $this->errors[$field][] = "No illegal characters allowed.";
        }

    }

    /**
     * Validate length
     * @param string $field
     * @param  int $min 
     * @param  int $max  
     * @return void
     */
    function len($field, $min, $max)
    {
        $string = $this->post[$field];

        if (strlen($string) < $min) {
            $this->errors[$field][] = $this->label($field) . " name is too short.";
        } elseif (strlen($string) > $max) {
            $this->errors[$field][] = $this->label($field) . " name is too long.";
        }

    }

    /**
     * Validate password strength
     * @param string $field1
     * @param string $field2
     * @return void
     */
    function strongPasswd($field1, $field2)
    {
        $passwd = $this->post[$field1];
        $passwdcon = $this->post[$field2];
        $uppercase = preg_match('@[A-z]@', $passwd);
        $lowercase = preg_match('@[a-z]@', $passwd);
        $number = preg_match('@[0-9]@', $passwd);
        if(!$uppercase || 
           !$lowercase || 
           !$number || 
           strlen($passwd) < 8){
            $this->errors[$field1][] = $this->label($field1) . " should be at 
            least 8 characters and should include at least one upper case letter, 
            and one number.";
           }
    }

    /**
     * Validate two values match
     * @param string $field1
     * @param string $field2
     * @return void 
     */
    function matches($field1, $field2)
    {
        $passwd = $this->post[$field1];
        $passwdcon = $this->post[$field2];
        if ($passwd != $passwdcon) {
            $this->errors[$field2][] = $this->label($field1) . " does not match.";
        }
    }

    /**
     * Validate postal code
     * @param string $field
     * @return void
     */
    function postalcode($field)
    {
        // This regex is from : https://regexlib.com/
        $pattern = '/^([A-Za-z]\d[A-Za-z]\s?\d[A-Za-z]\d)/i';
        $pcode = $this->post[$field];
        if(preg_match($pattern, $pcode) === 0){
            $this->errors[$field][] ="Invalidate postal code format.";
        };
    }

    /*
     * Validates a north american phone number
     * @param  string $field 
     * @return void 
     *
    function num($field)
    {
        $phone = $this->post[$field];
        // This regex is from : https://regexlib.com/
        $pattern = '/^[2-9]\d{2}-\d{3}-\d{4}$/g';

        if(!empty($phone)) {
            if ($phone !== $pattern) {
                $this->errors[$field][] = $this->label($field) . " must be a validate number.";
            } 
        }
    }
    */

    /**
     * Email validator
     * @param  string $field 
     * @return void 
     */
    public function email($field)
    {
        $email = $this->post[$field];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field][] = $this->label($field) . " must be a valid email address.";
        }
    }

    /**
     * Validate if email exists
     * @param string $field
     * @return void
     */
    public function sameEmail($field, $dbh)
    {
        $new_email = $this->post[$field];

        $query = 'SELECT email FROM users';
        $stmt = $dbh->prepare($query);
        $params = array(
            ':email' => $_POST['email']
        );
        $stmt->execute($params);
        $db_email=$stmt->fetch(\PDO::FETCH_ASSOC);

        if(count(array_search($new_email, $db_email)) > 0){
            $this->errors[$field][] = $this->label($field) . " already exists.";
        }


    }


    /**
     * [label description]
     * @param [type] $str
     * @return [type] 
     */
    private function label($str)
    {
        return ucwords( str_replace('_',' ', $str) );
    }

    /**
     * Get post array
     */
    public function post()
    {
        return $this->post;
    }

    /**
     * Get errors array
     */
    public function errors()
    {
        return $this->errors;
    }
}