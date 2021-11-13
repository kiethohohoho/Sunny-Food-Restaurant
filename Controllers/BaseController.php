<?php
class BaseController
{
    protected function view($path, $array = [])
    {
        foreach ($array as $key => $value) {
            $$key = $value;
        }
        return require($path);
    }
}