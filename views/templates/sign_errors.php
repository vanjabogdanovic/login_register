<?php

if (isset($_SESSION['errors'])) {
    foreach ($_SESSION['errors'] as $key => $value) {
        echo "<p class='text-danger'>" . $value . "</p>";
    }
}
