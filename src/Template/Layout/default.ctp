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

echo $this->partial('init');
?>
<head>
    <?= $this->Document->head() ?>
</head>
<body>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
</body>
<?= $this->Document->assets('script') ?>
<?= $this->fetch('script_bottom') ?>
<?= $this->Js->getBuffer() ?>
</html>
