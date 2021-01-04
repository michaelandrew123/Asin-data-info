<?php 
require('dbcon/conn.php');   

if(array_key_exists('update', $_POST)){  

    $modiied=$mysqli->query("UPDATE asin SET asin_id='". $_POST['update_asin_id']. "', price=".$_POST['update_price'] . "WHERE id=".$_GET['id']);
    if($modiied){
        echo "Successfuly update";
    }

}
?>

<!doctype html>
    <head>
        <title></title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <style>
            body{
                padding: 0;
                margin: 0;
                font-family: 'Poppins', sans-serif;
            }


        </style>
    </head> 
    <body>
        <div class="container">
            <section> 
                <h1>Update Data</h1>
                <h3>Day: <?php echo $_SESSION["last_id"];?></h3> 

                <a href="./home.php">Go to home page</a>
                <table>
                    <thead> 
                        <th>Asin ID</th>
                        <th>Price</th> 
                        <th>Action</th>
                    </thead>
                    <tbody>
                    
                        <?php  
                            $sql_view = $mysqli -> query("SELECT * FROM asin WHERE id=". $_GET['id']); 
                            while ($row = $sql_view->fetch_assoc()) { 
                        ?>
                            <tr>  
                                <form action="#" method="POST">
                                    <td>
                                        <input type="text" value="<?php echo $row["asin_id"]; ?>" name="update_asin_id" >
                                    </td>
                                    <td> 
                                        <input type="number" step="0.01" value="<?php echo $row["price"]; ?>" name="update_price" >
                                    </td>
                                    <td>
                                        <input type="hidden" name="update_id" value="<?php echo $_GET['id']; ?>" />
                                        <input type="submit" name="update" value="Update"/> 
                                    </td> 
                                <form> 
                            </tr>
                        <?php } ?>  
                    </tbody>

                </table> 
                
            </section>
        </div>
    </body>
</html>