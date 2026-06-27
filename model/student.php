    <?php
    include("../config/connection.php");

    $lastName = "benazza";
    $firstName = "Marouane";
    $age = 25;
    $studyField ="english" ;

        try {
        $sql = "INSERT INTO students (LastName, FirstName, Age,studyField)
        VALUES ('$lastName','$firstName',$age, '$studyField')";
        $conn->exec($sql);
        echo "New record created successfully";
        } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        }