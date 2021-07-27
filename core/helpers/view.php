<?php

function view(string $viewName): void
{
    include_once path("views/$viewName.view.php");
}