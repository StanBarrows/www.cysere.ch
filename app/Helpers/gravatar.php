<?php

function gravatar($email)
{
    $hash = md5(strtolower(trim($email)));
    return "https://www.gravatar.com/avatar/$hash";
}


