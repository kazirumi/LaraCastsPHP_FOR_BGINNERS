<?php

// connect data base MySQL and execute query
class Database{
    public $connection;
    public $statement;
    public function __construct($config,$username='root',$password=''){

        $dsn="mysql:".http_build_query($config,'',';');

        $this->connection =new PDO($dsn,$username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query,$params=[]){

        $this->statement =$this->connection->prepare($query);
        $this->statement->execute($params);
        return  $this;
    }

    public function  fetch(){
       return $this->statement->fetch();
    }

    public function  getAll(){
        return $this->statement->fetchAll();
    }

    public function  findOrFail(){
        $result = $this->statement->fetch();

        if (! $result){
            abort();
        }

        return $result;
    }
}