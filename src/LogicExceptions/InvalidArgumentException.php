<?php
declare(strict_types=1);

namespace Graywings\Exceptions\LogicExceptions;

use Graywings\Exceptions\GraywingsException;

class InvalidArgumentException extends \InvalidArgumentException implements GraywingsException
{
}
