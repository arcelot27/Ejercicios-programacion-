
<?php
    $num1= "6";
    $num2 = "5";
    $num3 = "2";

    if (($num1 == $num2) && ($num2 == $num3) AND ($num3 == $num1))
        {
            print "los numeros son iguales";
        }
    else 
    {
        if (($num1 > $num2) && ( $num1 > $num3))
        {
            print "el numero mayor es el primero con valor de: " .$num1. " el demedio es el segundo numero con valor de: " .$num2. " y el ultimo es el tercer numero de valor de: " .$num3;
        }
        else 
        {
            if (($num2 > $num3) && ($num2 > $num1))
            {
                print "el numero mayor es el segundo numero con valor de: " .$num2. " el demedio es el tercero con valor de:  " .$num3. " y el ultimo es el primero con valor de: " .$num1;
            }
            else
            {
                if (($num3 > $num1) && ($num3 > $num2))
                {
                    print "el  mayor es el tercer numero con valor de:  " .$num3. " es mayor que el primero con valor de:  " .$num1. " y el segundo con valor de: " .$num2;
                }
                else 
                {
                    if (($num3 < $num1) && ($num3 < $num2))
                    {
                        print "el  tercer numero con valor de:  " .$num3. " es menor que el primero  con valor de: " .$num1. " y el segundo con valor de: " .$num2;
                    }
                    else
                    {
                        if (($num2 < $num3) && ($num2 < $num1))
                        {
                            print "el  segundo numero  con valor de: " .$num2. " es menor que el segundo con valor de:  " .$num2. " y el primero con valor de: " .$num1;
                        }
                        else
                        {
                            if (($num1 < $num2) && ($num1 < $num3))
                            {
                                print "el  primer numero con valor de:  " .$num1. " es menor que el segundo con valor de:  " .$num2. " y el tercero con valor de: " .$num3;
                            }
                        }
                    }
                }
                    
            }
        }
    }
   
?>









