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
}
