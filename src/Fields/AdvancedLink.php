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

use WordPlate\Acf\Fields\Attributes\ConditionalLogic;
use Schrittweiter\Acf\Fields\Attributes\GraphQl;
use WordPlate\Acf\Fields\Attributes\Instructions;
use WordPlate\Acf\Fields\Attributes\Required;
use WordPlate\Acf\Fields\Attributes\Wrapper;
use WordPlate\Acf\Fields\Field;

class AdvancedLink extends Field
{

    use GraphQl;
	use Required;
	use ConditionalLogic;
	use Wrapper;
	use Instructions;

	protected $type = 'acfe_advanced_link';

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
		$this->config->set('post_type', $value);

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
		$this->config->set('taxonomy', $value);

		return $this;
	}
}
