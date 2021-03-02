<?php


namespace ishop\base;


use ishop\Db;

abstract class Model
{
    public $attribute = [];
    public $errors = [];
    public $rules = [];

    public function __construct() {
        Db::instance();
    }
}