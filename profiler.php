<?php
    require 'models/db_functions.php';
    require 'models/comment_functions.php';
    // if note logged in , redirect to login page
    // better replace userid with profileid as a better fitting name
    if ( !isset( $_SESSION[ 'userid' ] ) ) {
        header( 'Location: login.php' );
        die();
    }
    // get user data from db
    $data = getUserData( $_GET[ 'uid' ] );
    if ( !$data ) {
        header( 'Location: 404.php' );
        die();
    }
    require 'views/header.php';
    require 'views/profile.php';
    $comments = getProfileComments( $_GET[ 'uid' ] );
    require 'views/profile_comments.php';
    require 'views/footer.php';
?>
