<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
     .sign_up{
    width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    background-color: white;
    height: 80vh;
}

.s h2{
    text-align: center;
    font-weight: bold;
    font-family: 'Times New Roman';
    font-size: 30px;
}

.s p{
    font-family: 'Times New Roman';
    word-spacing: 2px;
    text-align: center;
}

.s span{
    font-family: 'Times New Roman';
    word-spacing: 2px;
    color: orange;
    font-style: italic;
    animation: fadeIn 1s ease-in-out;
}

.sign_up input[type="text"]{
    width: 95%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 25px;
}

.sign_up input[type="date"]{
    width: 95%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 25px;
}

.sign_up input[type="tel"]{
    width: 95%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 25px;
}

.sign_up input[type="email"]{
    width: 95%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 25px;
}

.sign_up input[type="location"]{
    width: 95%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 25px;
}

.sign_up input[type="submit"]{
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(IMG_2402.JPG);
    background-position: center;
    background-size: cover;
    color: #fff;
    padding: 10px 70px;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    display: block;
    margin: 0 auto;
    transition: transform 0.3s;
    margin-top: 10px;
    font-weight: bold;
}

@keyframes bounce{
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
    }
    40%{
        transform: translateY(-15px);
    }
    60%{
        transform: translateY(-10px);
    }
}

.sign_up input[type="submit"]:hover{
    animation: bounce 0.5s;
}

.sign_up p{
    text-align: center;
}

   </style>
</head>
<body>
    <div class="sign_up">
        <div class="s">
            <h2>Sign Up</h2>
            <p>Join Our <span>Community</span></p>
        </div>

        <form action="home.php" method="$_GET">
            First Name(s): <input type="text" name="fname"><br>
            Surname: <input type="text" name="sname"><br>
            Email: <input type="email" name="email"><br>
            Telephone: <input type="tel" name="phone"><br>
            Date of Birth: <input type="date" name="dbirth"><br>
            Address: <input type="text" name="location"><br>
            Male: <input type="radio" name="gender" value="Male">
            Female: <input type="radio" name="gender" value="Female"><br>
            <input type="submit">
        </form>

        <?php
        $name =$email =$date =$phone =$address =$gender;

        if ($_SERVER["REQUEST_METHOD"] == "GET"){
            $name = test_input($_GET["fname"]);
            $name = test_input($_GET["sname"]);
            $email = test_input($_GET["name"]);
            $date = test_input($_GET["dbirth"]);
            $address = test_input($_GET["location"]);
            $phone = test_input($_GET["phone"]);
            $gender = test_input($_GET["gender"]);
        }

        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

        <div class="social-links">
            <p>Join our socials</p>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>
            <a href="#"><i class="fa fa-whatsapp"></i></a>
        </div>

        <p>Thank you!</p>
    </div>
</body>
</html>
