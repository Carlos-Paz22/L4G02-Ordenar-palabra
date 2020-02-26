<?php
   
    $arraypalabras=["dubis","d,f,hh,du,rar,pull,ball,bis"];
    $palabra=explode(",",$arraypalabras[1]);
    echo "Palabra por formar: ";
    for($i=0;$i<count($arraypalabras);$i++)
    {
        
        echo $arraypalabras[$i]."\n";
    }

 
    $tmp="";
    for($i=0;$i<count($palabra);$i++)
    {
        for($j=0;$j<count($palabra);$j++)
        {
            if ($j!=$i)
            {
                $tmp=$palabra[$i].$palabra[$j];
                if ($tmp==$arraypalabras[0])
                {
                    echo "<br>";
                    echo "Salida: ".$palabra[$i].",".$palabra[$j];
                }
            }
        }
    }
    ?>