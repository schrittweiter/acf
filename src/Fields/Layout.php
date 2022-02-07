<?php

/**
 * Extend layout field type by "WordPlate Extended"
 *
 * @link       https://schrittweiter.de
 * @since      1.0.0
 *
 */

/**
 * Extend "WordPlate Extended" layout by following plugin: Advanced Custom Fields: Extended PRO
 *
 * @link       https://www.acf-extended.com/features/fields/flexible-content
 * @version    0.8.8.6
 *
 * @author     ACF Extended <https://www.acf-extended.com/>
 */

namespace Schrittweiter\Acf\Fields;

use WordPlate\Acf\Fields\Layout as Field;

class Layout extends Field
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

        $this->modalSize();
    }


    /**
     * Modal settings
     * https://www.acf-extended.com/features/fields/flexible-content/modal-settings#edit-modal
     *
     * small, medium, large, xlarge, full
     *
     * @return $this
     */
    public function modalSize(string $size = ''): self
    {
        $this->config->set('acfe_flexible_modal_edit_size', $size);

        return $this;
    }

    /**
     * Clone settings
     * Choose a field group to clone and to be used as a configuration modal.
     *
     *  size options: small, medium, large, xlarge, full
     *
     * https://www.acf-extended.com/features/fields/flexible-content/modal-settings#settings-modal
     *
     * @return $this
     */
    public function settingsClone(array $fieldgroups, string $size = ''): self
    {
        $this->config->set('acfe_flexible_settings_size', $size);
        $this->config->set('acfe_flexible_settings', $fieldgroups);

        return $this;
    }

    /**
     * Category
     * Enable the layouts categories tabs. This setting will display a new category setting for each layouts.
     *
     * https://www.acf-extended.com/features/fields/flexible-content/modal-settings#selection-modal
     *
     * @return $this
     */
    public function category(array $size = []): self
    {
        $this->config->set('acfe_flexible_category', $size);

        return $this;
    }

    /**
     * Default Column
     * Define the default column size when the layout is being added
     *
     * options: 0 = auto, 1, 2 ,3 ,4 ,5 , 6, 7, 8, 9, 10, 11, 12
     *
     * https://www.acf-extended.com/features/fields/flexible-content/grid-system#layouts-grid-settings
     *
     * @return $this
     */
    public function defaultColumn(int $size = 12): self
    {
        $this->config->set('acfe_layout_col', $size);

        return $this;
    }

    /**
     * Allowed Column
     * Define the allowed columns the user can choose
     *
     * options: array 0 = auto, 1, 2 ,3 ,4 ,5 , 6, 7, 8, 9, 10, 11, 12
     *
     * https://www.acf-extended.com/features/fields/flexible-content/grid-system#layouts-grid-settings
     *
     * @return $this
     */
    public function allowedColumns(array $size = []): self
    {
        $this->config->set('acfe_layout_allowed_col', $size);

        return $this;
    }

    /**
     * Render the layout using custom template, style & javascript files
     * https://www.acf-extended.com/features/fields/flexible-content/dynamic-render
     *
     * @param array $files
     * @return $this
     */
    public function render(array $files = []): self
    {
        $this->config->set('acfe_flexible_render_template', $files['template'] ?? '');
        $this->config->set('acfe_flexible_render_style', $files['style'] ?? '');
        $this->config->set('acfe_flexible_render_script', $files['script'] ?? '');

        return $this;
    }
}
