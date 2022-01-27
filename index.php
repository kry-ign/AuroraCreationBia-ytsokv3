<?php

class Flat
{
    private int $password;

    private bool $closed = true;

    public function __construct(int $passCode)
    {
        if (strlen((string) $passCode) < 6) {
            echo "bład";
        } else {
            $this->password = $passCode;
            echo "pass jest prawdiłowy";
        }
    }

    Public function close(): void
    {
        $this->closed = false;
    }

    public function open($code): void
    {
        if ($code === $this->password) {
            $this->closed = true;
            echo "mieszkanie jest otware";
        } else {
            echo "mieszkanie jest zamkniete";
        }
    }

    public function isOpen(): bool
    {
        return !$this->closed;
    }
}

$passCode = rand(000000,999999);
$myFlat = new Flat(123);
var_dump($myFlat);
