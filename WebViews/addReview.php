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
                font-size: 18px;
                padding:10px;
                width:100%;
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
        </style>
    </head>
    <body>
        <header>Add Review</header>
        <main>
            <form action="../review.php" method="POST">
                 <table>
                    <tr>
                        <td>
                            <p>Package Name:</p>
                        </td>
                        <td>
                            <input type="text" name="packagesName"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Visited Date: </p>
                        </td>
                        <td>
                            <input type="date" name="visitedDate"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Overall (review): </p>
                        </td>
                        <td>
                            <input type="text" name="overall"/>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Overall : </p>
                        </td>
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
                        <td>
                            <p>Food (review): </p>
                        </td>
                        <td>
                            <input type="text" name="food"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Food Rating: </p>
                        </td>
                        <td>
                            <input type="text" name="foodRating" placeholder="Number between 1 to 5. "/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Transport (review): </p>
                        </td>
                        <td>
                            <input type="text" name="transport"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Transport Rating: </p>
                        </td>
                        <td>
                            <input type="text" name="transportRating" placeholder="Number between 1 to 5. "/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Accommodation (review): </p>
                        </td>
                        <td>
                            <input type="text" name="accommodation"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Accommodation Rating: </p>
                        </td>
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