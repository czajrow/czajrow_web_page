<?php
    $FOLDER = './images/';
    $TYPES = array ('.jpg', '.png');
    $MEDIATYPES = array('image/jpeg', 'image/png');
    $DATEFORMAT = "Y.m.d. H:i";
    $MAXSIZE = 500*1024;

    $message = array();

    if (isset($_POST['send'])) {
        foreach($_FILES as $file) {
            if ($file['error'] == 4);   // Thre is no file to uplad
            elseif (!in_array($file['type'], $MEDIATYPES))
                $message[] = " incorrect type: " . $file['name'];
            elseif ($file['error'] == 1   // The file size exceeds the maximum value given in php.ini
                        or $file['error'] == 2   // The file size exceeds the maximum value given in the HTML Form
                        or $file['size'] > $MAXSIZE)
                $uzenet[] = " Too large file: " . $file['name'];
            else {
                $finalplace = $FOLDER.strtolower($file['name']);
                if (file_exists($finalplace))
                    $message[] = " already exist: " . $file['name'];
                else {
                    move_uploaded_file($file['tmp_name'], $finalplace);
                    $message[] = ' Ok: ' . $file['name'];
                }
            }
        }
    }
?>

<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2" style="background: #999; border-radius: 20px">
        <h1>Upload photos</h1>

        <?php
            if (!empty($message))
            {
                echo '<ul>';
                foreach($message as $mes)
                    echo "<li>$mes</li>";
                echo '</ul>';
            }
        ?>
        <form action="?page=upload" method="post"
                    enctype="multipart/form-data">
            <label>First:
                <input type="file" name="first" required>
            </label>
            <label>Second:
                <input type="file" name="second">
            </label>
            <label>Third:
                <input type="file" name="third">
            </label>
            <input type="submit" name="send">
        </form>

    </div>
</div>
