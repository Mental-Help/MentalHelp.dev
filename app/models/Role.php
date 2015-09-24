<?php

use Esensi\Model\Model;
use Bbatsche\Entrust\Contracts\EntrustRoleInterface;
use Bbatsche\Entrust\Traits\EntrustRoleTrait;

class Role extends Model implements EntrustRoleInterface
{
    use EntrustRoleTrait;
}