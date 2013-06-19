<?php
/**
 * This file is part of the PPI Framework.
 *
 * @category    PPI
 * @package     TwitterBootstrapModule
 * @copyright   Copyright (c) 2011-2013 Paul Dragoonis <paul@ppi.io>
 * @license     http://opensource.org/licenses/mit-license.php MIT
 * @link        http://www.ppi.io
 */

namespace PPI\TwitterBootstrapModule;

use PPI\Autoload;
use PPI\Module\AbstractModule;

/**
 * PPI TwitterBootstrap Module.
 *
 * @author Vítor Brandão <vitor@ppi.io>
 */
class Module extends AbstractModule
{
    const VERSION = '0.0.1-DEV';

    /**
     * {@inheritDoc}
     */
    public function init($e)
    {
        Autoload::add(__NAMESPACE__, dirname(__DIR__));
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'PPITwitterBootstrapModule';
    }
}
