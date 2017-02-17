<?php require('_form.php'); ?>
<table class="table table-stiped table-bordered">
<caption><?= sprintf($caption, $nbvalues, $nbtables); ?></caption>
<?php for($i=0; $i<=$nbvalues; $i++) : ?>
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
