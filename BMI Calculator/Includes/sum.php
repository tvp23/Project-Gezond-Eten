<?php

//Var
$gender = $_POST["Gender"];

//Man
if ($gender == "Man")
{
    //Dry check & calculator
    function check()
    {
        //Leeftijd Check
        $leeftijd = $_POST["Leeftijd"];
        switch ($leeftijd) {
            case 6:
                $a =14.03;
                $b =17.55;
                $c =19.78;
                $adult = false;
            break;
            case 7:
                $a =14.06;
                $b =17.92;
                $c =20.63;
                $adult = false;
            break;
            case 8:
                $a =14.20;
                $b =18.44;
                $c =21.60;
                $adult = false;
            break;
            case 9:
                $a =14.41;
                $b =19.10;
                $c =22.77;
                $adult = false;
            break;
            case 10:
                $a =14.69;
                $b =19.84;
                $c =24.00;
                $adult = false;
            break;
            case 11:
                $a =15.03;
                $b =20.55;
                $c =25.10;
                $adult = false;
            break;
            case 12:
                $a =15.47;
                $b =21.22;
                $c =26.02;
                $adult = false;
            break;
            case 13:
                $a =15.98;
                $b =21.91;
                $c =26.84;
                $adult = false;
            break;
            case 14:
                $a =16.54;
                $b =22.62;
                $c =27.63;
                $adult = false;
            break;
            case 15:
                $a =17.13;
                $b =23.29;
                $c =28.30;
                $adult = false;
            break;
            case 16:
                $a =17.70;
                $b =23.90;
                $c =28.88;
                $adult = false;
            break;
            case 17:
                $a = 18;
                $b = 25;
                $c = 30;
                $adult = false;
             break;
            default:
            {
                $adult = true;
                $a = 18.5;
                $b = 25;
                $c = 27;
                $d = 30;
                $e = 40;
            }
        }

        //calculator
        $gewicht = $_POST["Gewicht"];
        $lengte = $_POST["lengte"];
        $lengtem = $lengte / 100;
        $lengte2 = $lengtem * $lengtem;
        $bmi = $gewicht / $lengte2;
        //check
        if ($adult == false)
        {
            if ($bmi < $a)
            {
                $advies = "Ondergewicht";
            }
            else if ($bmi < $b)
            {
                $advies = "Gezond gewicht";
            }
            else if ($bmi < $c)
            {
                $advies = "Overgewicht";
            }
            else if ($bmi > $c)
            {
                $advies = "Obesitas";
            }
        }
       
        else
        {
            if ($bmi < $a)
            {
                $advies = "Ondergewicht";
            }
            else if ($bmi < $b)
            {
                $advies = "Gezond gewicht";
            }
            else if ($bmi < $c)
            {
                $advies = "Licht overgewicht";
            }
            else if ($bmi < $d)
            {
                $advies = "Matig overgewicht";
            }
            else if ($bmi < $e)
            {
                $advies = "Ernstig overgewicht";
            }
            else if ($bmi > $e)
            {
                $advies = "Gevaarlijk overgewicht";
            }
        }

        echo $bmi;
        echo $advies;
    }
}


//Vrouw
else
{

    //Dry Check
    function check()
    {
        //calculator
        $gewicht = $_POST["Gewicht"];
        $lengte = $_POST["lengte"];
        $lengtem = $lengte / 100;
        $lengte2 = $lengtem * $lengtem;
        $bmi = $gewicht / $lengte2;

        //Leeftijd
        $leeftijd = $_POST["Leeftijd"];
        switch ($leeftijd) {
            case 6:
                $a =13.92;
                $b =17.34;
                $c =19.65;
                $adult = false;
                break;
            case 7:
                $a =14.00;
                $b =17.75;
                $c =20.51;
                $adult = false;
                break;
            case 8:
                $a =14.16;
                $b =18.35;
                $c =21.57;
                $adult = false;
                break;
            case 9:
                $a =14.42;
                $b =19.07;
                $c =22.81;
                $adult = false;
            break;
            case 10:
                $a =14.78;
                $b =19.86;
                $c =24.11;
                $adult = false;
            break;
            case 11:
                $a =15.25;
                $b =20.74;
                $c =25.42;
                $adult = false;
            break;
            case 12:
                $a =15.83;
                $b =21.68;
                $c =26.67;
                $adult = false;
            break;
            case 13:
                $a =16.43;
                $b =22.58;
                $c =27.76;
                $adult = false;
            break;
            case 14:
                $a =17.01;
                $b =23.34;
                $c =28.57;
                $adult = false;
            break;
            case 15:
                $a =17.52;
                $b =23.94;
                $c =29.11;
                $adult = false;
            break;
            case 16:
                $a =17.95;
                $b =24.37;
                $c =29.43;
                $adult = false;
            break;
            case 17:
                $a =18;
                $b =25;
                $c =30;
                $adult = false;
            break;
            default:
            {
                $adult = true;
                $a = 18.5;
                $b = 25;
                $c = 27;
                $d = 30;
                $e = 40;
            }
        }
            
        //check
        if ($adult == false)
        {
            if ($bmi < $a)
            {
                $advies = "Ondergewicht";
            }
            else if ($bmi < $b)
            {
                $advies = "Gezond gewicht";
            }
            else if ($bmi < $c)
            {
                $advies = "Overgewicht";
            }
            else if ($bmi > $c)
            {
                $advies = "Obesitas";
            }
        }
       
        else
        {
            if ($bmi < $a)
            {
                $advies = "Ondergewicht";
            }
            else if ($bmi < $b)
            {
                $advies = "Gezond gewicht";
            }
            else if ($bmi < $c)
            {
                $advies = "Licht overgewicht";
            }
            else if ($bmi < $d)
            {
                $advies = "Matig overgewicht";
            }
            else if ($bmi < $e)
            {
                $advies = "Ernstig overgewicht";
            }
            else if ($bmi > $e)
            {
                $advies = "Gevaarlijk overgewicht";
            }
        }
        echo $bmi;
        echo $advies;
    }
}