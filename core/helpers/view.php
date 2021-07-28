<?php

function view(string $viewName, array $params = []): void
{
    extract($params);
    include_once path("views/$viewName.view.php");
}