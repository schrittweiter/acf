<?php

/**
 * Add image selector field type to "WordPlate Extended"
 *
 * @link       https://schrittweiter.de
 * @since      1.0.0
 *
 */

/**
 * Extend "WordPlate Extended" with image selector by following plugin: Advanced Custom Fields: Extended PRO
 *
 * @link       https://www.acf-extended.com/features/fields/image-selector
 * @version    0.8.8.6
 *
 * @author     ACF Extended <https://www.acf-extended.com/>
 */

namespace Schrittweiter\Acf\Fields;

use Schrittweiter\Acf\Fields\Attributes\GraphQL;
use WordPlate\Acf\Fields\Attributes\Choices;
use WordPlate\Acf\Fields\Attributes\ConditionalLogic;
use WordPlate\Acf\Fields\Attributes\DefaultValue;
use WordPlate\Acf\Fields\Attributes\DirectionLayout;
use WordPlate\Acf\Fields\Attributes\Instructions;
use WordPlate\Acf\Fields\Attributes\Multiple;
use WordPlate\Acf\Fields\Attributes\Nullable;
use WordPlate\Acf\Fields\Attributes\Required;
use WordPlate\Acf\Fields\Attributes\ReturnFormat;
use WordPlate\Acf\Fields\Attributes\Wrapper;
use WordPlate\Acf\Fields\Field;

class ImageSelector extends Field
{

    use GraphQL;
	use DefaultValue;
	use Choices;
	use Multiple;
	use Nullable;
	use ReturnFormat;
	use DirectionLayout;
	use ConditionalLogic;
	use Instructions;
	use Required;
	use Wrapper;

	protected $type = 'acfe_image_selector';

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
	 * Container
	 * Choose the image container width, height and border size
	 *
	 * @param string $width
	 * @param string $height
	 * @param int $border
	 * @return $this
	 */
	public function container(string $width = '', string $height = '', int $border = 4): self
	{
		$this->config->set('width', $width);
		$this->config->set('height', $height);
		$this->config->set('border', $border);

		return $this;
	}

	/**
	 * Image size
	 * Choose the default image size
	 *
	 * @return $this
	 */
	public function imageSize(string $size): self
	{
		$this->config->set('image_size', $size);

		return $this;
	}
}
