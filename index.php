<!DOCTYPE html>
<?php
$nbtables = 0;
$nbvaleurs = 0;
if ( isset($_POST['nbtables']) && isset($_POST['nbvaleurs']) ){
    if ( is_numeric($_POST['nbtables']) && is_numeric($_POST['nbvaleurs']) ) {
        if ($_POST['nbtables'] >= 1 && $_POST['nbvaleurs'] >= 1) {
            $nbtables = intval($_POST['nbtables']);
            $nbvaleurs = intval($_POST['nbvaleurs']);
        }
    }
}
?>
<html lang="fr-be">
    <head>
        <meta charset="utf-8">
        <title>exr php</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style media="screen">
            body{
                padding: 2em;
            }
            [type="text"]{
                width: 3em;
                text-align: right;
            }
            table{
                border-collapse: collapse;
                margin-top: 2em;
            }
            tr:nth-child(2n), th:nth-child(2n), td:nth-child(2n){
                background-color: rgba(0, 0, 0, 0.1);
            }
            th, td{
                font-size: 20px;
                padding: 0.5em;
                border: 1px solid black;
                min-width: 2em;
                height: 2em;
                text-align: center;
            }
            .vide{
                border: none;
            }
        </style>
    </head>
    <body>
            <form action="index.php" method="post">
                <label for="nbtables">Nombre de tables : </label><input id="nbtables" type="text" name="nbtables" placeholder="<?= $nbtables ?>"><br><br>
                <label for="nbvaleurs">Nombre de valeurs : </label><input id="nbvaleurs" type="text" name="nbvaleurs" placeholder="<?= $nbvaleurs ?>"><br><br>
                <input type="submit">
            </form>

            <?php if($nbtables >= 1 && $nbvaleurs >= 1) : ?>
                <table>
                    <?php for($i=0; $i<=$nbvaleurs; $i++) : ?>
                        <tr>
                            <?php if($i == 0) : ?>
                                <?php for($j=0; $j<=$nbtables; $j++) : ?>
                                    <?php if($j == 0) : ?>
                                        <th class="vide">&nbsp;</th>
                                    <?php else : ?>
                                        <th scope="col"><?= $j ?></th>
                                    <?php endif; ?>
                                <?php endfor; ?>
                            <?php else : ?>
                                <?php for($j=0; $j<=$nbtables; $j++) : ?>
                                    <?php if($j == 0) : ?>
                                        <th scope="row"><?= $i ?></th>
                                    <?php else : ?>
                                        <td><?= $j * $i ?></td>
                                    <?php endif; ?>
                                <?php endfor; ?>
                            <?php endif; ?>
                        </tr>
                    <?php endfor; ?>
                </table>
            <?php else : ?>
                <p>Veuillez entrez un nombre entier positif&nbsp;!</p>
            <?php endif; ?>
    </body>
</html>
