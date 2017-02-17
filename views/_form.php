<form action="index.php" method="post">
    <div class="form-group<?= isset($errors['tables_error'])?' has-error':'' ?>" >
        <label for="nbtables">Nombre de tables : </label>
        <input class="form-control" id="nbtables" type="text" name="nbtables" value="<?= $nbtables?$nbtables:''; ?>">
        <?php if (isset($errors['tables_error'])): ?>
            <span class="help-block"><?= $errors['tables_error'] ?></span>
        <?php endif; ?>
    </div>
    <div class="form-group<?= isset($errors['tables_error'])?' has-error':'' ?>">
        <label for="nbvaleurs">Nombre de valeurs : </label>
        <input class="form-control" id="nbvaleurs" type="text" name="nbvaleurs" value="<?= $nbvalues?$nbvalues:''; ?>">
        <?php if (isset($errors['values_error'])): ?>
            <span class="help-block"><?= $errors['values_error'] ?></span>
        <?php endif; ?>
    </div>
    <input type="submit">
</form>
