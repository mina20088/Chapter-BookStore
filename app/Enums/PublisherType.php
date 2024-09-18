<?php

namespace App\Enums;

enum PublisherType :int
{
    case Trade = 1;
    case Academic = 2;
    case Professional = 3;
    case Self = 4;
    case Vanity = 5;
    case Independent = 6;


}
