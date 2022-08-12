<?php
declare(strict_types=1);

namespace Graywings\RuntimeException;

use Graywings\Exceptions\GraywingsException;

class RangeException extends \RangeException implements GraywingsException
{
}
