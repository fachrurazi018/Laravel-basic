<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', $title)</title>
    <style>
        .container{
            height: 70vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #ffffff;
            padding-top: 10%;
        }
        .container h1{
            text-align: center;
        }
        .row h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .mb-3 {
            margin-bottom: 20px;
            text-align: left;
            width: 300px;
        }
        .mb-3 label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .mb-3 input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .mb-3 button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .mb-3 a {
            background-color: hsl(0, 100%, 50%);
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
    
        .login{
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
        }
        .register{
            background-color: #0fc652;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
        }
        .nav-container{
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 10vh;
        }
        .home-container{
            display: flex;
            flex-direction: column;
            height: 80vh;
            float: left;
            padding-left: 15%;
            padding-top: 5%;
        }
        .home-container p{
            position: absolute;
            top: 50%;
            left: 66%;
            transform: translate(-50%, -50%);
            font-size: 40px;
            text-align: center;
            font-style: italic;
            line-height: 0.8;
        }
        .home-container img{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .home-container-2{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin: 10px;
        }
        .home-container-2 h1{
            margin-bottom: 30%;
            font-size: 42px;
        }
        .home-container-2 nav{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            gap: 7px;
            padding: 0;
        }
        .navbar {
            background-color: #ffffff;
            overflow: hidden;
        }

        .navbar a {
            align-items: center;
            float: left;
            display: block;
            color: #000000;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 20px;
        }
        .navbar a:hover {
            background-color: #2980b9;
            color: #ffff;
        }
        .dropdown {
            float: left;
            overflow: hidden;
        }
        .dropdown .dropbtn {
            font-size: 20px;
            border: none;
            outline: none;
            color: #000000;
            background-color: inherit;
            cursor: pointer;
            padding: 14px 16px;
            text-align: center;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #ffffff;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a:hover {
            background-color: #2980b9;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .konten-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr); 
            gap: 30px; 
            margin-right: 300px;
        }
        .konten {
            overflow: hidden;
            border-radius: 8px; 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .konten img {
            height: 100%;
            width: 100%;;
        }
    </style>
</head>
<body>
        @yield('content')
</body>
</html>