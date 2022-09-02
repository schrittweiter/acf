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

use Schrittweiter\Acf\Fields\Attributes\GraphQL;
use WordPlate\Acf\Fields\Field;
use WordPlate\Acf\Fields\Settings\ConditionalLogic;
use WordPlate\Acf\Fields\Settings\DefaultValue;
use WordPlate\Acf\Fields\Settings\Instructions;
use WordPlate\Acf\Fields\Settings\Multiple;
use WordPlate\Acf\Fields\Settings\Nullable;
use WordPlate\Acf\Fields\Settings\Required;
use WordPlate\Acf\Fields\Settings\Wrapper;

class SVGIcon extends Field
{
    use GraphQL;
	use Instructions;
	use DefaultValue;
	use Required;
	use Multiple;
	use Nullable;
	use Wrapper;
	use ConditionalLogic;

	protected ?string $type = 'svg_icon';

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
