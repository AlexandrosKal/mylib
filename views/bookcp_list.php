<div class="group" >
    <div class="container" >
        <h2>Αντίτυπα προς ανταλλαγή</h2>
        <table class="table table-striped" >
            <thead>
                <tr>
                    <td>Τίτλος</td>
                    <td>Χρήστης που το διαθέτει</td>
                    <td>Ημερομηνία Καταχώρυσης</td>
                    <td>Εικονα αντιτύπου</td>
                    <td>Πληροφορίες</td>
                </tr>
            </thead>
            <tbody><?php
            if ( !$bookCopies ) {
                ?><tr>
                    <td colspan="5" >Κανένα αντίτυπο διαθέσιμο για ανταλλαγή</td>
                </tr><?php
            }
            else {
                foreach ($bookCopies as $bookCopy ) {
            ?><tr>
                <td><a href="<?php echo 'bookcp.php?bcid=' . $bookCopy[ 'bcid' ];?>"><?php  echo $bookCopy[ 'title' ];?></a></td>
                <td><a href="profiler.php?uid=<?php echo $bookCopy[ 'owner' ][ 'uid' ]; ?>"><?php echo $bookCopy[ 'owner' ][ 'username' ]; ?></a></td>
                <td><?php echo formatDate( $bookCopy[ 'timeCreated' ] ); ?></td>
                <td><img id="bcopy-thumbnail" src="<?php echo $bookCopy[ 'image' ]; ?>"/></td>
                <td><?php
                    if( $bookCopy[ 'given' ] ) {
                        ?>Δόθηκε στον/στην <a href="profiler.php?uid=<?php echo $bookCopy[ 'receiver' ][ 'uid' ]; ?>" ><?php echo $bookCopy[ 'receiver' ][ 'username' ]; ?></a>.<?php
                    }
                    else {
                        ?><a href="request.php?bcid=<?php echo $bookCopy[ 'bcid' ]; ?>" >Το θέλω!</a><?php
                    }
                ?></td>
            </tr><?php
                }
        }
    ?></div>
        <tr class="center" >
            <td colspan="5" class="center" ><a class="btn btn-primary full-width" role="button" href="<?php echo createUrl( 'add_book_cp.php', [], [ 'bid' ] ); ?>" >Δήλωσε αντίτυπο του βιβλίου για ανταλλαγή</a></td>
        </tr>
        </tbody>
        </table>
</div>
