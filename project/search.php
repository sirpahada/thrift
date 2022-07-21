<?php //search input vayechu eta aaucha
$search= $_POST['search'];

include 'db.php';
$search= preg_replace("#[^a-z]#i","",$search);
$query= mysqli_query($conn,"SELECT * FROM ads WHERE ad_title LIKE '%$search%'") or die("couldnt search");
$count= mysqli_num_rows($query);
if($count==0){
    echo "Can't find what you are searching for?";

}
else{
    while($row = mysqli_fetch_array($query)){
        $name= $row['ad_title'];
        $price= $row['price'];
        $description= $row['description'];
        $image= $row['image'];
        $contact= $row['contact'];


        echo '<div class="box">
        <div class="imgBox">
            <img src="./'.$image.'">
        </div>
        <div class="details">
            <div class="content">
        <h2>'.$name.'</h2>
        <p>Rs '.$price.'<br>
            '.$description.'
        </p></div>
        </div>
        <div class="buy">
            <a href="tel:'.$contact.'" >
                <button>'.$contact.'</button>
            </a>
        </div>
    </div>'; 
    }
}





?>