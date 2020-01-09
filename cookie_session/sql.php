<?php
class mydb
{
    private $server;
    private $user;
    private $passwd;
    private $dbname;

    function __construct($server, $user, $passwd, $dbname = null)
    {
        $this->server = $server;
        $this->user = $user;
        $this->passwd = $passwd;
        $this->dbname = $dbname;
    }

    public function connect()
    {
        $conn = new mysqli($this->server, $this->user, $this->passwd, $this->dbname);
        if ($conn->connect_errno) {
            return $conn->connect_error;
        } else {
            return $conn;
        }
    }
    public function insert()
    {
        $conn = new mydb($this->server, $this->user, $this->passwd, $this->dbname);
        $conn->connect();
        echo "connect";
        
    }
}

class CRUD extends mydb{
    
    private $table_name;


    public function insertDB($table_name){
        $this->table_name = $table_name;

    }

    }
?>
<!DOCTYPE html>
<html>

<body>
    <?php
    $test = new mydb('localhost','webadmin','1234','mydb');
    $test->insert();
    ?>

</body>

</html>