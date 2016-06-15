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
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?php
        $this->Html->script('jquery', [ 'block' => true ]);
        
        if (empty($useBootstrap)) {
            $this->Html->css([ 'base', 'cake' ], [ 'block' => true ]);
        } else {
            $this->Html->css('bootstrap', [ 'block' => true ]);
            $this->Html->script('bootstrap', [ 'block' => true ]);
        }
      
        if (is_file(WWW_ROOT . 'css' . DS . $this->request['controller'] . DS . $this->request['action'] . '.css')) {
            $this->Html->css($this->request['controller'] . '/' . $this->request['action'], [ 'block' => true ]);
        }
        
        if (is_file(WWW_ROOT . 'js' . DS . $this->request['controller'] . DS . $this->request['action'] . '.js')) {
            $this->Html->script($this->request['controller'] . '/' . $this->request['action'], [ 'block' => true ]);
        }
        
        if (is_file(WWW_ROOT . 'js' . DS . strtolower($this->request['controller']) . '.css')) {
            $this->Html->css(strtolower($this->request['controller']), [ 'block' => true ]);
        }
        
        if (is_file(WWW_ROOT . 'js' . DS . strtolower($this->request['controller']) . '.js')) {
            $this->Html->script(strtolower($this->request['controller']), [ 'block' => true ]);
        }
    ?>
    
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?php if (empty($hideNavigation)) { ?>
        <nav class="top-bar expanded" data-topbar role="navigation">
            <ul class="title-area large-3 medium-4 columns">
                <li class="name">
                    <h1><a href=""><?= $this->fetch('title') ?></a></h1>
                </li>
            </ul>
            <div class="top-bar-section">
                <ul class="right">
                    <li><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></li>
                    <li><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></li>
                </ul>
            </div>
        </nav>
    <?php } ?>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
