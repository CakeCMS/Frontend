<?php
/**
 * CakeCMS Frontend
 *
 * This file is part of the of the simple cms based on CakePHP 3.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package     Frontend
 * @license     MIT
 * @copyright   MIT License http://www.opensource.org/licenses/mit-license.php
 * @link        https://github.com/CakeCMS/Frontend".
 * @author      Sergey Kalistratov <kalistratov.s.m@gmail.com>
 * @var         \Core\View\AppView $this
 */

$this->Assets
    ->jquery()
    ->fontAwesome()
    ->jqueryFactory()
    ->materialize()
    ->tableCheckAll();

$this->Html->script([
    'Core.admin/widget/toolbar.js',
    'Frontend.template.js'
], ['block' => 'assets']);


$this->Html->less([
    'Frontend.styles.less'
], ['block' => true, 'fullBase' => true, 'force' => true]);

$this->Document->meta([
    '<title>' . $this->fetch('page_title') . '</title>',
    '<meta http-equiv="X-UA-Compatible" content="IE=edge">',
    '<meta name="viewport" content="width=device-width, initial-scale=1">',
], 'meta');

$this->Js->widget('.jsToolbar', 'JBZooToolbar');

echo $this->Document->type();
