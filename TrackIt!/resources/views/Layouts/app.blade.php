<html>

<head>
    <link rel="shortcut icon" href="https://cdn.shopify.com/s/files/1/1061/1924/products/Package_Box_Emoji_grande.png?v=1480481061" type="image/x-icon">
    <title>TrackIt! @yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #60c730;
            color: white;
            text-align: center;
        }
        body {
      margin: 0;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    
    .topnav {
      overflow: hidden;
      background-color: black;
      display: flex;
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
        font-size: 25px;
        background-image: linear-gradient(to right, black, rgba(255, 255, 255, 0)),url("https://www.iamrobotics.com/wp-content/uploads/2019/10/bigstock-automated-storage-warehouse-wi-302219542-1.jpg");
        margin-bottom: 5%;
    }

    .button {
        border: none;
        border-radius: 5px;
        padding: 12px 22px;
        text-align: center;
        display: inline-block;
        margin-bottom: 70px;
        transition-duration: 0.3s;
        cursor: pointer;
        font-weight: bold;
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

    .new_content {
        margin-left: 5%;
        margin-right: 5%;
    }

    </style>

</head>

<body>
    <div class="topnav">
        <a class="active" href="/">
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

        <button class="button button1" onclick="window.location.href='/orders'"> 🔎 Product section </button>
        <button class="button button2" onclick="window.location.href='/warehouses'"> 🏬 Warehouse section </button>
    </div>

    <div class="new_content">
        @yield('content')
    </div>
    

    <div class="topnav" style="margin-top: 90px;">
        <a class="active" href="/"> <strong> 📦 TrackIt! </strong> </a>
    </div>
</body>

</html>