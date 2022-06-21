<?php

/**
 * Add FocusPoint field type to "WordPlate Extended"
 *
 * @link       https://schrittweiter.de
 * @since      1.0.0
 *
 */

/**
 * Extend "WordPlate Extended" by following plugin: ACF: FocusPoint
 *
 * @link       https://github.com/ooksanen/acf-focuspoint
 * @version    1.2.0
 *
 * @author     ooksanen <https://github.com/ooksanen>
 */

namespace Schrittweiter\Acf\Fields;

use Schrittweiter\Acf\Fields\Attributes\GraphQl;
use WordPlate\Acf\Fields\Field;
use WordPlate\Acf\Fields\Attributes\ConditionalLogic;
use WordPlate\Acf\Fields\Attributes\Instructions;
use WordPlate\Acf\Fields\Attributes\Library;
use WordPlate\Acf\Fields\Attributes\MimeTypes;
use WordPlate\Acf\Fields\Attributes\Nullable;
use WordPlate\Acf\Fields\Attributes\PreviewSize;
use WordPlate\Acf\Fields\Attributes\Required;
use WordPlate\Acf\Fields\Attributes\Wrapper;

class FocusPoint extends Field
{
    use GraphQl;
	use Instructions;
	use Required;
	use Nullable;
	use Wrapper;
	use Library;
	use MimeTypes;
	use PreviewSize;
	use ConditionalLogic;

	protected $type = 'focuspoint';

	/**
	 * set defaults on call
	 *
	 * @param string $label
	 * @param string|null $name
	 */
	public function __construct(string $label, ?string $name = null)
	{
		parent::__construct($label, $name);
	}
}
