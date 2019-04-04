<?php

$connection = mysqli_connect("localhost", "root", "Polemistis321", "highscore") or die("Could not connect");
mysqli_select_db($connection, "highscore") or die ("Could not select database");
