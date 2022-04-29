<?php

/**
 * Add advanced link field type to "WordPlate Extended"
 *
 * @link       https://schrittweiter.de
 * @since      1.0.0
 *
 */

/**
 * Extend "WordPlate Extended" with advanced link by following plugin: Advanced Custom Fields: Extended PRO
 *
 * @link       https://www.acf-extended.com/features/fields/advanced-link
 * @version    0.8.8.6
 *
 * @author     ACF Extended <https://www.acf-extended.com/>
 */

namespace Schrittweiter\Acf\Fields;

use WordPlate\Acf\Fields\Settings\ConditionalLogic;
use WordPlate\Acf\Fields\Settings\Instructions;
use WordPlate\Acf\Fields\Settings\Required;
use WordPlate\Acf\Fields\Settings\Wrapper;
use WordPlate\Acf\Fields\Field;

class AdvancedLink extends Field
{

	use Required;
	use ConditionalLogic;
	use Wrapper;
	use Instructions;

	protected ?string $type = 'acfe_advanced_link';

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

	/**
	 * Filter by Post Type
	 * Options: (custom) post type slug
	 *
	 * @param array $value
	 *
	 * @return $this
	 */
	public function postType(array $value): self
	{
		$this->settings['post_type'] = $value;

		return $this;
	}

	/**
	 * Filter by Taxonomy
	 * Options: custom taxonomy ids
	 *
	 * @param array $value
	 *
	 * @return $this
	 */
	public function taxonomy(array $value): self
	{
		$this->settings['taxonomy'] = $value;

		return $this;
	}
}
