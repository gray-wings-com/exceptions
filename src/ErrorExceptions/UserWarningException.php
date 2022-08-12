<?php
declare(strict_types=1);

namespace Graywings\Exceptions\ErrorExceptions;

use Graywings\Exceptions\GraywingsException;

class UserWarningException extends \ErrorException implements GraywingsException
{
}
