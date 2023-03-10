<body style="background-color: #5f9ea0;">
    <center>
        <form action="evaluacion.php" method="get">
            <?php
            $numero = $_GET["numero"];
            $rango1 = $_GET["rango1"];
            $rango2 = $_GET["rango2"];
            
            echo '<form action="evaluacion.php" class="col-2">
                <input type="hidden" id="range2" name="range2" value="'.$rango2.'">
                <input type="hidden" id="range1" name="range1" value="'.$rango1.'">
                <input type="hidden" id="numero" name="numero" value="'.$numero.'">';
            
            if ($rango1 > $rango2) {
                for ($rango2; $rango2 <= $rango1; $rango2++) { 
                    echo '<div class="col-auto">
                            <label class="form-label" for="fname">'.$numero.'x'.$rango2.'</label>
                            <input class="form-control" type="text" id="x'.$rango2.'" name="x'.$rango2.'">
                        </div>';
                }
                echo '<div class="col-auto">
                        <input class="btn btn-primary" type="submit" value="Calcular Resultado">
                    </div>';
            } else if ($rango1 < $rango2) {
                for ($rango1; $rango1 <= $rango2; $rango1++) { 
                    echo '<label class="form-label" for="fname">'.$numero.'x'.$rango1.'</label>
                        <input class="form-control" type="text" id="x'.$rango1.'" name="x'.$rango1.'">';
                }
                echo '<br><input class="btn btn-primary" type="submit" value="Calcular Resultado">';
            }
            ?>
        </form>
    </center>
</body>
