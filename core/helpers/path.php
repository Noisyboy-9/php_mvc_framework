<?php

function path($pathFromRoot): string
{
    return __DIR__ . "/../../$pathFromRoot";
}