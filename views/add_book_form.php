<?php
    $authorsNum = getAuthorsNum( $_GET );
    $genresNum = getGenresNum( $_GET );
?>
<div>Συμπληρώστε τα επίσημα στοιχεία του αρχικού βιβλίου</div>
<form action="add_book.php?authors=<?php echo $authorsNum ?>&genres=<?php echo $genresNum ?>" method="post" enctype="multipart/form-data" >
    <input type="text" name="title" id="title" placeholder="Τίτλος Βιβλίου" />
    <input type="text" name="description" id="description" placeholder="Περίληψη Βιβλίου" />
    <input type="file" name="cover_img" id="cover_img" placeholder="Εικόνα Εξωφύλλου" />
    <?php
        for ( $i = 0; $i < $authorsNum; $i++ ) {
    ?>
            <input type="text" name="authors[]" placeholder="Συγγραφέας" />
    <?php
        }
    ?>
    <?php
        for ( $i = 0; $i < $genresNum; $i++ ) {
    ?>
            <input type="text" name="genres[]>" placeholder="Είδος Βιβλίου" />
    <?php
        }
    ?>
    <input type="text" name="isbn" id="isbn" placeholder="ISBN" />
    <input type="submit" value="Καταχώριση Βιβλίου" />
</form>