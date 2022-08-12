<?php
declare(strict_types=1);

namespace Graywings\RuntimeException;

use Graywings\Exceptions\GraywingsException;

class UnexpectedValueException extends \UnexpectedValueException implements GraywingsException
{
}
