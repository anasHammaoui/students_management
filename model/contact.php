    <?php
    function addContactinfo($conn, $lastName, $firstName, $number, $message) {
    try {
        $sql = "INSERT INTO contact (LastName, FirstName,message, number)
        VALUES (?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$lastName, $firstName, $message, $number]);
        return true;
        } catch(PDOException $e) {
        echo $e->getMessage();
        return false;
        }
    }