<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewpoint" content="width = device-width,initial-scale=1.0">
    <title>Travel Bee About</title>
    <link rel="icon" href="include/logo_main.png">
    <link rel="stylesheet" href="payment.css">
    <script src="https://kit.fontawesome.com/d58fc99c02.js" crossorigin="anonymous"></script>
     <script>

        function check1() {
            else if (document.getElementById('1').value === "") {
                alert('please fill your form');
                return false;

            }else if (document.getElementById('2').value === "") {
                alert('please fill your form');
                return false;

            }else if (document.getElementById('3').value === "") {
                alert('please fill your form');
                return false;

            }

        }
        function check() {
            if (document.getElementById('first_name').value === "") {
                alert('please fill your form');
                return false;
            } else if (document.getElementById('last_name').value === "") {
                alert('please fill your form');
                return false;
            } else if (document.getElementById('password').value === "") {
                alert('please fill your form');
                return false;

            } else if (document.getElementById('password1').value === "") {
                alert('please fill your form');
                return false;

            } else if (document.getElementById('email').value === "") {
                alert('please fill your form');
                return false;

            } else if (document.getElementById('number').value === "") {
                alert('please fill your form');
                return false;

            } else if (document.getElementById('address').value === "") {
                alert('please fill your form');
                return false;

            } else if (document.getElementById('postel_code').value === "") {
                alert('please fill your form');
                return false;

            }

        }
    </script>
</head>
<body>
<div class="wrapper">
    <div class="title">
        Registration Form
    </div>
    <form action="form.php" method="post" onsubmit="return check()">
        <div class="inputfield">
            <label>First Name</label>
            <input type="text" class="input" name="first_name" id="first_name">
        </div>
        <div class="inputfield">
            <label>Last Name</label>
            <input type="text" class="input" name="last_name" id="last_name">
        </div>
        <div class="inputfield">
            <label>Password</label>
            <input type="password" class="input" name="password" id="password">
        </div>
        <div class="inputfield">
            <label>Confirm Password</label>
            <input type="password" class="input" name="password1" id="password1">
        </div>
        <div class="inputfield">
            <label>Gender</label>
            <div class="custom_select">
                <select id="male-femail">
                    <option value="">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
        </div>
        <div class="inputfield">
            <label>Email Address</label>
            <input type="text" class="input" name="email" id="email">
        </div>
        <div class="inputfield">
            <label>Phone Number</label>
            <input type="text" class="input" name="number" id="number">
        </div>
        <div class="inputfield">
            <label>Address</label>
            <textarea class="textarea" name="address" id="address"></textarea>
        </div>
        <div class="inputfield">
            <label>Postal Code</label>
            <input type="text" class="input" name="postel_code" id="postel_code">
        </div>
        <div class="inputfield terms">
            <label class="check">
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
            <p style="color: #090909">Agreed to terms and conditions</p>
        </div>
        <div class="inputfield">
            <input type="submit" value="Register" class="btn">
        </div>
    </form>
</div>


 <span class="booknow">
        <a class="act" href="../../../MAIN.html"><i class="fa-solid fa-house"></i> Home</a>
        <a class="act" href="../../update/form-main.php"><i class="fa-solid fa-wrench"></i> update</a>
    </span>

  <div class="container">
      <h1>Double Check Your Details Before Order</h1>
      <a class="act" href="../../update/form-main.php"><i class="fa-solid fa-wrench"></i> Update</a>
        <h1>Confirm Your Payment</h1>
        <div class="first-row">
            <div class="owner">
                <h3>Owner</h3>
                <div class="input-field">
                    <input type="text"id ="1">
                </div>
            </div>
            <div class="cvv">
                <h3>CVV</h3>
                <div class="input-field">
                    <input type="password"id ="2">
                </div>
            </div>
        </div>
        <div class="second-row">
            <div class="card-number">
                <h3>Card Number</h3>
                <div class="input-field">
                    <input type="text"id ="3">
                </div>
            </div>
        </div>
        <div class="third-row">
            <h3>Year</h3>
            <div class="selection">
                <div class="date">
                    <select name="months" id="months">
                        <option value="Jan">Jan</option>
                        <option value="Feb">Feb</option>
                        <option value="Mar">Mar</option>
                        <option value="Apr">Apr</option>
                        <option value="May">May</option>
                        <option value="Jun">Jun</option>
                        <option value="Jul">Jul</option>
                        <option value="Aug">Aug</option>
                        <option value="Sep">Sep</option>
                        <option value="Oct">Oct</option>
                        <option value="Nov">Nov</option>
                        <option value="Dec">Dec</option>
                      </select>
                      <select name="years" id="years">
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                      </select>
                </div>
                <div class="cards">
                    <img src="1.png" alt="">
                    <img src="2.png" alt="">
                    <img src="3.png" alt="">
                </div>
            </div>
        </div>
        <a href="../../last/last.html" onclick="return check1()">Confirm</a>
    </div>
    




</body>
</html>