<?php

require './operations.php';
require './surfaces.php';

if(isset($_POST['nb-1']) && empty($_POST['nb-1']) !== true &&  isset($_POST['operator']) && $_POST['operator'] === 'fact')
{
    if(intval($_POST['nb-1']) !== 0){

        $nb1 = intval($_POST['nb-1']);

        if(empty($_POST['nb-2']) !== true)
        {
            $result = "Merci de ne saisir que le premier nombre pour calculer une factorielle";
        }

        else
        {
             $result = factorial($nb1);
        }
    }

    else
    {
        $result = "Merci de rentrer un nombre";
    }
}

else if(isset($_POST['nb-1']) && empty($_POST['nb-1']) !== true && isset($_POST['nb-2']) && empty($_POST['nb-2']) !== true &&  isset($_POST['operator']))
{




    if(intval($_POST['nb-1']) !== 0 && intval($_POST['nb-2']) !== 0)
    {
        $nb1 = intval($_POST['nb-1']);
        $nb2 = intval($_POST['nb-2']);

        if($_POST['operator'] === "+")
        {
            $result = add($nb1, $nb2);
        }
        else if($_POST['operator'] === "-")
        {
            $result = substract($nb1, $nb2);
        }
        else if($_POST['operator'] === "*")
        {
            $result = multiply($nb1, $nb2);
        }
        else if($_POST['operator'] === "/")
        {
            if($nb2 != 0)
            {
                $result = divide($nb1, $nb2);
            }
            else
            {
                $result = "On ne divise pas par 0 !";
            }
        }
        else if($_POST['operator'] === "%")
        {
            if($nb2 != 0)
            {
                $result = modulo($nb1, $nb2);
            }
            else
            {
                $result = "J'ai l'impression que tu le fais exprès pour tester les failles ..";
            }

        }
        else if($_POST['operator'] === "**")
        {
            $result = power($nb1, $nb2);
        }
        else if ($_POST['operator'] === "rectangle"){
            $result = rectangle_surface($nb1, $nb2);
        }
        else if ($_POST['operator'] === "triangleRectangle"){
            $result = rectangle_triangle_surface($nb1, $nb2);
        }
        else if ($_POST['operator'] === "triangleNormal"){
            $result = basic_triangle_surface($nb1, $nb2);
        }
        else if ($_POST['operator'] === "cercle"){
            $result = disk_surface($nb1, $nb2);
        }
    }

}

else
{
    $result = "Merci de bien vouloir rentrer un calcul à effectuer !";
}



require './calculator.phtml';

?>