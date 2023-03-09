<?php

namespace App\Models;

abstract class ResponseType
{
    const SUCCESS = array('type' => "success");
    const ERROR = array('type' => "error");
}
