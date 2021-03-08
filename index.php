<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculator</title>
</head>
<body>
    <div class="main-container">
        <form action="calculate.php" method="post" name="myForm">
            <div class="addend one" id="n1">
                <input type="text" name="n1" placeholder="0" onkeyup="ValidateInput1()">
                <a href="#n2">NEXT</a>
            </div>

            <div class="extra uno"></div>
            <div class="extra dos"></div>
            <div class="extra tres"></div>
            <div class="extra quatro"></div>
            <div class="extra singko"></div>

            <div class="addend two" id="n2">
                <input type="text" name="n2" placeholder="0" onkeyup="ValidateInput2()">
                <div class="wrapper">
                    <a href="#operator">OPERATORS</a>
                </div>
            </div>

            <div class="extra uno"></div>
            <div class="extra dos"></div>
            <div class="extra tres"></div>
            <div class="extra quatro"></div>
            <div class="extra singko"></div>

            <div class="operator" id="operator">
                <input type="submit" name="operator" value="+"> 
                <input type="submit" name="operator" value="−">
                <input type="submit" name="operator" value="×">
                <input type="submit" name="operator" value="/">
            </div>
        </form>
    </div>
</body>
<script src="script.js"></script>
</html>