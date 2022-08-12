<?php
declare(strict_types=1);

namespace Graywings\Exceptions\LogicExceptions;

use Graywings\Exceptions\GraywingsException;

class BadMethodCallException extends \BadMethodCallException implements GraywingsException
{
}
