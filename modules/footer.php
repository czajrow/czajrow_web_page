<!--Footer starts here...-->
<?php
include "config/config.php";
?>
<footer class="panel-footer" style="margin-top: 50px">
    <?php if (isset($footer['copyright'])) { ?>&copy;&nbsp;<?= $footer['copyright'] ?> <?php } ?>
    &nbsp;
    <br>
    <?php if (isset($footer['company'])) { ?><?= $footer['company']; ?><?php } ?>
</footer>
<!--Footer ends here...-->
