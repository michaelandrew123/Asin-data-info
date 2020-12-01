<?php  
    require('dbcon/conn.php'); 
    // $mysqli->set_charset(charset: 'utf8');   
    if(array_key_exists('submit_storefront', $_POST)){
       
          $result=$mysqli -> query("INSERT INTO storefront (storefront_name, day) VALUES ('".$_POST['storefront_name']."',". $_POST['day'] .")");
            if($result){  
                $_SESSION["last_id"]  = $mysqli->insert_id;

                header('location: ./home.php');
            }else{

            }
    }  

    function getDay($mysqli){ 
        $html_ = "";
        $count = 0;
        $html_ .= "<label>Day</label>
            <select name='day'> 
                <option value=''></option>"; 
        $sql_day = $mysqli->query("SELECT * FROM storefront"); 
        while($row = $sql_day->fetch_assoc()){ 
            $html_ .= "<option value='" . intval($row['day']) ."'>".intval($row['day']). "</option>";  
            $count = $count + 1; 
        }   
        $html_ .= "<option value='". $count."'>". ($count+1) ."</option> </select>";  
        return $html_;  
        //compact(array)
    }
?>


<!doctype html>
    <head>
        <title></title>
    </head> 
    <body>
        <h1>Register Storefront</h1>

        <form action="" method="post">
            <p>
                <label>Store Front Name</label>
                <input type="text" name="storefront_name" placeholder="Input Asin Here">
            </p>
            <p> 
            <?php
                echo getDay($mysqli);
            ?>
            </p> 
            <input type="submit" name="submit_storefront" value="Submit">
        </form>
    </body>
</html>