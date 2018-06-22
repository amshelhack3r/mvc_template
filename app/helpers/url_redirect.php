<?php
// function that redirects users to a specific page
function redirect($page){
    header('location: '. URLROOT.'/'. $page);
}