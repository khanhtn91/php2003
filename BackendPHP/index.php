<?php 
    $hoten = $_REQUEST['hoten'];
    $namsinh = $_REQUEST['namsinh'];
    $tuoi = date('Y') - $namsinh;
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>day la mot doan demo</h1>
        <p><?='hello'?></p>
        <form action="index.php" method="POST">
            <input type = "text" name="hoten" placeholder="nhap ho ten"/>
            <input type = "text" name="namsinh" placeholder="nhap nam sinh"/>
            <input type="submit" value="submit"/>
        </form>
        <div>
            <div>Ho Ten: <?=$hoten?></div>
            <div>Tuoi: <?=$tuoi?></div>
        </div>
    </body>
</html>

