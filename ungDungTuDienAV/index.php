<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    input[type=text] {
        width: 300px;
        font-size: 16px;
        border: 2px solid dodgerblue;
        border-radius: 4px;
        padding: 12px 10px 12px 10px;
    }
    #submit {
        border-radius: 2px;
        padding: 10px 32px;
        font-size: 16px;
    }
    button{
        background-color: lightgreen;
    }
    echo.$word{
        color: chartreuse;
    }
    echo.$description{
        color: crimson;
    }
</style>
<body>
<h1 style="color: blue">Từ Điển Anh-Việt.</h1>
<form action="" method="post">

        <input type="text" name="search" placeholder="Nhập từ cần tìm.">
        <button type="submit" id="submit" value="Tìm" >Tìm</button>
</form>
<?php
    $dictionary = array("hello"=>"xin chào",
                    "how"=>"thế nào",
                    "book"=>"quyển vở",
                    "computer"=>"máy tính",
                    "banana"=>"quả chuối",
                    "apple"=>"quả táo", );
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $searchWord = $_POST["search"];
        $flag = 0;
        foreach ($dictionary as $word => $description) {
            if($word == $searchWord){
                echo "Từ: ". $word . ".<br/>Nghĩa của từ: ".$description;
                echo "<br/>";
                $flag = 1;
            }
        }
        if($flag == 0){
            echo "Không tìm thấy từ cần tra";
        }
    }
?>
</body>
</html>
