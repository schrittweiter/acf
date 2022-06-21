<?php

/**
 * Add countries field type to "WordPlate Extended"
 *
 * @link       https://schrittweiter.de
 * @since      1.0.0
 *
 */

/**
 * Extend "WordPlate Extended" with button by following plugin: Advanced Custom Fields: Extended PRO
 *
 * @link       https://www.acf-extended.com/features/fields/countries
 * @version    0.8.8.7
 *
 * @author     ACF Extended <https://www.acf-extended.com/>
 */

namespace Schrittweiter\Acf\Fields;

use Schrittweiter\Acf\Fields\Attributes\GraphQl;
use WordPlate\Acf\Fields\Attributes\ConditionalLogic;
use WordPlate\Acf\Fields\Attributes\Instructions;
use WordPlate\Acf\Fields\Attributes\MinMax;
use WordPlate\Acf\Fields\Attributes\Multiple;
use WordPlate\Acf\Fields\Attributes\Nullable;
use WordPlate\Acf\Fields\Attributes\Required;
use WordPlate\Acf\Fields\Attributes\Wrapper;
use WordPlate\Acf\Fields\Field;

class Countries extends Field
{
    use GraphQl;
	use Required;
	use ConditionalLogic;
	use Wrapper;
	use Instructions;
    use MinMax;
    use Nullable;
    use Multiple;

	protected $type = 'acfe_countries';

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
     * @param string $fieldType checkbox, multi_select, select or radio
     * @throws \InvalidArgumentException
     * @return static
     */
    public function appearance(string $fieldType): self
    {
        if (!in_array($fieldType, ['checkbox', 'multi_select', 'select', 'radio'])) {
            throw new \InvalidArgumentException("Invalid argument field type [$fieldType].");
        }

        $this->config->set('field_type', $fieldType);

        return $this;
    }

    /**
     * @param string $format array, name or code
     * @throws \InvalidArgumentException
     * @return static
     */
    public function returnFormat(string $format): self
    {
        if (!in_array($format, ['array', 'name', 'code'])) {
            throw new \InvalidArgumentException("Invalid argument return format [$format].");
        }

        $this->config->set('return_format', $format);

        return $this;
    }


	/**
	 * Allow Countries
	 *
	 * @param array $values
	 *
	 * @return $this
	 */
	public function countries(array $values): self
	{
		$this->config->set('button_value', $values);

		return $this;
	}

    /**
     * Display Format
     *
     * The format displayed when editing a post
     *
     * allowed options: {localized}, {native} ({code}), '', other
     *
     * @return $this
     */
    public function displayFormat(array $format): self
    {
        $this->config->set('display_format', $format);

        return $this;
    }

    /**
     * Display Flags
     *
     * Display countries flags
     *
     * @return $this
     */
    public function flags(): self
    {
        $this->config->set('flags', true);

        return $this;
    }

    /**
     * Group by Continents
     *
     * Group countries by their continent
     *
     * @return $this
     */
    public function continents(): self
    {
        $this->config->set('continents', true);

        return $this;

    }

    /**
     * Stylised UI
     *
     * @param bool $useAjax
     * @return $this
     */
    public function stylisedUi(bool $useAjax = false): self
    {
        $this->config->set('ui', true);
        $this->config->set('ajax', $useAjax);

        return $this;
    }
}
