<?php  
    require('dbcon/conn.php'); 

    $message = "";
    // $mysqli->set_charset(charset: 'utf8');   


 
    if(array_key_exists('submit', $_POST)){
        $sql = $mysqli -> query("SELECT * FROM asin WHERE asin_id='". $_POST['asin']."'");
     
        if($sql->num_rows > 0){
            $message .= "<div style='color: red'><p>Asin ID already exist!</p></div>"; 
        }else{ 
           $success = $mysqli -> query("INSERT INTO Asin (asin_id, price, storefront_id) VALUES ('".$_POST['asin']."',". $_POST['price'] .",". $_SESSION['last_id'] .")");
            if($success){
                $message .= "<div style='color: green'><p>Success insert the data </p></div>";
                $message .= "<p><label> Asin: ".$_POST['asin']."</label><br> <label>Price: ". $_POST['price']. "</label></p>";
            }
        
        } 
    } 


    require('xlsx/xlsxwriter.php'); 
    $h = ['data1'=>'string2', 'data2'=>'string2']; 
    $w = new XLSXWriter(); 
    $w->writeSheetHeader('sheet1', $h);
    $sql = $mysqli -> query("SELECT * FROM asin WHERE storefront_id=". $_SESSION['last_id']); 
    while ($obj = $sql -> fetch_assoc()) {
         //echo $obj->asin_id . ' ' .$obj->price; 
         $w->writeSheetRow('Sheet2', $obj);
    } 
    $w->writeToFile('ex.xlsx'); 
    $sql -> free_result(); 
    $last_id = $_SESSION['last_id'];

    function countAsin($mysqli, $last_id){ 
        $sql_count =  $mysqli -> query("SELECT count(*) FROM asin WHERE storefront_id=". $last_id);
        $count_row = $sql_count->fetch_row(); 
        return $count_row[0];
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
            margin: auto;
            border: 0px;
            text-align: center;
            justify-content: center; 
        }
        .sub-container{
            position: absolute;
            top: 50%;
            left: 50%;   
            margin-right: -50%;
            transform: translate(-50%, -50%);
        }
        section{
            text-align: left;
            width: 100%;
        }
        form{
            margin: 10px 0px;
            padding: 10px 0px;
        }
        a{
            text-decoration: none;
            font-weight: 400;
            font-size: 14px; 
        }
        p{
            font-weight: 400;
            font-size: 14px;
        }
        input[type=text],
        input[type=number] {
            width: 100%;
            padding: 7px 10px;
            margin: 8px 0;
            box-sizing: border-box;
        } 
        p > input[type="submit"]{
            float: left;
            cursor: pointer;
        }

        p > button#clear_{
            float: right;
            cursor: pointer;
        }
 
        .alert-danger{ 
            background-color:red; /* Red */
            color: white;
            justify-content: space-around;
            border: none;
            padding: 10px 20px;
            box-shadow: none; 
        }  
        .alert-primary{ 
            background-color: rgb(88, 101, 223) ;  
            color: white;
            justify-content: space-around;
            border: none;
            padding: 10px 20px;
            box-shadow: none; 
        }
        .alert-success{

        }
    </style>
    <body>
        <div class="container">
            <div class="sub-container">
                <section> 
                    <h1>Insert Into Excel </h1>
                    <h3>Day: <?php echo $_SESSION["last_id"];?><h3>
                
                    <p>
                        <span>Total Asin for today: <?php echo countAsin($mysqli, $last_id); ?></span>
                    </p>     

                    <div id="alert-message">  
                        <?php echo $message; ?>
                    </div>
 
                    <form action="#" id="form_"method="post">
                        <p>
                            <label>Asin</label>
                            <input type="text" name="asin" required id="asin_" placeholder="Input Asin Here">
                        </p>
                        <p>
                            <label>Price</label>
                            <input type="number" step="0.01" required name="price" placeholder="Input Price here">
                        </p> 
                        <p>
                            <input type="submit" name="submit"  class="alert-primary" value="Submit">
                        </p>
                        <p> 
                            <button id="clear_" class="alert-danger">Clear</button>
                        </p>
                    </form>
                    <br>
                    <div>                    
                        <p>    
                            <a href="./view.php">View All Data</a>
                        </p>
                    </div>
                </section>

            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <script src="./js/index.js" ></script>
    </body>
</html>