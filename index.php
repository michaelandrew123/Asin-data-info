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
        $html_ .= "<option value='". ($count+1)."'>". ($count+1) ."</option> </select>";  
        return $html_;  
        //compact(array)
    }
?>


<!doctype html>
    <head>
        <title></title>
    </head> 
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        body{
            padding: 0;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }
        .container{ 
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }
        section{
            position: absolute; 
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
    </style>
    <body>
        <div class="container">
        
            <section> 
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
            </section>

        </div>
    </body>
</html>