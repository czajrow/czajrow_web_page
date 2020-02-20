<?php
    $FOLDER = 'images/';
    $TYPES = array ('.jpg', '.png');
    $MEDIATYPES = array('image/jpeg', 'image/png');
    $DATEFORMAT = "Y.m.d. H:i";
    $MAXSIZE = 500*1024;

    $images = array();
    $reader = opendir($FOLDER);
    while (($file = readdir($reader)) !== false) {
        if (is_file($FOLDER.$file)) {
            $end = strtolower(substr($file, strlen($file)-4));
            if (in_array($end, $TYPES)) {
                $images[$file] = filemtime($FOLDER.$file);
            }
        }
    }
     closedir($reader);
?>


<div class="row">
    <div
    class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2"
    style="background: #999; border-radius: 20px; text-align: center">

        <h1 style="margin-bottom: 0">Gallery</h1>
        <form method="post" action="./?page=upload">
           <button
               class="btn btn-primary"
               style="margin-bottom: 20px"
               type="submit">
               Upload photos
           </button>
        </form>


        <div style="margin: 0 auto; width: 620px;">
            <?php
            arsort($images);
            foreach($images as $file => $date)
            {
            ?>
               <div style="display: inline-block;">
                   <a href="<?php echo $FOLDER.$file ?>">
                       <img style="width: 200px;" src="<?php echo $FOLDER.$file ?>">
                   </a>
                   <p>Name:  <?php echo $file; ?></p>
                   <p>Date:  <?php echo date($DATEFORMAT, $date); ?></p>
               </div>
            <?php
            }
            ?>
        </div>




    </div>
</div>
