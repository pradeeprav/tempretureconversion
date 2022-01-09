<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempreture Conversion</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&display=swap" rel="stylesheet">
    <style>
        *{ 
           margin:0; padding: 0;
           box-sizing: border-box;
           font-family: 'Mulish', sans-serif;
        }

        h1{
           text-align: center; 
           height: 20vh; 
           color: #6c63ff;
        }

        .main-div{
            align-items: center;
            width: 100%;
            height: 80vh;
            display: flex;
            justify-content: space-around;
        }

        .left-side{
            background-color: #dfe6e9;
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70% ;
        }

        .left-side img{
            width: 400px;
            height: auto;
        }

        .right-side{
            width: 400px;
            height: 300px;
            background: #dfe6e9;
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex-direction: row;
            flex-wrap: wrap;
            align-content: center;
        }
        
        .input1{
            width: 250px;
            height: 40px;
            padding: 5px;
            outline: none;
            border: none;   
        }

        .selection{
            width: 100%;
            margin: 20px 0;
        }

        .btn{
            padding: 10px 16px;
            border-radius: 5px;
            outline: none;
            border: none;
            background-color: #6c63ff; 
            color: white;
            font-size: 0.9rem;
        }

        p{
            margin: 20px 0 0 0;
            color: #6c63ff;
            font-size: 1.2rem;
            font-wight: bold;
        }
    </style>
</head>
<body>
    <header>
        <h1>Tempreture Conversion</h1>
        <form method = "POST">

            <div class="main-div">
                <div class="left-side">
                    <img src="./image/images.jfif" alt="">
                    
                </div>
                <div class="right-side">
                    <input type="text" name = "num" placeholder = "Enter your number" class = "input1">
                    
                    <div class="selection">
                        <label>Celc</label>
                        <input type="radio" name="units" value = "cel">
                        <label>faren</label>
                        <input type="radio" name="units" value = "feh">
                    </div>
                    
                    <input type="submit" name = "submit" value="convert now" class = "btn">        
                </form>
                <div>
                    
                    <p> 
                        <?php
                if(isset($_POST['submit'])){
                    $num = $_POST['num'];
                    $temp = $_POST['units'];
                    
                    if($temp == "cel"){
                        $result = $num * 9 / 5 + 32;
                        echo "The conversion value of cel in faren is ". $result;
                    }else{
                        $result = ($num - 32) * 5 / 9;
                        echo "The conversion value of faren in cel is ". $result;
                    }
                }
                
                ?>
                     </p>
                </div>
            </div>
       </div>
    </header>
</body>
</html>