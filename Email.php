<?php
function email_validate($str):bool{
    return (preg_match("/^[a-z0-9]+(\.[a-z0-9]+)*\@([a-z]+)\.([a-z]+)$/i",$str));
}
?>
