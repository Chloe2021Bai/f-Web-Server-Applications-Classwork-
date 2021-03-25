<html>
<head>
<title>Pokemon API</title>

<style type="text/css">
    img
    {
        background-color：blue;   
    }
</style>
</head>
<body>


  <?php
    $curl =curl_init();
    curl_setopt($curl,CURLOPT_RETURNTRANSFER, 1);
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    else{
        $id =1;
    }
    $url ="https://pokeapi.co/api/v2/pokemon/".$id;
    curl_setopt($curl,CURLOPT_URL,$url);
    $result = json_decode(curl_exec($curl));
    print"<img src='".$result->sprites->front_default."'><br>";
    print"<h1>".$result->name."</h1>";
    print"<h3>Height:".$result->height."</h3>";
    print"<h3>Weight:".$result->weight."</h3>";

    ?>
</body>
</html>