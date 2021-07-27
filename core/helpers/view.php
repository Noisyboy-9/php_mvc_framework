<?php

function view(string $viewName): void
{
    include_once __DIR__ . "/../../public/views/$viewName.view.php";
}