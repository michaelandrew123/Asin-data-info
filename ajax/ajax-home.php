<?php 

require('./../dbcon/conn.php'); 
 
$name=$_POST['name']; 
$name = preg_replace("#[^0-9a-z]i#","", $name); 

function setSearch($name, $mysqli){ 
    $message  = ''; 
    // $sql = $mysqli->query("SELECT * FROM asin Where asin_id LIKE '%$name%'") or die("Could not search"); 
    // while ($row = $sql->fetch_assoc()) {   
    //     echo "The result is: ". $row['asin_id']; 
    // }
    $sql_count = $mysqli->query("SELECT * FROM asin Where asin_id = '$name'") or die("Could not search"); 
    $count_row = $sql_count->fetch_row();  
    if($count_row[0] > 0){ 
        $message .= "<div style='color: red'><p>Asin ID already exist!</p></div>";  
    }else{  
        $message .= "<div style='color: orange'><p>The Asin ID is not exist</p></div>";
    } 

    return $message;
}

echo setSearch($name, $mysqli);
?>