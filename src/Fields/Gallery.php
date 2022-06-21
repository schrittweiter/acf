<?php

/**
 * Extend Gallery field type by "WordPlate Extended"
 *
 * @link       https://schrittweiter.de
 * @since      1.0.0
 *
 */

/**
 * Extend "WordPlate Extended" Gallery by following plugin: WPGraphQL for Advanced Custom Fields
 *
 * @link       https://github.com/wp-graphql/wp-graphql-acf
 * @version    0.5.3
 *
 * @author     WPGraphQL <https://github.com/wp-graphql>
 */

namespace Schrittweiter\Acf\Fields;

use WordPlate\Acf\Fields\Gallery as Field;
use Schrittweiter\Acf\Fields\Attributes\GraphQl;

class Gallery extends Field
{
    use GraphQl;
}
