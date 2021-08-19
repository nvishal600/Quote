<?php
require "./includes/top.php";
if($conn){
    $query="select * from quote_table";
    $res=mysqli_query($conn,$query);
    if(mysqli_num_rows($res)>0){
        
        
        

        

    }
    else{
        echo"No Data Found";
    }


}
if(isset($_GET['update'])){
    if($_GET['update']==10){
        echo"<h1 style='color:green'>Quote Update Successfully!!!</h1>";

    }

}
if(isset($_GET['delete'])){
    if($_GET['delete']==10){
        echo"<h1 style='color:red';margin-bottom:10px>Quote Delete Successfully!!!</h1>";

    }

}
?>
           <table  border="1" cellspacing="0">
                <thead>
                    <tr >
                        <th>No</th>
                        <th>Quotes</th>
                        <th>Quote Image Link</th>
                        <th>Manage</th>
                    </tr>
                </thead>
                <tbody >
                    <?php
                    $count=1;
                    while($row=mysqli_fetch_assoc($res))
                    {
                        
                        ?>
                    <tr>
                        <td ><?php echo$count?></td>
                        <td><?php echo$row['quotes']?></td>
                        <td><img width="50px" src="./image/<?php echo$row['images']?>" alt="images"></td>
                        <td style="position:relative"><ul style="list-style:none">
                            <li style="position:absolute;right:60%;top:35%"><a href="view.php?id=<?php echo$row['id']?>">View</a></li>
                            <li><a style="position:absolute;right:40%;top:35%" href="delete.php?id=<?php echo$row['id']?>">Delete</a></li>
                            <li><a style="position:absolute;top:35%" href="new_quotes.php?id=<?php echo$row['id']?>">Edit</a></li>
                        </ul></td>
                    </tr>
                    <?php
                    $count++;
                 } ?>
                  
                </tbody>
           </table>

            </div>


           
            
  <?php
  include "./includes/footer.php";
  ?>