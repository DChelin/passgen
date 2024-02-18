<?php
//Defining the character length of the passwords and assisgning to the checkbox associated.
if(isset($_POST['gen'])){
    $result = '';
    if(isset($_POST['valueone'])){
        PassGenerator(6);
    } else if(isset($_POST['valuetwo'])){
        PassGenerator(10);
    } else if(isset($_POST['valuethree'])){
        PassGenerator(12);
    }else{
        PassGenerator(8);
    }
}
//Function to generate random password.
function PassGenerator($len){
    global $result;
    $ValidChar = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@!&$-#~_';
    while (0<$len--) {
        $result.=$ValidChar[random_int(0, strlen($ValidChar)-1)];
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <table align="center">
        <tr>
            <td><h1>Password Generator</h1></td><br>
        </tr>
        <tr>
            <td>
                <form class = "" action="" method="post">
                    <input type="text" name="result" value="<?php echo(@$result); ?>" ><br>
                    <input type="checkbox" name="valueone" value="6"> 6 Characters <br>
                    <input type="checkbox" name="valuetwo" value="10"> 10 Characters <br>
                    <input type="checkbox" name="valuethree" value="12"> 12 Characters <br>
                    <input type="submit" name="gen" value="Generate">

                </form>
            </td>
        </tr>
    </table>
    
</body>
</html>