<?php
/**
 * Created by PhpStorm.
 * User: hirayamatakaaki
 * Date: 2018/04/11
 * Time: 8:41
 */
?>
<form action="myapi" method="post">
    <?php echo csrf_field(); ?>

    <input type="text" name="param1"></input>
    <input type="text" name="param2"></input>
    <input type="submit"></input>

</form>