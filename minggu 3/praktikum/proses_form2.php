<!DOCTYPE html>
<html lang="en">
<!-- A11.2019.11677 - Thowus Ajmalifanka -->


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>proses_form2</title>
</head>

<body>
    <?php
    
       
        if (isset($_POST['nama_submit'])) {
            $nama=$_POST['nama'];
            echo "nama anda : <b>$nama</b>";
            
            
        }

    
    
    ?>
</body>

</html>