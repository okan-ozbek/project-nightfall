<?php

namespace App\Enums;

enum UserRoleEnum : string
{
    case GUEST = 'guest';
    case ADMIN = 'admin';
    case SERVICE_DESK = 'service-desk';
}
