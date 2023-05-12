<html>
    <head>
        <title>Northampton Travels</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
        <style>
            header { 
                width: 100%;
                height: 10vh;
                background-image: url('../Images/bg_review.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                font-size:40px;
                color: #002060;
                text-align: center;
                padding-top:80px;
            }
      
            main {
                position: absolute;
                left: 30%;
                top: 25%;
            }
            p{
                font-size: 20px;
                margin-top:20px;
            }
            input{
                font-size: 14px;
                padding:10px;
                width:100%;
            }
            th{
                text-align:left;
            }
            .ratingOverall{
                /* width:100%; */
                display: flex;
                transform:rotate(180deg);
                margin-right:50px;
            }
            .ratingOverall input{
                display: none;
            }
             .ratingOverall label{
                cursor: pointer;
            }
            .ratingOverall label:before{
                content:"\2605";
                color:grey;
                font-size:40px;
            }
             .ratingOverall label:after{
                content:'\2605';
                color:yellow;
                font-size:40px;
                position:absolute;
                opacity:0;
            }
            .ratingOverall input:checked ~ label:after{opacity:1;}

            button{
                font-size: 20px;
                color: white;
                margin:20px 150px;
                padding:20px 50px;
                background: url('../Images/btn_background.png');
                border-radius:30px;
            }
            select {
                padding:10px;
                /* border: 1px solid #ccc; */
                /* border-radius: 4px; */
                /* background-color: #fff; */
                /* box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1); */
            }
            /* select:hover {
                border-color: #aaa;
            }
            select:focus {
                outline: none;
                border-color: #4d90fe;
                box-shadow: 0 0 5px rgba(77, 144, 254, 0.5);
            } */
      
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
            <form action="../review.php" method="POST">
                 <table>
                    <tr>
                        <th>
                            <p>Package Name</p>
                        </th>
                        <td>
                        <select id="dropdown">
                            <option value="option1">Please Select Package</option>
                            <option value="option2">England,Scotland and Ireland</option>
                            <option value="option3">United Kingdom and Ireland</option>
                            <option value="option4">Britain and Ireland Delight</option>
                            <option value="option5">Britain and Ireland Explorer</option>
                            <option value="option6">Wonders of Britain and Ireland</option>
                            <option value="option7">Best of UK and Ireland</option>
                            <option value="option8">Great Britain</option>
                            <option value="option9">Grand Tour of Britain and Ireland</option>
                            <option value="option10">The Best of Britain and Ireland</option>
                            <option value="option11">Essential Britain and Ireland</option>
                            <option value="option12">Delve Deep: Britain and Ireland</option>
                            <option value="option13">England, Scotland and Wales</option>
                            <option value="option14">England, Scotland Heritage</option>
                            <option value="option15">Romantic Britain and Ireland</option>
                            <option value="option16">Aonghus Youth</option>
                            <option value="option17">Irish Highlights (Summer, 7 Days)</option>
                            <option value="option18">3 Day Isle of Skye</option>
                            <option value="option19">Best of Scotland (Summer, 7 Days)</option>
                            <option value="option20">A life en Rose (16 destinations)</option>
                            <option value="option21">3 Day Loch Nees and Skye</option>
                            <option value="option22">Great Tour of Ireland</option>
                            <option value="option23">Highland Fling</option>
                        </select>
                            <!-- <input type="text" name="packagesName"/> -->
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <p>Visited Date </p>
                        </th>
                        <td>
                            <input type="date" name="visitedDate"/>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <p>Overall (review) </p>
                        </th>
                        <td>
                            <input type="text" name="overall"/>
                            
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <p>Overall </p>
                        </th>
                        <td>
                            <div class="ratingOverall">
                                <input type="radio" name="star" id="overAllStar1"><label for="overAllStar1"></label>
                                <input type="radio" name="star" id="overAllStar2"><label for="overAllStar2"></label>
                                <input type="radio" name="star" id="overAllStar3"><label for="overAllStar3"></label>
                                <input type="radio" name="star" id="overAllStar4"><label for="overAllStar4"></label>
                                <input type="radio" name="star" id="overAllStar5"><label for="overAllStar5"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <p>Food (review) </p>
                        </th>
                        <td>
                            <input type="text" name="food"/>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <p>Food Rating </p>
                        </th>
                        <td>
                            <input type="text" name="foodRating" placeholder="Number between 1 to 5. "/>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <p>Transport (review)</p>
                        </th>
                        <td>
                            <input type="text" name="transport"/>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <p>Transport Rating </p>
                        </th>
                        <td>
                            <input type="text" name="transportRating" placeholder="Number between 1 to 5. "/>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <p>Accommodation (review) </p>
                        </th>
                        <td>
                            <input type="text" name="accommodation"/>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <p>Accommodation Rating </p>
                        </th>
                        <td>
                            <input type="text" name="accommodationRating" placeholder="Number between 1 to 5. "/>
                        </td>
                    </tr>
                </table>
                <br></br>
                <button type="submit">Add Review</button>
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