<?php
namespace App\Entities;

class OktatasiModEntity
{
    protected $id;
    protected $megnevezes;
    protected $idotartam_perc;

    public function __get($key)
    {
        if (property_exists($this, $key))
        {
            return $this->$key;
        }
    }

    public function __set($key, $value)
    {
        if (property_exists($this, $key))
        {
            $this->$key = $value;
        }
    }
}