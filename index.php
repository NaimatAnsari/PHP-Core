<?php

    $print = "Hello PHP World";  
    $cr = 7;

    echo $print . $cr;

    $a = 10;
    $b = 90;

    $result = $a + $b ; 

    echo $result;

    $naimat = 100 ;
    $fahad = 100 ;

    $sum = $naimat === $fahad ;
    echo $sum ;

    $x = 8 ;

    $y = $x % 2 == 0;

    echo $y;

    $a = 10;
    $b = 20;

    $c = $a + $b ;

    $c ? 30 : 40 ;

    echo $c ;

    if ($c == 30) {
        echo "Yes This is Code $c" ;
    } else {
       echo "try Again $c" ;
    }

    $age = 18 ;

    if ($age >= 18) {
        echo "Yes You can Vote $age" ;
    } else {
        echo "No You can't Vote $age" ;
    }

    $hasID = false;

    if ($age >= 18 || $hasID) {
        echo "Yes You Can Enter The Club Because Your Age is $age";
    } else {
        echo "No You Can't Enter The Club Because You Are Under 18";
    }
    
    $day = 3 ;

    switch ($day) {
        case 1:
            echo "Monday";
            break;
            case 2:
                echo "Tuesday";
                break;
                case 3:
                    echo "Wednesday";
                    break;
                    case 4:
                        echo "Thursday";
                        break;
                        case 5:
                            echo "Friday";
                            break;
                            case 6:
                                echo "Saturday";
                                break;
                                case 7:
                                    echo "Sunday";
                                    break;
                                default:
                                    echo "Invalid Day";
                                break;
    }
    


?>
