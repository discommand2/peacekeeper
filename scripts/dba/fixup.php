<?php

// Can be used as a template for future DB fixes.

// Database connection
$db = mysqli_connect("127.0.0.1", "peacekeeper", "peacekeeper", "peacekeeper");

// Fetch all transportID and class from the transports table
$result = $db->query("SELECT something FROM something");
while ($row = $result->fetch_assoc()) {
    // Do something
}
