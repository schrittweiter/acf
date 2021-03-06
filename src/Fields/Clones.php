<?php

/**
 * Extend clone field type by "WordPlate Extended"
 *
 * @link       https://schrittweiter.de
 * @since      1.0.0
 *
 */

/**
 * Extend "WordPlate Extended" Clone by following plugin: Advanced Custom Fields: Extended PRO
 *
 * @link       https://www.acf-extended.com/features/fields/clone
 * @version    0.8.8.6
 *
 * @author     ACF Extended <https://www.acf-extended.com/>
 */

namespace Schrittweiter\Acf\Fields;

use Schrittweiter\Acf\Fields\Attributes\GraphQL;
use WordPlate\Acf\Fields\Attributes\Layout;
use WordPlate\Acf\Fields\Field;
use WordPlate\Acf\Fields\Attributes\ConditionalLogic;
use WordPlate\Acf\Fields\Attributes\Instructions;
use WordPlate\Acf\Fields\Attributes\Required;
use WordPlate\Acf\Fields\Attributes\Wrapper;

class Clones extends Field
{
    use GraphQL;
	use ConditionalLogic;
	use Instructions;
	use Required;
	use Wrapper;
	use Layout;

	protected $type = 'clone';

	/**
	 * set defaults on call
	 *
	 * @param string $label
	 * @param string|null $name
	 */
	public function __construct(string $label, ?string $name = null)
	{
		parent::__construct($label, $name);

		$this->modalButton(__('Edit','acfe'));
	}

	/**
	 * define clonable fields
	 *
	 * @return $this
	 */
	public function fields(array $value): self
	{
		$this->config->set('clone', $value);

		return $this;
	}

	/**
	 * define clonable fields
	 * Options: group, seamless
	 *
	 * @return $this
	 */
	public function display(string $value): self
	{
		$this->config->set('display', $value);

		return $this;
	}

	/**
	 * Labels are displayed as %field_label%.
	 *
	 * @return $this
	 */
	public function prefixLabel(): self
	{
		$this->config->set('prefix_label', true);

		return $this;
	}

	/**
	 * Values are stored as %field_name%
	 *
	 * @return $this
	 */
	public function prefixName(): self
	{
		$this->config->set('prefix_name', true);

		return $this;
	}

	/**
	 * Enable better CSS integration: remove borders and padding'
	 *
	 * @return $this
	 */
	public function seamless(): self
	{
		$this->config->set('acfe_seamless_style', true);

		return $this;
	}

	/**
	 * Edit fields in a modal
	 *
	 * @return $this
	 */
	public function modal(): self
	{
		$this->display('group');
		$this->config->set('acfe_clone_modal', true);

		return $this;
	}

	/**
	 * Display close button
	 *
	 * @return $this
	 */
	public function modalClose(): self
	{
		$this->modal();
		$this->config->set('acfe_clone_modal_close', true);

		return $this;
	}

	/**
	 * Text displayed in the edition modal button
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function modalButton(string $value): self
	{
		$this->config->set('acfe_clone_modal_button', $value);

		return $this;
	}

	/**
	 * Choose the modal size
	 * Options: small, medium, large, xlarge, full
	 *
	 * @param string $value
	 *
	 * @return $this
	 */
	public function modalSize(string $value): self
	{
		$this->config->set('acfe_clone_modal_size', $value);

		return $this;
	}
}
