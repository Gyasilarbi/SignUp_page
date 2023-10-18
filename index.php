<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    *{
        margin: 0;
        padding: 0;
    }

    body{
    align-items: center;
    justify-content: center;
    display: flex;
    height: 109vh;
    width: 100%;  
    }

    .login{
    width: 300px;
    border: 1px solid #ccc;
    border-radius: 25px;
    margin: 20px;
    padding: 10px;
    padding: 20px;
    text-align: center;
    font-family: Georgia;
    }

    .login p a{
    color: orange;
    text-decoration: none;
    }
    </style>   
</head>
<body>
    <div class="login">
        <h3>Login</h3>
        <p>Welcome. <a href="#">New here? Sign Up.</a></p>

        <form action="<?php echo htmlspecialchars("reveal.php")?>" method="post">
        
        <div class="mb-3 mt-3">
            <input type="text" name="firstname" class="form-control" placeholder="First Name">
        </div>
        <div class="mb-3">
            <input type="text" name="lastname" class="form-control" placeholder="Last Name">
        </div>
        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="mb-3">
            <input type="tel" name="phone" class="form-control" placeholder="0200000000">
        </div>
        <div class="mb-3" id="ds">
            <input type="date" name="dob" class="form-control">
            <label for="sel1" class="form-label">
                <select name="selllist1" id="sel1" class="form-select">
                    <option>Male</option>
                    <option>Female</option>
                    <option> Others</option>
                </select>
            </label>
        </div>
        <div class="mb-3">
            <input type="submit" name="submit" value="Submit">
        </div>
        </form>
    </div>
</body>
</html>