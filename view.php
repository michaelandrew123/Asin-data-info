<?php 
require('dbcon/conn.php');   
$record_per_page = 5;
$page = ''; 
if(isset($_GET["page"])){
    $page = $_GET["page"];
}else{
    $page=1;
} 
$start_from = ($page-1)*$record_per_page; 
$sql_view = $mysqli -> query("SELECT * FROM asin ORDER BY id DESC LIMIT $start_from, $record_per_page"); 

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
            .container{
                margin-left: auto;
                margin-right: auto;
                padding-left: 15px;
                padding-right: 15px;
                justify-content: space-around;

            }
            section{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
            a{
                text-decoration: none; 
            }
            .page-section{
                margin: 10px 20px;  
                text-align:center;
                justify-content: space-around;  
            }
            .page-section > a{
                padding: 5px 10px;
                margin: 0px 5px;
                justify-content: space-around; 
                text-decoration: none;
                background-color: rgb(199, 184, 184);
            }
            table{
                width: 100%;
            }
            table, th, td{
                border: 1px solid rgb(199, 184, 184);
                border-collapse: collapse; 
            }
            th, td{
                padding: 15px;
            }
            input[type="text"]{
                width: 100%;
                padding: 7px 10px;
                margin: 8px 0px;
                box-sizing: border-box;
            }

            input[type="submit"]{
                justify-content: space-around;
                box-shadow: none;
                box-sizing: border-box;
                padding: 10px 20px;
                background-color: white;
                border: 1px solid #ccc;
            }
        </style>

    </head> 
    <body> 
        <div class="container">
            <section> 
                <h1>View all data </h1>
                <h3>Day: <?php echo $_SESSION["last_id"];?></h3>  
                <a href="./home.php">Go to home page</a>
                <div>
                    <h3>Filter Search</h3>
                     
                        <form> 
                            <p>
                                <input type="text" name="search" placeholder="search" /> 
                            </p>
                            <p>
                                <input type="submit" name="filter_search" value="Search" />
                            </p>    
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

                <div class="page-section">
                
                    <?php 
                        $page_query = $mysqli -> query("SELECT * FROM asin ORDER BY id DESC");
                        $total_records = $page_query -> fetch_row();
                        $total_pages = ceil($total_records[0]/$record_per_page);
                        $start_loop = $page;
                        $difference = $total_pages - $page;

                        if($difference <= 5){
                            $start_loop = $total_pages - 5;
                        }
                        $end_loop = $start_loop + 4;
                        if($page > 1){
                            echo "<a href='./view.php?page=1'>First</a>";
                            echo "<a href='./view.php?page=".($page - 1)."'><<</a>";
                        }
                        for($i=$start_loop; $i<$end_loop;$i++){
                            echo "<a href='./view.php?page=".$i."'>".$i."</a>";
                        }   
                        if($page <= $end_loop){
                            echo "<a href='./view.php?page=".($page + 1)."'>>></a>";
                            echo "<a href='./view.php?page=".$total_pages."'>Last</a>";
                        }
    
                    ?>
                </div>
            </section>
        </div>      
        

    </body>
</html>