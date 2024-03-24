<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Medicine storage</title>
    <style>
        .containerHome {
            display: flex;
            overflow-x: scroll;
            width: 100%;
            height: 200px;
            justify-content: flex-start;
            align-items: center;
            overflow: scroll;
        }


        .containerHome .box {
            flex: 0 0 auto;
            width: 20%;
            height: 100%;
            margin-right: 10px;
            background-color: #f1f1f1;
        }


        @media only screen and (max-width: 600px) {
            .containerHome {
                height: 100px;
            }

            .containerHome .box {
                width: 10%;
            }
        }

        .imgHome .responsive {
            width: 100%;
            height: 400px;
            max-width: 100%;
            /* display: block; */
        }

        .lineHome {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 10vh;
            margin: 0;
            background-color: #f1f1f1;
        }

        .designHome {
            font-size: 3rem;
            color: #265ede;
            text-align: center;
            margin: 0;
            padding : 0px;
            text-shadow: 2px 2px #fff;
        }

        .nav_bar ul {
            list-style-type: none;
            background-color: rgba(51, 211, 211, 0.884);
            padding: 0px;
            margin: 0px;
            overflow: hidden;

            /*justify-content: flex-end;*/
            display: flex;
        }

        .nav_bar a {
            color: white;
            text-decoration: none;
            padding: 15px;
            display: block;
            text-align: center;
        }

        .nav_bar a:hover {
            background-color: black;
        }

        .nav_bar li {
            float: left;
        }
    </style>
</head>

<body>
<div class="nav_bar">
    <nav>
        <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="about.html">about</a></li>
            <li><a href="products.html">Products</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
</div>

<div class="home">
    <div class="imgHome">
        <img class="responsive" src="images\homePhoto.jpg" alt="Your Image"> </div>
    </div>
    <div class="lineHome">
        <h3 class="designHome">New Medicines</h3>
    </div>
<br>
    <div class="containerHome">
        <div class="containerHome">
            @foreach ($sevenMedicines as $medicine)
                <div class="box">
                    Trade Name: {{ $medicine->trade }}<br>
                    Price: ${{ $medicine->price }}<br>
                </div>
            @endforeach
        </div>
            @foreach ($top as $top)
                <div class="box">
                    Trade Name: {{ $top->trade }}<br>
                    Price: ${{ $top->price }}<br>
                </div>
            @endforeach
        </div>

    </div>
    <div class="lineHome">
        <h3 class="designHome">Common Medicines</h3>
    </div>
    <div class="containerHome">
        <div class="box">Container 1</div>
        <div class="box">Container 2</div>
        <div class="box">Container 3</div>
        <div class="box">Container 4</div>
        <div class="box">Container 5</div>
        <div class="box">Container 6</div>
        <div class="box">Container 7</div>
    </div>
</div>
</body>

</html>
