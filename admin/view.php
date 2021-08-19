<?php
require "./includes/top.php";


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
?>

<h2>View Quotes</h2>
<div class="addNewQuotes">
   
    <form method="post" enctype="multipart/form-data">

    <label for="quote">Quote</label>
    <textarea disabled   name="quote" id="quote" cols="50" rows="5"><?php echo$quotes?></textarea>
    <br>
    <label for="image">Images</label>
    
    <input accept="image/*" disabled  type="file" name="image" id="image">
    <br>
    <label for="writtenBy">By</label>
    
    <input disabled  type="text" value="<?php echo$quote_by?>" name="writtenBy" id="writtenBy">
    <br>
    
    </form>
</div>


<?php
  include "./includes/footer.php";
  ?>