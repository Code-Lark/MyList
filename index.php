<?php
require_once("./config.php");
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<table style='border: solid 1px black;'>";
    echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";
     
    
    $sql ='select * from incident';
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare($sql); 

        if ($stmt->execute()) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $products[] = $row;
                // print_r($products);

                echo $products["id"];
                echo $products['incident'];
            
            }
        }
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn=null;
    ?>
</body>
</html>