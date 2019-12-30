<?php
    $dbname = 'searchdb';
    $dbuser = 'root';
    $dbpass = '';
    $dbhost = 'localhost';
    $db = null;
    $query = '';
    $result = array();
    
    try {
        $db = new PDO("mysql:dbname=" . $dbname . ";host=" . $dbhost, $dbuser, $dbpass);
    } catch (PDOException $error) {
        die($error->getMessage());
    }
    
//Rotina de busca
if(isset($_POST['btnSearch']) && !empty($_POST['search'])){
    $search = htmlspecialchars($_POST['search']);
    
    $query = "SELECT * FROM cidade WHERE nome LIKE '%{$search}%'";
    $query = $db->query($query);
    
    if ($query->rowCount() > 0){
        $result = $query->fetchAll();
    }
    return $result;
} else {
    $result = false;
    return $result;
}
    

