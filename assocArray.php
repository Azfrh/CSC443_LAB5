<html>
    <body>
        <?php
         $month[0] = array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
         $monthDays = array ('January' =>31,'February' =>28 ,'March' =>31,'April' =>30,'May'=>31,'June'=>31, 'August'=>31, 'September'=>30, 'October'=> 31, 'November'=> 30, 'December'=> 31);
         foreach ($monthDays as $item)
         {
             echo "$month[$i] - $item<br>";
             $i++;
         }echo "<br>";
         $month[0] = array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
         $monthDays = array ('January' =>31,'February' =>28 ,'March' =>31,'April' =>30,'May'=>31,'June'=>31, 'August'=>31, 'September'=>30, 'October'=> 31, 'November'=> 30, 'December'=> 31);
         foreach ($monthDays as $item)
         {
             if($item == 30)
             {
                 echo "$month[$i] -$item <br>";
             }
             $i++;
         }
         ?>
         </body>
         </html>                                