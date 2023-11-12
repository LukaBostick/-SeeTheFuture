<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automate Your Stock</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Lato', sans-serif;
            background-color: #080710;
        }

        h1 {
            font-weight: 300;
            letter-spacing: 2px;
            font-size: 48px;
            color: #f0efef;
            text-align: center;
        }

        .header {
            position: relative;
            text-align: center;

            color: white;
        }

        .waves {
            position: relative;
            width: 100%;
            height: 15vh;
            margin-bottom: -7px;
            min-height: 100px;
            max-height: 150px;
        }

        .testbox {
            margin: 20px auto;
            width: 343px;
            background-color: #ebebeb;
            -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.31);
            box-shadow: 1px 2px 5px rgba(0,0,0,.31);
            border: solid 1px #cbc9c9;
            -webkit-border-radius: 8px;
            border-radius: 8px;
            padding: 20px;
            opacity: 
        }

        input[type=text], input[type=password], input[type=email] {
            width: 100%;
            padding: 10px;
            margin: 6px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .button {
            background-color: #5461C3;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            opacity: 0.8;
        }

        body {
  background-color: #5461C3
}
.box {
  position: fixed;
  top: 0;
  transform: rotate(80deg); 
  left: 0;
}

.wave {
  position: absolute;
  opacity: .4;
  width: 1500px;
  height: 1300px;
  margin-left: -150px;
  margin-top: -250px;
  border-radius: 43%;
}

@keyframes rotate {
  from {transform: rotate(0deg);}
  from {transform: rotate(360deg);}
}

.wave.-one {
  animation: rotate 10000ms infinite linear;
  opacity: 5%;
  background: white;
}

.wave.-two {
  animation: rotate 6000ms infinite linear;
  opacity: 10%;
  background: white;
}



    </style>
</head>
<body>
    <div class="header">
        <h1>Automate Your Stock</h1>
        <!-- Additional header content -->
    </div>

    <div class="testbox">
        <h1 style="color:rgb(0, 0, 0);">Registration</h1>
        <h2 style="color:rgb(0, 0, 0); font-weight : 300; font-size : 25px;  margin-top : -30px;"><center>We will send you daily prediction score for stock you folowing</center></h2>
        <form action="/">
            <label for="email"><b>Phone</b></label>
            <input type="email" placeholder="Phone" name="email" required>

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required>

            <label for="psw"><b>Stock to follow</b></label>
            <input type="text" placeholder="Enter company name" name="psw" required>

            <button type="submit" class="button">Sign Up For SMS Updates</button>
        </form>
    </div>

    <div class='box'>
  <div class='wave -one'> </div>
  <div class='wave -two'></div>
</div>

</body>
</html>
