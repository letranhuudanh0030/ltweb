<?php
class DB
{
    public $conn;
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "ltweb_mvc";

    function __construct()
    {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->conn, $this->dbname);
        mysqli_query($this->conn, "SET NAMES 'utf8'");
    }

    public function select($select, $table, $condition = array(), $sort = array())
    {
        $where = [];
        $order_by = [];
        $sql = "SELECT $select FROM $table";
        if($condition){
            foreach ($condition as $key => $value) {
                if(!is_string($value) || $value == 'true' || $value == 'false'){
                    $where[] = "$key = $value";
                } else {
                    $where[] = "$key = \"$value\"";
                }
            }
            $where_values = implode(' AND ', $where);
            $sql .= " WHERE $where_values";
        }

        if($sort){
            foreach ($sort as $key => $value) {
                $order_by[] = "$key $value";
            }
            $order_by_values = implode(' , ', $order_by);
            $sql .= " ORDER BY $order_by_values";
        }
        // pre($sql);
        $result = mysqli_query($this->conn, $sql);
        return $result;
        
    }


    public function insert($table, $data = array())
    {
        $columns = implode(", ",array_keys($data));
        $arr_value = array_values($data);
        $escaped_values = [];
        foreach ($arr_value as $value) {
            $escaped_values[] = "'$value'";
        }
        $values  = implode(", ", $escaped_values);
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";
        // pre($qr);
        $result = mysqli_query($this->conn, $sql);
        if($result){
            return true;
        }
        return false;
    }

    public function updateWhere($table, $data = array(), $condition = array())
    {
        $set = [];
        $where = [];

        foreach ($data as $key => $value) {
            if(!is_string($value) || $value == 'true' || $value == 'false'){
                $set[] = "$key = $value";
            } else {
                $set[] = "$key = \"$value\"";
            }
        }

        foreach ($condition as $key => $value) {
            if(!is_string($value) || $value == 'true' || $value == 'false'){
                $where[] = "$key = $value";
            } else {
                $where[] = "$key = \"$value\"";
            }
        }
        $set_values = implode(", ", $set);
        $where_values = implode(" AND ", $where);
        $sql = "UPDATE $table SET $set_values WHERE $where_values";
        $exec_update = mysqli_query($this->conn, $sql);
        if($exec_update){
            $result_sql = "SELECT * FROM $table WHERE $where_values";
            $exec_result = mysqli_query($this->conn, $result_sql);
            $result = $exec_result->fetch_assoc();
        }
        // pre($this->conn->error);
        return $result;
    }

    public function delete($table, $id)
    {
        $sql = "DELETE FROM $table WHERE id=$id";
        $result = mysqli_query($this->conn, $sql);
        // $result = true;
        if($result){
            return true;
        }
        return false;
    }
    

}

?>