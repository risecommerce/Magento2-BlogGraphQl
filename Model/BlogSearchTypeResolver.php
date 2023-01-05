<?php
/**
 * Copyright © Risecommerce (support@risecommerce.com). All rights reserved.
 * 
 */

declare (strict_types = 1);

namespace Risecommerce\BlogGraphQl\Model;

use Magento\Framework\GraphQl\Query\Resolver\TypeResolverInterface;

/**
 * @inheritdoc
 */
class BlogSearchTypeResolver implements TypeResolverInterface
{
    const RC_BLOG_SEARCH = 'RC_BLOG_SEARCH';
    const TYPE_RESOLVER = 'blogPostsOutput';

    /**
     * @inheritdoc
     */
    public function resolveType(array $data) : string
    {
        if (isset($data['type_id']) && $data['type_id'] == self::RC_BLOG_SEARCH) {
            return self::TYPE_RESOLVER;
        }
        return '';
    }
}
