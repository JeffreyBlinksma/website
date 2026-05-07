<?php
echo("v3.0.1 | ");
if (file_exists($_SERVER['DOCUMENT_ROOT']."/.deploy-revision")) {
    $hash = file_get_contents($_SERVER['DOCUMENT_ROOT']."/.deploy-revision");
    echo substr($hash, 0, 7);
} else {
    echo "No commit hash (running local?)";
}
?>

