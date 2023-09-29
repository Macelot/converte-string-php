<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<?php
$v="";
$v_="";
$op="";
if(isset($_POST['chk'])){
    $op = intval($_POST['chk']);
    $v=$_POST['valor1'];

    if($op==1){
        $v_ = mb_convert_case($v, MB_CASE_LOWER, "UTF-8");
    }

    if($op==2){
        $v_ = mb_convert_case($v, MB_CASE_UPPER, "UTF-8");
    }

    if($op==3){
        $v_ = mb_convert_case($v, MB_CASE_TITLE, "UTF-8");
    }
}
?>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="" method="post">
                    Informe o texto a ser convertido:<br>
                    <textarea name="valor1" cols="40" rows="10"><?php echo $v?></textarea>
                    <br>
                    Escolha qual formato deseja: <br>
                    <input type="radio" name="chk" id="" value="1" <?php echo $op==1 ? "checked=true" : ""?> > Minúsculo
                    <input type="radio" name="chk" id="" value="2" <?php echo $op==2 ? "checked=true'" : ""?> > Maiúsculo
                    <input type="radio" name="chk" id="" value="3" <?php echo $op==3 ? "checked=true" : ""?> > Título
                    <br>
                    <input type="submit" class="btn btn-primary" value="Enviar">    
                </form>
            </div>
            <div class="col-6">
            Resultado:<br>
                <textarea name="valor2"  cols="40" rows="10"><?php echo $v_?></textarea>
                <br>
                <br>
                <br>
                <input type="button" class="btn btn-danger" value="Limpar">
            </div>
        </div>
    </div>
  
</body>
</html>