<?php
function getSlug($url)
{
    $reqComic = explode('/', $url);
    return end($reqComic);
}