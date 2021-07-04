<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn.shopify.com/s/files/1/1061/1924/products/Package_Box_Emoji_grande.png?v=1480481061" type="image/x-icon">
    <title> TrackIt!</title>
    <link rel="stylesheet" href="css/list.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    body {
      margin: 0;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    
    .topnav {
      overflow: hidden;
      background-color: black;
    }
    
    .topnav a {
      float: left;
      color: white;
      text-align: center;
      padding: 20px 20px;
      text-decoration: none;
      font-size: 17px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    .secondtop {
        background-color: black;
        color: white;
        padding-left: 10%;
        height: 500px;
        font-size: 50px;
        background-image: linear-gradient(to right, black, rgba(255, 255, 255, 0)),url("https://www.fundoodata.com/learning-center/wp-content/uploads/Courier-blog-header-image.png");
        margin-bottom: 5%;
    }

    .button {
        border: none;
        border-radius: 5px;
        padding: 20px 32px;
        text-align: center;
        display: inline-block;
        margin-top: 7%;
        transition-duration: 0.3s;
        cursor: pointer;
        font-weight: bold;
        font-size: 17px;
    }

    .button1 {
        background-color: #33a853; 
        color: white;
    }

    .button1:hover {
        background-color: white;
        color: black;
    }

    .button2 {
        background-color: #8a8a8a; 
        color: white;
    }

    .button2:hover {
        background-color: white;
        color: black;
    }

    figure {
        background: transparent;
        margin-left: 0;
    }

    figure button {
        width: 50px;
        height: 50px;
        background: transparent;
        border: 3px solid white;
        border-radius: 100%;
        margin: auto;
        cursor: pointer;
    }

    figure button:focus {
        border: 3px solid red;
    }

    figure button::after {
        content: '';
        display: inline-block;
        position: relative;
        top: 1px;
        left: 3px;
        border-style: solid;
        border-width: 10px 0 10px 20px;
        border-color: transparent transparent transparent white;
    }

    </style>
    </head>

    <body>
        <div class="topnav">
            <a class="active" href="">
                <strong> 📦 TrackIt! </strong>
            </a>

            <a style="float: right;" href=""> Features </a>
            <a style="float: right;" href=""> Contact Us </a>
            <a style="float: right;" href=""> The Project </a>
        </div>

        <div class="secondtop">
            <strong> <div style="color: #ffffff;"> 📦 TrackIt! </div>
            <div style="color: #3ba858;"> Let's track your product! </div>
            
            <hr width="100px" align="left">

            <button class="button button1" onclick="window.location.href='/orders'"> 🔎 Add your Product! </button>
            <button class="button button2" onclick="window.location.href='/warehouses'"> 🏬 Add your Warehouse! </button>
        </div>

        <div class="topnav" style="margin-top: 90px;">
            <a class="active" href=""> <strong> 📦 TrackIt! </strong> </a>
        </div>
    
    </body>
    
</html>