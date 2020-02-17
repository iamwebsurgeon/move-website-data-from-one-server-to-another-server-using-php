<?php
/*
  Transfer Website Data From One Server to Another Server using PHP Copy  
*/

/* Source File URL */
$remote_file_url = 'origin file name';

/* New file name and path for this file */
$local_file = 'files.zip';

/* Copy the file from source url to server */
$copy = copy( $remote_file_url, $local_file );

/* Add notice for success/failure */
if( !$copy ) {
    echo "Oops! failed to copy $file...\n";
}
else{
    echo "WOW! success to copy $file...\n";
}

?>