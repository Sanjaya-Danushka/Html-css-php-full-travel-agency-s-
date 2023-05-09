<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Bee registration</title>
    <link rel="icon" href="include/logo_main.png">
    <link rel="stylesheet" href="update.css">
    <script>
        function check() {
            if (document.getElementById('1').value === "") {
                alert('please fill your form');
                return false;
            } else if (document.getElementById('2').value === "") {
                alert('please fill your form');
                return false;
            } else if (document.getElementById('3').value === "") {
                alert('please fill your form');
                return false;

            } else if (document.getElementById('4').value === "") {
                alert('please fill your form');
                return false;

            } else if (document.getElementById('5').value === "") {
                alert('please fill your form');
                return false;

            } else if (document.getElementById('6').value === "") {
                alert('please fill your form');
                return false;

            } 
        }
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="title">
            Security Option
        </div>
        <p>@---please enter Your email first</p>
        <form action="" method="post">


            <div class="inputfield">
                <label>Email Address</label>
                <input type="text" class="input" name="id" id="id">
            </div>


            <div class="inputfield">
                <input type="submit" value="Search" class="btn" value="search-data">
            </div>
        </form>
    </div>

    <?php
    if (isset($_POST['id'])) {

        session_start();
        $con = mysqli_connect('localhost','root','');

        mysqli_select_db($con,'travelbee');

        $name = $_POST['id'];
        $s = "select * from data where email ='$name'";


        $result = mysqli_query($con,$s);

        $num = mysqli_num_rows($result);

        if($num == 1){
            if (mysqli_num_rows($result) > 0) {
            }
            ?>
            
            <?php
            $i=0;
            while($row = mysqli_fetch_array($result)) {
                ?>
                <div class="wrapper">
                 <div class="title">
                    Update
                </div>
                <form action="last.php" method="post" onsubmit="return check()">
                    <div class="inputfield">
                        <label>First Name</label>
                        <input type="text" name="first_name"id = "1" class="input" value="<?php echo $row['fname'] ?>">
                    </div>
                    <div class="inputfield">
                        <label>Last Name</label>
                        <input type="text" class="input" name="last_name"id = "2" value="<?php echo $row['lname'] ?>">
                    </div>
                    <div class="inputfield">
                        <label>Password</label>
                        <input type="password" class="input" id = "3" name="password" value="<?php echo $row['password'] ?>">
                    </div>
                    <div class="inputfield">
                        <label>Email</label>
                        <input type="hidden" class="input" name="email" value="<?php echo $row['email'] ?>">
                    </div>
                    <div class="inputfield">
                        <label>Phone Number</label>
                        <input type="text" class="input" name="number"id = "4" value="<?php echo $row['number'] ?>">
                    </div>
                    <div class="inputfield">
                        <label>Address</label>
                        <input type="text" class="input" name="address"id = "5" value="<?php echo $row['address'] ?>">
                    </div>
                    <div class="inputfield">
                        <label>Postal Code</label>
                        <input type="int" class="input" name="postel_code" id = "6" value="<?php echo $row['post'] ?>">
                    </div>
                    <div class="inputfield">
                        <input type="submit" value="update" class="btn">
                    </div>
                </form>
            </div>
            <?php
            $i++;
        }
        ?>
    </table>
    <?php
}



}else{
   echo "No result found";

}


?>


</body>
</html>