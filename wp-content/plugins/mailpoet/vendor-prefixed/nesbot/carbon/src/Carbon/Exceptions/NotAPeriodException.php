<?php
namespace MailPoetVendor\Carbon\Exceptions;
if (!defined('ABSPATH')) exit;
use Exception;
use InvalidArgumentException as BaseInvalidArgumentException;
class NotAPeriodException extends BaseInvalidArgumentException implements InvalidArgumentException
{
 public function __construct($message, $code = 0, Exception $previous = null)
 {
 parent::__construct($message, $code, $previous);
 }
}
