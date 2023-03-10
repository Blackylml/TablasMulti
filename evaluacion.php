    <html> 
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    </head>

        <body background-color: #8fbbbc;>
        <style>
    body {
      background-color: #8fbbbc;
      font-family: Arial, sans-serif;
      color: #333;
    }
    h1 {
      text-align: center;
      font-size: 3rem;
      margin-top: 2rem;
    }
    .container {
      margin: 2rem auto;
      padding: 2rem;
      background-color: #fff;
      border-radius: 0.5rem;
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    }
  </style>

    
            <center>
            <form action ="procesar.php" method="get">
            <?php
        $puntos=0;
        $contador=$_GET["numero"];
        $range1=$_GET["range1"];
        $range2=$_GET["range2"];
        $cantidad =0;
        if($range1>$range2){
            $cantidad = ($range1-$range2)+1;
            for ($range2; $range2 <=$range1 ; $range2++) {       
                $resultados=$_GET["x".$range2];
                $multiplicacion= ($contador*$range1);
                if ($resultados==$multiplicacion) {
                    echo '<div class="container text-center">
            <div class="row">
                <div class="col">
                    <div class="p-2 mb-2 bg-info text-dark">'.$contador.'X'.$range2.'</div>
                </div>
                <div class="col">
                <div class="p-1 mb-2 bg-success text-white">'.$resultados.'<i class="bi bi-check-circle"></i></div>
                </div>
                <div class="col">
                    <div class= text-red">'.$multiplicacion.'</div>
                </div>
            </div>
          </div>';

                     ;
                    $puntos++;
                }
                else {
                    echo '<div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <div class="p-2 mb-2 bg-info text-dark">'.$contador.'X'.$range2.'</div>
                        </div>
                        <div class="col">
                        <div class="p-1 mb-2 bg-danger text-white">'.$resultados.'<i class="bi bi-x-circle"></i></div>
                        </div>
                        <div class="col">
                            <div class= text-red">'.$multiplicacion.' </div>
                        </div>
                        
                    </div>
                  </div>';
                     ;
                    
    
                }
            }
            echo '<br> <h1>El puntaje es : '.$puntos.' de '.$range2.'</h1>';

        }
        else if($range2>$range1){
            $cantidad = ($range2-$range1)+1;
            for ($range1; $range1 <=$range2 ; $range1++) { 
                $resultados=$_GET["x".$range1];
                $multiplicacion= ($contador*$range1);
                if ($resultados==$multiplicacion) {
                    echo '<div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <div class="p-2 mb-2 bg-info text-dark">'.$contador.'X'.$range2.'</div>
                        </div>
                        <div class="col">
                        <div class="p-1 mb-2 bg-success text-white">'.$resultados.'<i class="bi bi-check-circle"></i></div>
                        </div>
                        <div class="col">
                            <div class= text-red">'.$multiplicacion.'</div>
                        </div>
                    </div>
                  </div>';
                    $puntos++;
                }
                else {
                    echo '<div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <div class="p-2 mb-2 bg-info text-dark">'.$contador.'X'.$range2.'</div>
                        </div>
                        <div class="col">
                        <div class="p-1 mb-2 bg-danger text-white">'.$resultados.'<i class="bi bi-x-circle"></i></div>
                        </div>
                        <div class="col">
                            <div class= text-red">'.$multiplicacion.'</div>
                        </div>
                    </div>
                  </div>';
    
                    }
            }
            echo '   <br> <h1>Tu total de puntos es '.$puntos.'</h1>';
        }

            ?>
            </form>
            </center>
        </body>
    
    </html>