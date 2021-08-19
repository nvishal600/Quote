<?php
if(isset($_GET['id']) && !empty($_GET['id'])){

    require "./includes/db.con.php";
    if($conn)
    {
        $id=mysqli_real_escape_string($conn,$_GET['id']);
        $res=mysqli_query($conn,"select * from quote_table where id='$id'");

        if($res!=null){

            if(mysqli_num_rows($res)>0){
                $result=mysqli_query($conn,"DELETE FROM `quote_table` WHERE id='$id'");

                if($result!=null){
                    header("location:view_all_quotes.php?delete=10");


                }

            }
            else{
                header("location:view_all_quotes.php?1");
            }


        }
        else{
            header("location:view_all_quotes.php?2");
        }


    }
    

}
else{
    header("location:view_all_quotes.php");
}
?>