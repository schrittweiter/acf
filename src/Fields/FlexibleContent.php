<?php

/**
 * Extend flexbible content field type by "WordPlate Extended"
 *
 * @link       https://schrittweiter.de
 * @since      1.0.0
 *
 */

/**
 * Extend "WordPlate Extended" flexible content by following plugin: Advanced Custom Fields: Extended PRO
 *
 * @link       https://www.acf-extended.com/features/fields/flexible-content
 * @version    0.8.8.6
 *
 * @author     ACF Extended <https://www.acf-extended.com/>
 */

namespace Schrittweiter\Acf\Fields;

use WordPlate\Acf\Fields\FlexibleContent as Field;

class FlexibleContent extends Field
{

	/**
	 * set defaults on call
	 *
	 * @param string $label
	 * @param string|null $name
	 */
	public function __construct(string $label, ?string $name = null)
	{
		parent::__construct($label, $name);

        $this->advanced();
	}

    /**
     * Show advanced Flexible Content settings
     *
     * @return $this
     */
    public function advanced(): self
    {
        $this->config->set('acfe_flexible_advanced', true);

        return $this;
    }

    /**
     * Better actions buttons integration
     * https://www.acf-extended.com/features/fields/flexible-content/advanced-settings#stylised-button
     *
     * @return $this
     */
    public function stylisedButton(): self
    {
        $this->config->set('acfe_flexible_stylised_button', true);

        return $this;
    }

    /**
     * Edit layout content in a modal
     * https://www.acf-extended.com/features/fields/flexible-content/modal-settings#edit-modal
     *
     * @return $this
     */
    public function modalEdit(): self
    {
        $this->config->set('acfe_flexible_modal_edit', true);

        return $this;
    }

    /**
     * Select layouts in a modal
     * https://www.acf-extended.com/features/fields/flexible-content/modal-settings#selection-modal
     *
     * @return $this
     */
    public function modal(): self
    {
        $this->config->set('acfe_flexible_modal', true);

        return $this;
    }

    /**
     * Enable columns mode
     * https://www.acf-extended.com/features/fields/flexible-content/advanced-settings#columns-mode
     * @return $this
     */
    public function grid(): self
    {
        $this->config->set('acfe_flexible_grid', true);

        return $this;
    }

    /**
     * Render the layout using custom template, style & javascript files
     * https://www.acf-extended.com/features/fields/flexible-content/dynamic-render
     *
     * @return $this
     */
    public function templates(): self
    {
        $this->config->set('acfe_flexible_layouts_templates', true);

        return $this;
    }

    /**
     * Use layouts render settings to display a dynamic preview in the administration
     * https://www.acf-extended.com/features/fields/flexible-content/dynamic-render#dynamic-preview
     *
     * @return $this
     */
    public function previews(): self
    {
        $this->config->set('acfe_flexible_layouts_previews', true);

        return $this;
    }

    /**
     * Asynchronous Settings
     *
     * https://www.acf-extended.com/features/fields/flexible-content/advanced-settings#async-settings
     *
     * @return $this
     */
    public function ajax(): self
    {
        $this->config->set('acfe_flexible_layouts_ajax', true);

        return $this;
    }
}
