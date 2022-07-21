<!--for pictures of goods-->
<div class="container">

    <?php
    include 'db.php';
    $sql = "SELECT * FROM ads";

    $result = mysqli_query($conn, $sql);

    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $name = $row['ad_title'];
            $price = $row['price'];
            $description = $row['description'];
            $image = $row['image'];
            $contact = $row['contact'];
            

            if (!$image)
            $image = './drafter.jpg';
        
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
</div><br>