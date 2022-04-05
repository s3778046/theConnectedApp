<?php   include("./inc/header.php");  ?>
<main>   
    <?php

        try {
            $sql ='SELECT * FROM users';
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $users = $stmt->fetchAll();
            
  
           foreach($users as $user) {
                $fname = $user['fname'];
                $lname = $user['lname'];
               echo "$fname " . "$lname" . "<br>";
           }
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
        echo "</table>";
    ?>
</main>
<?php   include("./inc/footer.php");  ?>



