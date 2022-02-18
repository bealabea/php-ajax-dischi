<?php

// includo il mio array php
include "../database/db.php";

// specifico il tipo di contenuto (JSON)
header("Content-Type: application/json");

// converto il mio array php in array JSON
echo json_encode($discList);

?>