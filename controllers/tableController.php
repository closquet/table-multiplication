
<?php

require('settings.php');
if ( isset($_POST['nbtables']) ){
    if ( ctype_digit($_POST['nbtables']) ) {
        if (intval($_POST['nbtables']) >= 1) {
            $nbtables = intval($_POST['nbtables']);
        }else {
            $errors['tables_error'] = 'Oops, je ne peux calculer les tâbles que s\'il y en a plus d\'une.';
        }
    }else {
        $errors['tables_error'] = 'Oops, vous devez entrer un nombre entier de tâble.';
    }
}
if ( isset($_POST['nbvaleurs']) ){
    if ( ctype_digit($_POST['nbvaleurs']) ) {
        if (intval($_POST['nbvaleurs']) >= 1) {
            $nbvalues = intval($_POST['nbvaleurs']);
        }else {
            $errors['values_error'] = 'Oops, je ne peux calculer les valeurs que s\'il y en a plus d\'une.';
        }
    }else {
        $errors['values_error'] = 'Oops, vous devez entrer un nombre entier de tâble.';
    }
}
if($nbtables >= 1 && $nbvalues >= 1){
    $view = '_table.php';
}
require('layout.php');
?>
