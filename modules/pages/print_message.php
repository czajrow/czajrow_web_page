<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2" style="background: #999; border-radius: 20px; text-align: center">
        <?php
        if (isset($_POST['topic']) && isset($_POST['message'])) {
            ?>
            <h1>This mail will be sent to site owner:</h1>
            <hr>
            <h2>Topic:</h2>
            <h4 style="background: #aaa; padding-top: 10px; padding-bottom: 10px"><?php echo $_POST['topic'] ?></h4>
            <h2>Message:</h2>
            <h4 style="background: #aaa;  padding-top: 10px; padding-bottom: 10px"><?php echo $_POST['message'] ?></h4>

            <?php
        } else {
            ?>
            <div class="col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-4 alert-danger"
                 style="text-align: center; padding: 10px 20px 5px 10px; margin-top: 5%; margin-bottom: 5%">
                <p style="margin: 0">Eroor 404: No values from form!</p>
            </div>
            <?php
        }
        ?>
    </div>
</div>
