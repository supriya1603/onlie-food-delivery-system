<?php
$con = mysqli_connect('localhost','root');

if (!$con) {
    ?>
    <script type="text/javascript">
        alert('Error: Unable to connect to the database');
    </script>
    <?php
}
 
mysqli_select_db($con, 'dream');
if (isset($_POST['insert'])) {
    $fullname = $_POST['fullname'];
    $foodname = $_POST['foodname'];
    $phone = $_POST['phone'];
    $foodtype = $_POST['foodtype'];
    $quantity = $_POST['quantity'];
    $address = $_POST['address'];

    $query = " INSERT INTO `orders`(`fullname`,`foodname`,`phone`,`foodtype`,`quantity`,`address`) VALUES ('$fullname','$foodname','$phone','$foodtype','$quantity','$address') ";


    $iquery = mysqli_query($con,$query);
}

if ($iquery) {
    ?>
    <script>
        alert("Thanks for your response..!!");
        window.location.replace("index.php");
    </script>
    <?php
    }else{
        ?>
        <script>
            alert("Please try again ");
        </script>
        <?php
    }

 ?>