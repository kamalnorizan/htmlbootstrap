<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responsive Layout</title>
    <style>
        .header{
            background-color: #cecece;
            color: rgb(50, 50, 50);
            text-align: center;
            padding: 15px;
        }

        .menu{
            width: 20%;
            float: left;
        }

        .menu ul{
            list-style-type: none;
            padding: 0;
        }

        .menu ul li{
            background-color: #cecece;
            color: black;
            padding: 10px;
            margin: 5px;
            text-align: center;
            cursor: pointer;
        }

        .menu ul li:hover{
            background-color: #333;
            color: white;
        }

        .menu ul li a{
            color: black;
            text-decoration: none;
        }

        .main{
            width: 55%;
            float: left;
            padding: 10px;
        }

        .right{
            width: 20%;
            float: left;
        }

        @media only screen and (max-width: 620px){
            .menu, .main, .right{
                width: 100%;
            }
        }


    </style>
</head>

<body>
    <div class="header">
        <h1>My Responsive Layout</h1>
    </div>

    <div class="menu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>

    <div class="main">
        <h2>Main Block</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui velit, ipsam rem ab libero molestiae. Saepe, pariatur corporis error nobis odit qui, libero sint, ex optio veritatis corrupti sequi earum.</p>

        <h2>Main Block</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui velit, ipsam rem ab libero molestiae. Saepe, pariatur corporis error nobis odit qui, libero sint, ex optio veritatis corrupti sequi earum.</p>

    </div>

    <div class="right">
        <h2>Right Block</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui velit, ipsam rem ab libero molestiae. Saepe, pariatur corporis error nobis odit qui, libero sint, ex optio veritatis corrupti sequi earum.</p>

        <h2>Right Block</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui velit, ipsam rem ab libero molestiae. Saepe, pariatur corporis error nobis odit qui, libero sint, ex optio veritatis corrupti sequi earum.</p>
    </div>
</body>

</html>
