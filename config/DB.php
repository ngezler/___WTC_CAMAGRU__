<?php
include 'init.php';

class DB {
    private static $_instance = null; // stores the instace of the database checks if it is available or not
    private $_pdo, //connect pdo objec
            $_query,// last query executed
            $_error = false, //
            $_results, //store results
            $count = 0; // count of results

 private function _construct(){
     try
     {
        print 'connecting to db';
        $this->_pdo = new PDO('mysql:host='.Config::get('mysq;/host'),';dbname'.Config::get('mysql/db'), Config::get('mysql/username'), Config::get('mysql/password') array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
        print "connecting to db";
     }
     catch(PDOException $e)
     {
         echo 'can not connect to database';
        die($e->getMessage());
     }
 }
 public static function getInstance(){
     if (!isset(self::$_instance))
     {
         self::$_instance = new DB();
     }
     return self::$_instance;
 }

 //generic db query function
    public function query($sql, $params = array())
     {
     $this->_error = false;
     //check if the query has been prepare sucessfully
        if($this->_query = $this->_pdo->prepare($sql))
         {
             $x = 1;
              if(count($params))
             {
                foreach($params as $param)
                 {
                     $this->query->bindValue($x, $param);
                     $x++;
                  }
              }

             if($this->query->execute()){
              $this->_results = $this->fetchAll(PDO::FETCH_OBJ);
              $this->_count = $this->_query->rowCount();
             }else{
                 $this->_error = true;
             }
     }
     return $this;
  }
  //creating the ability to get and delete the data in the database
  public function action($action, $table, $where = array()){
    //check the count if id equal to 3
    if(count($where) === 3){
        $operators = array('=', '<', '>', '>=', '<=');

        $field = '$where[0]';
        $operator = '$where[1]';
        $value = '$where[2]';

        if(in_array($operator, $operators)){
            $sql = "{$action} FROM {$table} WHERE {$field} ?";
            if(!$this->query($sql, array($value))->error){
                return $this;
            }
        }
        return false;
    }
  }

  public function get($table, $where){
    return $this->action('SELECT *', $table, $where);
  }

  public function delete($table, $where){
    return $this->action('DELETE', $table, $where);
  }

  public function insert($table, $field = array()){
    if(count($field)){
        $keys = array_keys($fields);
        $values = '';
        $x = 1;

        foreach($fields as $field){
            $values .= '?';
            if($x < count($fields)){
                $values .= ', ';
            }
            $x++;
        }


        $sql = "INSERT INTO users (`". implode('`, `', $keys) ."`) VALUES ({$values})";

        if(!$this->query($sql, $fields)->error){
            return true;
        }
    }
    return false;
  }

  public function update($table, $id, $fields){
      $set = '';
      $x = 1;

      foreach($fields as $name => $value){
          $set.="{$name} = ?";
          if($x < count($fields)){
              $set .=', ';
          }
          $x++;
      }

      $sql = "UPDATE {$table} SET {$set}  WHERE id = $id";

      if ($this->query($sql, $field)->error()){
            return true;
      }
      return false;
  }

  public function results(){
      return $this->_results;


  public function first(){
      return $this->results()[0];
  }

  public function count(){
      return $this->_count;
  }

  public function error(){
      return $this->_error;
  }
}
?>
