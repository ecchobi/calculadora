<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="Content-Security-Policy" content="default-src * data: gap: https://ssl.gstatic.com; style-src * 'unsafe-inline'; script-src * 'unsafe-inline' 'unsafe-eval'">
    <script src="js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/calculadora.js"></script> 
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
        <form action="" method="post">
            <div class="row">
                <div class="col-12">
                    <input type="text" id="resultado" class="a d-block mx-auto" readonly>
                </div>
            </div>
        </form>
    
    <div class="b">
        <div class="row">
            <div class="col-6">
                <input type="button" value="CE" name="ce" class="btn">
            </div>
            <div class="col-6">
                <input type="button" value="C" name="c" class="btn">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
            <input type="button" value="7" name="btn" class="btn">
            </div>
            <div class="col-3">
            <input type="button" value="8" name="btn" class="btn">
            </div>
            <div class="col-3">
            <input type="button" value="9" name="btn" class="btn">
            </div>
            <div class="col-3">
            <input type="button" value="+" name="soma" class="btn">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
            <input type="button" value="4" name="btn" class="btn">
            </div>
            <div class="col-3">
            <input type="button" value="5" name="btn" class="btn">
            </div>
            <div class="col-3">
            <input type="button" value="6" name="btn" class="btn">
            </div>
            <div class="col-3">
            <input type="button" value="-" name="subtracao" class="btn">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
            <input type="button" value="1" name="btn" class="btn">
            </div>
            <div class="col-3">
            <input type="button" value="2" name="btn" class="btn">
            </div>
            <div class="col-3">
            <input type="button" value="3" name="btn" class="btn">
            </div>
            <div class="col-3">
            <input type="button" value="*" name="multiplicacao" class="btn">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
            <input type="button" value="." name="btn" class="btn">
            </div>
            <div class="col-3">
            <input type="button" value="0" name="btn" class="btn">
            </div>
            <div class="col-3">
            <input type="button" value="=" name="igual" class="btn igual">
            </div>
            <div class="col-3">
            <input type="button" value="÷" name="divisao" class="btn">
            </div>
        </div>
    </div>
</div>
    
</body>
</html>
