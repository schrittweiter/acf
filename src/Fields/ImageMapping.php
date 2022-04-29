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

use WordPlate\Acf\Fields\Field;
use WordPlate\Acf\Fields\Settings\ConditionalLogic;
use WordPlate\Acf\Fields\Settings\Instructions;
use WordPlate\Acf\Fields\Settings\Nullable;
use WordPlate\Acf\Fields\Settings\Required;
use WordPlate\Acf\Fields\Settings\Wrapper;

class ImageMapping extends Field
{
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
        $this->settings['image_field_label'] = $imageField;

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
        $this->settings['percent_based'] = true;

        return $this;
    }
}
