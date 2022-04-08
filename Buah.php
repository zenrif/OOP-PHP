<?php

abstract class Buah
{
    protected $warna;

    abstract public function caraMakan();

    public function setWarna($warna)
    {
        $this->warna = $warna;
    }

    public function getWarna()
    {
        return $this->warna;
    }
}
