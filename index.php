<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pokemon</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <style type="text/css" media="screen">
                body{
                    display : inline-block;
                }
                div{
                    display : inline-block;
                    vertical-align:top;
                }
                #pokemonInfo{
                    width: 340px;
                    border : 10px solid red;
                    padding: 10px 30px;
                }
                #pokemonImages{
                    width: 1000px;
                }
        </style>
        <script type="text/javascript" charset="utf-8">
                $(document).ready(function(){
                    $("img").click(function(){
                        $.get("http://pokeapi.co/api/v1/pokemon/" + this.id + "/", function(res){
                            console.log(res);
                            console.log(res.height);
                            console.log(res.weight);
                            $("#name").empty();
                            $("#name").append("<li>" + res.name + "</li>");
                            $("#types").empty();
                            $("#types").append("<li>" + res.types[0].name + "</li>");
                            $("#types").append("<li>" + res.types[1].name + "</li>");
                            $("#height").empty();
                            $("#height").append("<li>" + res.height + "</li>");
                            $("#weight").empty();
                            $("#weight").append("<li>" + res.weight + "</li>");
                        },"json");
    });
}); 
        </script>
    </head>
    <body>
        <div id="pokemonImages">
            <script type="text/javascript" charset="utf-8">
for(var i = 1 ; i < 151 ; i++){
    document.writeln("<img src=http://pokeapi.co/media/img/" + i + ".png id=" + i + ">"); 
}
            </script>
        </div>
        <div id="pokemonInfo">
            <h3 id="name"></h3>
            <h3>Types</h3>
                <ul id="types">
                </ul>
            <h3>Height</h3>
                <ul id="height">
                </ul>
            <h3>Weight</h3>
                <ul id="weight">
                </ul>
        </div>
    </body>
</html>
