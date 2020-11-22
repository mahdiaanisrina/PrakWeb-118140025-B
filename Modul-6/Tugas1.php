<!DOCTYPE html>
<html>
    <head>
        <title>Tugas 1 - 118140025 - Mahdia Nisrina Maharani M</title>
    </head>
    <body>

        <?php

        function fak ($n){
            if($n==0){
                return 1;
            }
            else{
                return $n*fak($n-1);
            }
        } 
        print_r(fak(4));
        ?>
        
    </body>
</html>