<?php

/**
 * Extend GoogleMap field type by "WordPlate Extended"
 *
 * @link       https://schrittweiter.de
 * @since      1.0.0
 *
 */

/**
 * Extend "WordPlate Extended" GoogleMap by following plugin: WPGraphQL for Advanced Custom Fields
 *
 * @link       https://github.com/wp-graphql/wp-graphql-acf
 * @version    0.5.3
 *
 * @author     WPGraphQL <https://github.com/wp-graphql>
 */

namespace Schrittweiter\Acf\Fields;

use Extended\ACF\Fields\GoogleMap as Field;
use Schrittweiter\Acf\Fields\Attributes\GraphQL;

class GoogleMap extends Field
{
    use GraphQL;
}
