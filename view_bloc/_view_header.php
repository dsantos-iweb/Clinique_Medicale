<?php

?>

<header>
    <div id="logo"></div>
    <div id="nom_clinique"><span><?php echo 'Gestion agendas de la ' , NOM_CLINIQUE; ?></span></div>
    <div id="menu">
    <ul>

        <?php //


       foreach(get_employes() as $emp_id => $emp_data){
       // var_dump($emp_data);
       //var_dump(PARAM_EMP_NAME);

      echo '<li><a href="', $emp_id, '">', $emp_data[PARAM_EMP_NAME], '</a></li>';


        }


        ?>
    </ul>
    </div>

</header>
