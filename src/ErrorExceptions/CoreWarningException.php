<?php
declare(strict_types=1);

namespace Graywings\Exceptions\ErrorExceptions;

use Graywings\Exceptions\GraywingsException;

class CoreWarningException extends \ErrorException implements GraywingsException
{
}
