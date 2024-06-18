<?php 

include 'Connection.php';

class Book extends Connection {   
    // connection ファイルへ継承する

    public function create($request){
        $title = $request['name'];
        $author = $request['author'];
        $genre = $request['genre'];

        $sql  = "INSERT INTO books (name,genre,author) VALUES('$title','$author','$genre')";
        if($this->conn->query($sql)){
            header('location:../views/create.php');
            exit;
        }else{
            die('Error creating book'. $this->conn->error);
        }

    }
    public function displayBooks(){
     $sql = "SELECT * FROM books";
     if($result = $this->conn->query($sql)){
        return $result;
     }else{
        die('Error loading books'. $this->conn->error);
     }
    }

    public function oneBook($id){
        $sql = "select * from books where id = $id";
        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die("ERROR loading books". $this->conn->error);
        }
    }

    public function update($request,$id){
        $title = $request['name'];
        $author = $request['author'];
        $genre = $request['genre'];

        $sql  = "UPDATE books SET  name = '$title', author = '$author', genre = '$genre' WHERE id = $id ";
        if($this->conn->query($sql)){
            header('location:../views/create.php');
            exit;
        }else{
            die('Error creating book'. $this->conn->error);
        }
    }
    public function delete(){
        
    }


}