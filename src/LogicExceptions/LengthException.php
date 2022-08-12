<?php
declare(strict_types=1);

namespace Graywings\Exceptions\LogicExceptions;

use Graywings\Exceptions\GraywingsException;

class LengthException extends \LengthException implements GraywingsException
{
}
