<?php
    require_once('../php/Conectar.php');
    $sql = "SELECT * FROM padecimientos where DSpad like '%".$_REQUEST['buscnom']."';";
    $excute = mysqli_query($con,$sql);
    $Postdata = mysqli_num_rows($excute);

    if($Postdata > 0){
        while($row = mysqli_fetch_array($excute)){  
            $categ = $row['Categoria'];
            $texto = $row['Texto'];
            echo $row['PadId'];
            echo $row['Article_title'];?></a>
        </h1>
        <span>
            Publihed on: <?php echo $date; ?> At: <?php echo $time; ?>
        </span>
        <?php
        }
    }
    ?>