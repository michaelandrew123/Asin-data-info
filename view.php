<?php 
require('dbcon/conn.php');  
?> 
<!doctype html>
    <head>
        <title></title>
    </head> 
    <body>
        <h1>View all data </h1>
        <h3>Day: <?php echo $_SESSION["last_id"];?></h3>  
        <a href="./home.php">Go to home page</a>
        <div>
            <h3>Filter Search</h3>
            <form> 
                <input type="text" name="search" placeholder="search" /> 
                <input type="submit" name="filter_search" value="Search" />
            </form> 
        </div>
        <table>
            <thead>
                <th>#</th>
                <th>Asin ID</th>
                <th>Price</th> 
                <th>Action</th>
            </thead>
            <tbody>
                <?php  
                    $sql_view = $mysqli -> query("SELECT * FROM asin ORDER BY id DESC"); 
                    while ($row = $sql_view->fetch_assoc()) { 
                ?>
                <tr>
                    <td>
                        <?php echo $row["id"]; ?>
                    </td>  
                    <td>
                        <?php echo $row["asin_id"]; ?>
                    </td>
                    <td>
                        <?php echo $row["price"]; ?>
                    </td>
                    <td>
                        <a href="./modified.php?id=<?php echo $row["id"]; ?>">Edit</a>
                        <from action="#" method="POST">
                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>" />
                            <input type="submit" name="delete" value="Delete"/>
                        <from> 
                    </td>
                </tr>
                <?php } ?>  
            </tbody>

        </table>
 

    </body>
</html>