<?php
declare(strict_types=1);

namespace Graywings\Exceptions\ErrorExceptions;

use Graywings\Exceptions\GraywingsException;

class UserDeprecatedException extends \ErrorException implements GraywingsException
{
}
