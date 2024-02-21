<?php

namespace App\DTO;

use Spatie\DataTransferObject\DataTransferObject;

class UserDTO extends DataTransferObject
{
    public string $name;
    public string $email;
    public string $password;
    public string $role;
}
