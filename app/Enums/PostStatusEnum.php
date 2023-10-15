<?php

namespace App\Enums;

enum PostStatusEnum: int
{
    case DRAFT = 0;
    case SCHEDULED = 1;
    case PUBLISHED = 2;
    case ARCHIVED = 3;
    case DELETED = 4;
}

