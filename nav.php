<nav><ul>
<?php

// An 2D array of pages and their paths
$pages = array(
    array('Home', '/index.php'),
    array('Sign Up', '/signup.php'),
    array('Login', '/login.php'),
    array('Contact', '/contact.php')
);

foreach ($pages as $page) {
    echo '<li';

    // If this is the current page, echo
    // the id to be referenced in the stylesheet.
    if ($_SERVER['PHP_SELF'] == $page[1]) {
        echo ' id="selected"';
    }

    echo '><a href="', $page[1], '">', $page[0], '</a></li>';
}

?>
</ul></nav>
