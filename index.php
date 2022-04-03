<?php   include("./inc/header.php");  ?>

<main>   
    <?php
        
        try {
            $stmt = $conn->prepare("SELECT * FROM users");
            $stmt->execute();

            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                $data = $row[0] . "\t" . $row[1] . "\t" . $row[2] . "\n";
                print $data;
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



