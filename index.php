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
    </style>
</head>
<body>
<input type="button" id="consumir" value="consumir" />

<script>
   $( "#consumir" ).click(function() {
        $.get( "https://my-json-server.typicode.com/dp-danielortiz/dptest_jsonplaceholder/items", function( data ) {
   // $( ".result" ).html( data );
    console.log( data );
    });
    // $.ajax({
    //     url: 'https://my-json-server.typicode.com/dp-danielortiz/dptest_jsonplaceholder/items',
    //     //data: data,
    //     //success: success,
    //     method: 'GET'
    // }).done(function(data) {
    //     console.log(data);
    // });
});
</script>
</body>
</html>