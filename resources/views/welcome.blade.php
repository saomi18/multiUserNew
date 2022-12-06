
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" type="text/css" href="login/styleLog.css"> -->
    <style>
        .text{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .group{
            background: rgb(220, 187, 236);
            height: 200px;
            width: 500px;
            border-radius: 15px;
        }
        .selamat{
            height: 50px;
            width: 219px;
            padding-top: 40px;
            margin-left: 140px;
        }
        .login{
            width: 70px;
            margin-left: 215px;
            background: rgb(107, 33, 141);
            height: 30px;
            border-radius: 5px;
        }
        a{
            text-decoration-line: none;
            color: rgb(174, 171, 168);
            margin-top: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 25px;
        }
    </style>
</head>
<body>
    <div class="text">
        <div class="group">
            <div class="selamat">
                <h1>Selamat Datang</h1>
            </div>
            <div class="login">
                <h3><a href="{{ route('login') }}"> login</a></h3>
            </div>
        </div>
    </div>
</body>
</html>