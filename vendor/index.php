<?php 
require 'autoload.php';

$client = new \BaseCRM\Client(['accessToken' => 'your Token here']);
// $client->deals; // \BaseCRM\DealsService

$deals_array = $client->deals->all(["items"=>[]]);

$data_Amount = count($deals_array);








?>

<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
              rel="stylesheet"
              integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
              crossorigin="anonymous">

        <title>Hello, world!</title>
    </head>

    <body>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Deal Name</th>
                    <th scope="col">Deal Price</th>
                    <th scope="col">Deal Time Date</th>
                </tr>
            </thead>
            <tbody>



                <?php

                    for ($i = 0; $i < count($deals_array); $i++){
                        
                        $deals_Data = $deals_array[$i]['data'];
                        echo "<tr>";
                        echo '<th scope="row">'.$i.'</th>';
                        echo   "<td>" .($deals_Data['name']). "</td>";
                        echo   "<td>" .($deals_Data['currency']).($deals_Data['value']). "</td>";
                        echo   "<td>" .($deals_Data['created_at']). "</td>";
                        echo "</tr>";

                    
                    }





                     ?>




            </tbody>
        </table>
        </table>







        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
                crossorigin="anonymous"></script>


    </body>

</html>
