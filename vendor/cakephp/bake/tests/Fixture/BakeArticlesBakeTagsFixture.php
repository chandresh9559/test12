<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace Bake\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Short description for class.
 */
class BakeArticlesBakeTagsFixture extends TestFixture
{
    /**
     * fields property
     *
     * @var array<string, mixed>
     */
    public $fields = [
        'bake_article_id' => ['type' => 'integer', 'null' => false],
        'bake_tag_id' => ['type' => 'integer', 'null' => false],
        '_constraints' => ['UNIQUE_TAG' => ['type' => 'unique', 'columns' => ['bake_article_id', 'bake_tag_id']]],
    ];

    /**
     * records property
     *
     * @var array
     */
    public $records = [];
}
