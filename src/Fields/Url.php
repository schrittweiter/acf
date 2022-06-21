<?php

/**
 * Extend Url field type by "WordPlate Extended"
 *
 * @link       https://schrittweiter.de
 * @since      1.0.0
 *
 */

/**
 * Extend "WordPlate Extended" Url by following plugin: WPGraphQL for Advanced Custom Fields
 *
 * @link       https://github.com/wp-graphql/wp-graphql-acf
 * @version    0.5.3
 *
 * @author     WPGraphQL <https://github.com/wp-graphql>
 */

namespace Schrittweiter\Acf\Fields;

use WordPlate\Acf\Fields\Url as Field;
use Schrittweiter\Acf\Fields\Attributes\GraphQl;

class Url extends Field
{
    use GraphQl;
}
