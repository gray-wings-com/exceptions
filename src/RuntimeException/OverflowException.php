<?php
declare(strict_types=1);

namespace Graywings\RuntimeException;

use Graywings\Exceptions\GraywingsException;

class OverflowException extends \OverflowException implements GraywingsException
{
}
