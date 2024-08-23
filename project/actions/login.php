<?php

session_start() ;

$email = $_POST['email'];
$password = $_POST['password'];

if ($email === 'john.doe@gmail.com' and $password === 'waiyan1994') 
{
    $_SESSION['user'] = ['username' => 'john Doe'];
    header('location: ../profile.php');
}else {
    header('location: ../index.php?incorrect=1');
}



// u sers
// id – INT, Primary, AI
// name – VARCHAR (255)
// email – VARCHAR (255)
// phone – VARCHAR (255)
// address – TEXT
// password – VARCHAR (255)
// role_id – INT, Default (1)
// photo – VARCHAR (255), Null
// suspended – INT, Default (0)
// created_at – DATETIME
// updated_at – DATETIME, null
// စုစုပေါင်း Column (၁၁) ]ုပါဝင်ပါတယ်။ ထူးဖြ]ား]ျက်တစ်]ျို့ကို ပြောပြ]ျင်ပါတယ




// // $db = new PDO('mysql:dbhost=localhost;dbname=project','root','',[
// //     PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
// //     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
// // ]);

// // $statement = $db -> query("SELECT * FROM roles");
// // $result = $statement->fetchall();

// // print_r ($result);


// $db = new ('mysql:dbhost=localhost;dbname=project','root','',[
//     PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
//     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
// ]);

// $statement = $db -> qurey("SELECT * FROM roles");
// $result = $statement-fetch_all();

// // $row1 - $statement->fetch(); //can also be used for one line data


// print_r($result);

// $sql = "INSERT INTO roles (name,value) Values (:name,:value)";

// $statement = $db->prepare($sql);

// $statement->execute([
//     ':name' => 'God',
//     ':value' => 090
// ]);

// echo $db -> lastInsertId();






// $sql = "INSERT INTO roles (name,value) Values (:name,:value)";

// $statement = $db->prepare($sql);
// $statement -> execute ([
//     ':name' => 'God',
//     ':value' => 888
// ]);

// echo $db->lastInsertId();








// $sql = "UPDATE roles SET name = :name WHERE value = 999";
// $statement = $db -> prepare($sql);
// $statement->execute([
//     ':name' => 'Superman'
// ]);

// echo $statement->rowCount();

// $sql = "UPDATE roles SET name = :name WHERE value = 999";
// $statement = $db ->prepare($sql);
// $statement ->execute([
//     ':name' => 'Superman'
// ]);

// $sql = "DELETE FROM roles WHERE id  > 3 ";

// $statement = $db->prepare($sql);
// $statement-> execute();

// echo $statement->rowCount();