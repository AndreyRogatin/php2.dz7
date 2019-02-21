<table border="1" cellpadding="5">
    <?php foreach ($models as $model) { ?>
    <tr>
        <?php foreach ($funcs as $func) { ?>
        <td>
            <?php echo $func($model); ?>
        </td>
        <?php } ?>
    </tr>
    <?php } ?>
</table>