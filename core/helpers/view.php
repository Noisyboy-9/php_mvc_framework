<?php

function view(string $viewName): void
{
    include_once __DIR__ . "/../../views/$viewName.view.php";
}