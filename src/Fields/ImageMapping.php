<?php

/**
 * Add Image Hotspots field type to "WordPlate Extended"
 *
 * @link       https://schrittweiter.de
 * @since      1.0.0
 *
 */

/**
 * Extend "WordPlate Extended" by following plugin: ACF: Image Hotspots Field
 *
 * @link       https://wordpress.org/plugins/acf-image-mapping-hotspots/
 * @version    0.1
 *
 * @author     Alex James Bishop <https://github.com/aj-adl>
 */

namespace Schrittweiter\Acf\Fields;

use Schrittweiter\Acf\Fields\Attributes\GraphQL;
use WordPlate\Acf\Fields\Field;
use WordPlate\Acf\Fields\Attributes\ConditionalLogic;
use WordPlate\Acf\Fields\Attributes\Instructions;
use WordPlate\Acf\Fields\Attributes\Nullable;
use WordPlate\Acf\Fields\Attributes\Required;
use WordPlate\Acf\Fields\Attributes\Wrapper;

class ImageMapping extends Field
{
    use GraphQL;
    use Instructions;
    use Required;
    use Nullable;
    use Wrapper;
    use ConditionalLogic;

	protected $type = 'image_mapping';

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
	 * Image Field Label
	 * Field label of image to link to
	 *
	 * @param string $imageField
	 * @return $this
	 */
    public function imageField(string $imageField): self
    {
        $this->config->set('image_field_label', $imageField);

        return $this;
    }


	/**
	 * Percentage Based Coordinates'
     * Convert the coordinate pair to percentages instead of the raw X / Y pair
	 *
	 * @return $this
	 */
    public function percentBased(): self
    {
        $this->config->set('percent_based', true);

        return $this;
    }
}
