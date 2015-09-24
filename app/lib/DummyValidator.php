<?php

use Zizaco\Confide\ConfideUserInterface;
use Zizaco\Confide\UserValidatorInterface;

class DummyValidator implements UserValidatorInterface
{
    public function validate(ConfideUserInterface $user)
    {
        return true;
    }
}