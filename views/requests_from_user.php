<div class="group" >
    <div class="container" >
        <h1>Τα βιβλία που σας ζητήσατε</h1>
        <?php
        if ( empty( $requests ) ) {
        ?></li>Δεν έχετε ζητήσει κάποιο βιβλίο ακόμη</li><?php
        }
        foreach ( $requests as $request ) {
            ?><li>Ζητήσατε από το χρήστη <a href="profile.php?uid=<?php
            echo $request[ 'owner' ][ 'uid' ];
            ?>" ><?php
            echo $request[ 'owner' ][ 'username' ];
            ?></a> το βιβλίο <a href="bookcp.php?bcid=<?php
            echo $request[ 'bcid' ];
            ?>" ><?php echo $request[ 'title' ];
            ?></a>.
            </li><?php
        }
        ?></ul>
    </div>
</div>