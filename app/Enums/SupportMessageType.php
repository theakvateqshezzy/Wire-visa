<?php

namespace App\Enums;


enum SupportMessageType: string
{

  case UNKNOWN = 'unknown';
  case WEB = 'web';
  case APP = 'app';
  case DASHBOARD = 'dashboard';
  
}