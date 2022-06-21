<?php

/**
 * Enhances the functionality of the „Advanced Custom Fields“ plugin with easy-to-edit tables.
 *
 * @link       https://schrittweiter.de
 * @since      1.0.0
 *
 */

/**
 * Extend "WordPlate Extended" by following plugin: Advanced Custom Fields: Table Field'
 *
 * @link       https://de.wordpress.org/plugins/advanced-custom-fields-table-field/
 * @version    1.3.14
 *
 * @author     Johann Heyne <https://profiles.wordpress.org/jonua/>
 */

namespace Schrittweiter\Acf\Fields;

use Schrittweiter\Acf\Fields\Attributes\GraphQL;
use WordPlate\Acf\Fields\Field;
use WordPlate\Acf\Fields\Attributes\ConditionalLogic;
use WordPlate\Acf\Fields\Attributes\Instructions;
use WordPlate\Acf\Fields\Attributes\Required;
use WordPlate\Acf\Fields\Attributes\Wrapper;

class Table extends Field
{
    use GraphQL;
	use Instructions;
	use Required;
	use Wrapper;
	use ConditionalLogic;

	protected $type = 'table';

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
