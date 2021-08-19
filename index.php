
<?php
include "db.con.php";
if($conn){
    
    $query="select * from quote_table order by rand() limit 1";

    $result=mysqli_query($conn,$query);

    if($result!=null){

        $row=mysqli_fetch_assoc($result);

       

    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes</title>
</head>
<body>

        
<h2>Quotes of the Day</h2>
<article class="article">

	
	<blockquote>
		<p><?php echo$row['quotes']?></p>
		<cite><?php echo$row['quote_by']?></cite>
		<div class="blockquote-author-image" style="--image: url('./admin/image/<?php echo$row['images']?>')"></div>
	</blockquote>


	
	

	


	
	
</article>







<script src="./script.js"></script>

</body>
</html>