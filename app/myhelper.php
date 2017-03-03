<?php
// My common functions
function tgl_indo($date)
{
    return    substr($date,9,2).'/'.substr($date,5,2).'/'.substr($date, 0,4);
}


?>