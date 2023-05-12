<html>
    <head>
        <title>Northampton Travels</title>
        <style>
            main {
                position: absolute;
                left: 40%;
                top:15%
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
                margin:20px 50px;
                padding:20px 50px;
                background: url('../Images/btn_background.png');
                border-radius:30px;
            }
            /* Style the navigation bar */
            .navbar {
                position: absolute;
                width:100%;
                /* left: 30%; */
                top: 0%;
                background-color:#002060;
                /* overflow: hidden; */
            }

            /* Style the links inside the navigation bar */
            .navbar a {
                float: left;
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            /* Change the color of links on hover */
            .navbar a:hover {
                background-color: #ddd;
                color: black;
            }
        </style>
    </head>
    <body>
        <header>Add Review</header>
        <div class="navbar">
            <a href="#home">Home</a>
            <a href="#addReview">AddReview</a>
            <a href="#myProfile">My Profile</a>
        </div>
        <main>
            <form action="../user.php" method="POST">
                <p>First Name: </p>
                <input type="text" name="firstName" placeholder="First Name"/>
                <p>Last Name: </p>
                <input type="text" name="lastName" placeholder="Last Name"/>
                <p>Email: </p>
                <input type="email" name="email" placeholder="Email"/>
                <p>Username: </p>
                <input type="text" name="username" placeholder="Username"/>
                <br></br>
                <button type="submit">SAVE</button>
            </form>
        </main>
    </body>
</html>