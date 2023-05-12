<html>
    <head>
        <title>Northampton Travels</title>
        <style>
            #logo-section { 
                width: 100%;
                height: 30vh;
                background-image: url('../Images/logo.png');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
            }
      
            main {
                position: absolute;
                left: 40%;
            }
            p{
                font-size: 20px;
                margin-top:20px;
            }
            input{
                font-size: 18px;
                padding:10px;
                width:100%;
            }
            button{
                font-size: 20px;
                color: white;
                font-style: bold;
                margin:20px 50px;
                padding:20px 50px;
                background: url('../Images/btn_background.png');
                border-radius:30px;
            }
            #subText{
                color: #555555;
                font-style: italic bold;
                padding-left:55px;
            }
        </style>
    </head>
    <body>
        <div id="logo-section"></div>
        <main>
            <form action="../user.php" method="POST">
                <p>Username: </p>
                <input type="text" name="username" placeholder="Username"/>
                <p>Password: </p>
                <input type="password" name="password" placeholder="Password"/>
                <br></br>
                <button type="submit">LOG IN</button>
                <p id="subText">New User? Signup</p>
            </form>
        </main>
    </body>
</html>

<?php
// if(isset($_GET['fname'])){
//     echo "Hello ".$_GET['fname']; 
// }


if(isset($_GET['input1']) && isset($_GET['input2'])){
    $result=0;
    if(isset($_GET['add'])){
        $result= $_GET['input1']+ $_GET['input2'];
    }
    else if(isset($_GET['subtract'])){
        $result= $_GET['input1']- $_GET['input2'];
    }
    else if(isset($_GET['multiply'])){
        $result= $_GET['input1']* $_GET['input2'];
    }
    else if(isset($_GET['divide'])){
        $result= $_GET['input1']/ $_GET['input2'];
    }
    echo "result is ".$result;
}
?>