<?php
$URL='https://imdb-api.com/en/API/Top250Movies/k_5telm7rl';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$URL);
curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
$result=curl_exec ($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);   //get status code
curl_close ($ch);

$array = json_decode($result, true);

//print_r($array);

?>
<style>
    body{
        background-image:url("resource/background/pexels-tima-miroshnichenko-7991319.jpg");
    background-repeat: no-repeat;
    background-size:cover;
    background-attachment:fixed;
    }
    .div1{
        display:flex;
        justify-content:space-between;
        flex-wrap: wrap;
        padding:10px;
        width:98%;
        height:100%;
    }
    .div2{
        width:200px;
        height:450px;
        border-radius:20px;
        margin:10px;
        padding:10px;
    background-color: rgba(255, 255, 255, .6);  
    backdrop-filter: blur(5px);
    }
    .div3{
        display:flex;
        flex-direction:column;
        height:100%;
        justify-content:space-between;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="div1" style="">
    <?php
        foreach($array as $dataa){
            if(is_array($dataa)){
                foreach($dataa as $data){?>
        <div class="div2">
            <div class="div3">
                <!--<div>
                    <p><?="Title : ".$data['title']?></p>
                    <p><?="Year : ".$data['year']?></p>
                    <p><?="Cast : ".$data['crew']?></p>
                    <p><?="Rating : ".$data['imDbRating']?></p>
                </div>
                <div>
                    <img style="width:100%" src="<?=$data['image']?>">
                </div>-->
                <div>
                    <img style="width:100%" src="<?=$data['image']?>">
                </div>
                <div style="text-align:center;">
                    <p><?=$data['title']."(".$data['year'].")"?></p>
                    <p><?=$data['crew']?></p>
                    <p><?=$data['imDbRating']?></p>
                </div>
            </div>
        </div>
        <?php
            }}}
        ?>
    </div>
</body>
</html>