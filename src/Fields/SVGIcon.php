<?php

/**
 * Add SVG Icon picker field type to "WordPlate Extended"
 *
 * @link       https://schrittweiter.de
 * @since      1.0.0
 *
 */

/**
 * Extend "WordPlate Extended" by following plugin: ACF SVG Icon Field
 *
 * @link       https://github.com/7studio/acf-svg-icon
 * @version    1.0.1
 *
 * @author     Xavier Zalawa <https://github.com/7studio>
 */

namespace Schrittweiter\Acf\Fields;

use Schrittweiter\Acf\Fields\Attributes\GraphQl;
use WordPlate\Acf\Fields\Field;
use WordPlate\Acf\Fields\Attributes\ConditionalLogic;
use WordPlate\Acf\Fields\Attributes\DefaultValue;
use WordPlate\Acf\Fields\Attributes\Instructions;
use WordPlate\Acf\Fields\Attributes\Multiple;
use WordPlate\Acf\Fields\Attributes\Nullable;
use WordPlate\Acf\Fields\Attributes\Required;
use WordPlate\Acf\Fields\Attributes\Wrapper;

class SVGIcon extends Field
{
    use GraphQl;
	use Instructions;
	use DefaultValue;
	use Required;
	use Multiple;
	use Nullable;
	use Wrapper;
	use ConditionalLogic;

	protected $type = 'svg_icon';

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
