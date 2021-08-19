<?php
require "./includes/top.php";
$msg="";
if($conn){
    $query="select * from quote_table";
    $res=mysqli_query($conn,$query);
    if(mysqli_num_rows($res)>0){

        $msg=mysqli_num_rows($res);
        
        
        

        

    }
    else{
        $msg="No Quotes";
    }

}
?>
            <div class="total">
                <?php echo$msg?>
            </div>
            <h4 style="font-size:20px;";>Total Quotes Added</h4 style="font-size:20px;";>
            </div>
            
            <?php
  require "./includes/footer.php";
  ?>