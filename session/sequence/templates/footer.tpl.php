<div>
    <?php
    if($prevPage !== null) {
    ?>
    <div>
        <a href="<?php echo $prevPageUrl ?>">prev</a>
    </div>
    <?php
    } 
    if($nextPage !== null) {
    ?>
    <div>
        <a href="<?php echo $nextPageUrl ?>">next</a>
    </div>
    <?php
    }
    ?>
</div>