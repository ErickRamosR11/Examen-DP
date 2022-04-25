<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<title>Document</title>
<style>
    body{
        background-color:black;
    }
    .contenedor{
        height:100px;
        width: 200px;
        font-size: 14px;
        color: white;
    }
</style>
</head>
<body>
    <input type="button" id="consumir" value="Practica 1" />
    <input type="button" id="practica2" value="Practica 2" />
    <div class="contenedor">
        
    </div>
    <script>
   $( "#consumir" ).click(function() {
        $.get( "https://my-json-server.typicode.com/dp-danielortiz/dptest_jsonplaceholder/items", function( data ) {
        var json = JSON.stringify(data);
        var green = JSON.parse(json).filter(({color}) => color === 'green');
        var tennis = JSON.stringify(green);
        console.log(tennis)   
        $.ajax({
            url: 'response.php',
            data: '&data='+tennis,
            method: 'POST'
            })
        });
    });

    $( "#practica2" ).click(function() {
        $.get( "https://my-json-server.typicode.com/dp-danielortiz/dptest_jsonplaceholder/items", function( data ) {
        var json = JSON.stringify(data);
        var red = JSON.parse(json).filter(({color}) => color === 'red');
        var tennis_red = JSON.stringify(red);
        console.log(tennis_red)   
        window.open('response2.php?tennis_red='+tennis_red);
        });
    });
</script>
</body>
</html>