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
    </head> 
    <body>
        <h1>View all data </h1>
        <h3>Day: <?php echo $_SESSION["last_id"];?></h3> 


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
    </body>
</html>