<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="png" href="logo.png">
    <link rel="stylesheet" href="body.css">
    <link rel="stylesheet" href="box.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Dzikir Online</title>
</head>

<body>

        <div class="definisi">
            <div class="h1">Dzikir Pagi</div>
            <div class="boxs">
                <div class="row">
                    <div class="cols">
                        <div class="but">
                            <button class="or" onclick="bacaan(1)">Bacaan 1</button>
                            <button class="or" onclick="bacaan(2)">Bacaan 2</button>
                            <button class="or" onclick="bacaan(3)">Bacaan 3</button>
                            <button class="or" onclick="bacaan(4)">Bacaan 4</button>
                            <button class="or" onclick="bacaan(5)">Bacaan 5</button>
                            <button class="or" onclick="bacaan(6)">Bacaan 6</button>
                        </div>
                    </div>
                    <div class="cols1">
                        <div id="result"></div>
                    </div>
                </div>
            </div>
        </div>


    <script>
        function bacaan(n){
    $.ajax("bacaan" +n+ ".php").done(function(data){
        $("#result").html(data);
    });
    }
    </script>
    <script src="jquery.js"></script>
    <script src="body.js"></script>
</body>

</html>