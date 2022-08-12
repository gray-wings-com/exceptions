<?php
declare(strict_types=1);

namespace Graywings\Exceptions\ErrorExceptions;

use Graywings\Exceptions\GraywingsException;

class RecoverableErrorException extends \ErrorException implements GraywingsException
{
}
