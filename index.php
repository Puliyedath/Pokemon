<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pokemon</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <style type="text/css" media="screen">
        </style>
        <script type="text/javascript" >
            $(document).ready(function(){
                $('form').submit(function(){
                    var url = this.action + $('#search_field').val();
                    var location = $('#search_field').val();
                    $.get(url, function(res){
                        //console.log(res.main.temp); // T(K) × 9/5 - 459.67 - converting kelvin to farenheit
                        var farenheit = ((res.main.temp) * 9 / 5 ) - 459.67;
                        farenheit = Math.ceil(farenheit);
                        console.log("the temperature in farenheit is " + farenheit);
                        $('body > p').empty();
                        $('body').append("<p>" + location + "</p>");
                        $('body').append("<p>Temperature: " + farenheit +  "</p>");
                    },"json");
                    return false;
                });
            });
        </script>
    </head>
    <body>
        <form action="http://api.openweathermap.org/data/2.5/weather?q=" method="get" accept-charset="utf-8">
            <input type="text" value="" name="search_field" id="search_field">
            <input type="submit" value="Search Weather" name="Search Weather">
        </form>
    </body>
</html>
