<?php
/**
 * Created by PhpStorm.
 * User: filanor
 * Date: 2019-04-02
 * Time: 17:57
 */
?>
</div><!-- Content -->
<div class = "footer">
<p>Пройденные темы</p>
<?php foreach ($themes as $theme) {?>
    <a href="<?= $theme['link'] ?>"><?= $theme['name'] ?></a>
<?php } ?>
</div>
</body>
</html>
<div></div>