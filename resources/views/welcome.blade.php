<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');

        @font-face {
            font-family: "Roboto";
            src: url('https://fonts.gstatic.com/s/roboto/v27/KFOmCnqEu92Fr1Mu4mxK.woff2') format('woff2');
            font-style: normal;
        }

        body {
            font-family: "Roboto", sans-serif;
        }

        .roboto-thin {
            font-family: "Roboto", sans-serif;
            font-weight: 100;
            font-style: normal;
        }

        .roboto-light {
            font-family: "Roboto", sans-serif;
            font-weight: 300;
            font-style: normal;
        }

        .roboto-regular {
            font-family: "Roboto", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .roboto-medium {
            font-family: "Roboto", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        .roboto-bold {
            font-family: "Roboto", sans-serif;
            font-weight: 700;
            font-style: normal;
        }

        .roboto-black {
            font-family: "Roboto", sans-serif;
            font-weight: 900;
            font-style: normal;
        }

        .roboto-thin-italic {
            font-family: "Roboto", sans-serif;
            font-weight: 100;
            font-style: italic;
        }

        .roboto-light-italic {
            font-family: "Roboto", sans-serif;
            font-weight: 300;
            font-style: italic;
        }

        .roboto-regular-italic {
            font-family: "Roboto", sans-serif;
            font-weight: 400;
            font-style: italic;
        }

        .roboto-medium-italic {
            font-family: "Roboto", sans-serif;
            font-weight: 500;
            font-style: italic;
        }

        .roboto-bold-italic {
            font-family: "Roboto", sans-serif;
            font-weight: 700;
            font-style: italic;
        }

        .roboto-black-italic {
            font-family: "Roboto", sans-serif;
            font-weight: 900;
            font-style: italic;
        }


        h2 {
            color: blue;
        }

        .text-primary {
            color: blue !important;
            font-size: 16px;
        }

        .text-danger {
            color: red;
            font-size: 35px;
        }

        table.text-success {
            color: green;
        }

        .text-warning {
            color: yellow;
        }

        ul {
            list-style-type: none;
        }

        li {
            color: blue;
            display: inline-block;
            padding-left: 15px;
            padding-right: 15px;
            padding-top: 5px;
            padding-bottom: 5px;
            cursor: pointer;
        }

        li:hover {
            color: red;
            background-color: lightgray;
        }

        .table {
            width: 100%;
        }

        .table-bordered {
            border-collapse: collapse;
        }

        .table-bordered>tbody>tr>td,
        .table-bordered>thead>tr>th {
            border-left: 1px solid black;
            border-right: 1px solid black;
            border-top: 1px solid black;
        }

        .table-spacing>tbody>tr>td {
            padding: 10px;
        }

        .table-shading>tbody>tr:nth-child(odd)>td {
            background-color: lightgray;
        }

        .table-shading>tbody>tr:last-of-type>td:last-of-type {
            border-top: 2px double black!important;
            border-bottom: 3px solid black;
        }


    </style>
</head>

<body>
    <h1 class="text-primary text-danger">Hello World!</h1>
    <h2>Hello World H2!</h2>
    <h3 class="text-success">Hello World H3!</h3>
    <h4>Hello World H4!</h4>
    <h2>Hello World H2!</h2>
    <h5>Hello World H5!</h5>
    <h6>Hello World H6!</h6>
    <h2>Hello World H2!</h2>
    <p class="roboto-regular text-primary">Lorem ipsum dolor sit amet <b>consectetur adipisicing</b> elit. <strong>Ratione corrupti
        beatae eligendi</strong>
        quisquam, <i>ipsum a temporibus iste unde</i>, in excepturi odit sequi adipisci nostrum deleniti fuga architecto?
        Architecto, voluptas facilis.</p>

    <b>Bold</b> <br>
    <strong>Bold</strong> <br>
    <i>Italic</i> <br>
    <em>Italic</em> <br>
    <u>Underline</u> <br>
    <mark>Marked</mark> <br>
    <small>Small</small> <br>
    <del>Deleted</del> <br>
    <ins>Inserted</ins> <br>
    Log<sub>10</sub> <br>
    12<sup>th</sup> of November <br>

    <ul>
        <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li>
        <li>Item 4</li>
        <li>Item 5</li>
    </ul>

    <table class="table table-bordered table-spacing table-shading" id="myTable">
        <thead>
            <tr>
                <th class="">Column 1</th>
                <th>Column 2</th>
                <th>Column 3</th>
                <th>Column 4</th>
                <th>Column 5</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Cell 1</td>
                <td>Cell 2</td>
                <td>Cell 3</td>
                <td>Cell 4</td>
                <td>Cell 5</td>
            </tr>
            <tr>
                <td>Cell 1</td>
                <td>Cell 2</td>
                <td>Cell 3</td>
                <td>Cell 4</td>
                <td>Cell 5</td>
            </tr>
            <tr>
                <td>Cell 1</td>
                <td>Cell 2</td>
                <td>Cell 3</td>
                <td>Cell 4</td>
                <td>Cell 5</td>
            </tr>
            <tr>
                <td>Cell 1</td>
                <td>Cell 2</td>
                <td>Cell 3</td>
                <td>Cell 4</td>
                <td>Cell 5</td>
            </tr>
            <tr>
                <td>Cell 1</td>
                <td>Cell 2</td>
                <td>Cell 3</td>
                <td>Cell 4</td>
                <td>Cell 5</td>
            </tr>
            <tr>
                <td>Cell 1</td>
                <td>Cell 2</td>
                <td>Cell 3</td>
                <td>Cell 4</td>
                <td>Cell 5</td>
            </tr>
            <tr>
                <td>Cell 1</td>
                <td>Cell 2</td>
                <td>Cell 3</td>
                <td>Cell 4</td>
                <td>Cell 5</td>
            </tr>
            <tr>
                <td>Cell 1</td>
                <td>Cell 2</td>
                <td>Cell 3</td>
                <td>Cell 4</td>
                <td>Cell 5</td>
            </tr>
            <tr>
                <td>Cell 1</td>
                <td>Cell 2</td>
                <td>Cell 3</td>
                <td>Cell 4</td>
                <td>Cell 5</td>
            </tr>
            <tr>
                <td>Cell 1</td>
                <td>Cell 2</td>
                <td>Cell 3</td>
                <td>Cell 4</td>
                <td>Cell 5</td>
            </tr>
            <tr>
                <td>Cell 1</td>
                <td>Cell 2</td>
                <td>Cell 3</td>
                <td>Cell 4</td>
                <td>Cell 5</td>
            </tr>
            <tr>
                <td>Cell 1</td>
                <td>Cell 2</td>
                <td>Cell 3</td>
                <td>Cell 4</td>
                <td>Cell 5</td>
            </tr>
            <tr>
                <td>Cell 1</td>
                <td>Cell 2</td>
                <td>Cell 3</td>
                <td>Cell 4</td>
                <td>Cell 5</td>
            </tr>
        </tbody>
    </table>
</body>

</html>
