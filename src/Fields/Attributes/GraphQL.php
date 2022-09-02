<?php

/**
 * Extend Attributes by "WordPlate Extended"
 *
 * @link       https://schrittweiter.de
 * @since      1.0.0
 *
 */

/**
 * Extend "WordPlate Extended" Attributes by following plugin: WPGraphQL for Advanced Custom Fields
 *
 * @link       https://github.com/wp-graphql/wp-graphql-acf
 * @version    0.5.3
 *
 * @author     WPGraphQL <https://github.com/wp-graphql>
 */

declare(strict_types=1);

namespace Schrittweiter\Acf\Fields\Attributes;

trait GraphQL
{
    /** @return static */
    public function graphQL(): self
    {
        $this->settings['show_in_graphql'] = true;

        return $this;
    }
}
