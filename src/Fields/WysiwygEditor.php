<?php

/**
 * Extend WysiwygEditor field type by "WordPlate Extended"
 *
 * @link       https://schrittweiter.de
 * @since      1.0.0
 *
 */

/**
 * Extend "WordPlate Extended" WysiwygEditor by following plugin: WPGraphQL for Advanced Custom Fields
 *
 * @link       https://github.com/wp-graphql/wp-graphql-acf
 * @version    0.5.3
 *
 * @author     WPGraphQL <https://github.com/wp-graphql>
 */

namespace Schrittweiter\Acf\Fields;

use Extended\ACF\Fields\WysiwygEditor as Field;
use Schrittweiter\Acf\Fields\Attributes\GraphQL;

class WysiwygEditor extends Field
{
    use GraphQL;
}
