<?php
require "./includes/top.php";
$img_required="required";
$id="";
$quotes="";
$images="";
$quote_by="";

if(isset($_GET['success'])){
  if($_GET['success']==10){
    echo"<h1 style='color:green'>Quote Add Successfully!!!</h1>";

  }

}
if(isset($_GET['id']) && !empty($_GET['id'])){
  $img_required="";
  if($conn){
    $id=mysqli_real_escape_string($conn,$_GET['id']);

    $result=mysqli_query($conn,"SELECT * FROM `quote_table` WHERE id='$id';");
    if(mysqli_num_rows($result)>0){
      $data=mysqli_fetch_assoc($result);

      $id=$data['id'];
      $quotes=$data['quotes'];
      $images=$data['images'];
      $quote_by=$data['quote_by'];

    }
    else{
      header("location:view_all_quotes.php");
    }

  }

}
if(isset($_POST['submit']) && !empty($_POST['submit'])){
  
  if($conn){
    $quote=mysqli_real_escape_string($conn,$_POST['quote']);
    $writtenBy=mysqli_real_escape_string($conn,$_POST['writtenBy']);

    
    $picture=$_FILES['image'];
    $fileName=$picture['name'];
    $type=$picture['type'];
    $tmpName=$picture['tmp_name'];
    $fileError=$picture['error'];
    $fileSize=$picture['size'];

    if(isset($_GET['id']) && !empty($_GET['id'])){

      if($fileName!=""){
        $source=$picture['tmp_name'];
                
        //move file to destination
        $destination='./image/';
        $destinationFile=$destination."".$fileName;
        move_uploaded_file($source,$destinationFile);
        $update_query="UPDATE `quote_table` SET `quotes`='$quote',`images`='$fileName',`quote_by`='$writtenBy' WHERE id='$id'";

      }
      else{
        $update_query="UPDATE `quote_table` SET `quotes`='$quote',`quote_by`='$writtenBy' WHERE id='$id'";

      }
      mysqli_query($conn,$update_query);
      header("location:view_all_quotes.php?update=10");
     


    }
    else{
      $source=$picture['tmp_name'];
                
     //move file to destination
     $destination='./image/';
     $destinationFile=$destination."".$fileName;
     move_uploaded_file($source,$destinationFile);
      $query="INSERT INTO `quote_table`(`quotes`, `images`, `quote_by`) VALUES ('$quote','$fileName','$writtenBy')";

      $res=mysqli_query($conn,$query);

      if($res!=null){
        header("location:new_quotes.php?success=10");

      }
    }

  }


}
?>
 <h2>Add Quotes</h2>
<div class="addNewQuotes">
   
    <form method="post" enctype="multipart/form-data">

    <label for="quote">Quote</label>
    <textarea required  name="quote" id="quote" cols="50" rows="5"><?php echo$quotes?></textarea>
    <br>
    <label for="image">Images</label>
    
    <input accept="image/*" <?php echo$img_required?> type="file" name="image" id="image">
    <br>
    <label for="writtenBy">By</label>
    
    <input required type="text" value="<?php echo$quote_by?>" name="writtenBy" id="writtenBy">
    <br>
    <input type="submit" name="submit" value="Submit">
    </form>
</div>







<?php
  include "./includes/footer.php";
  ?>