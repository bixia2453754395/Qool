<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Form
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

/** Zend_Dojo_Form_Decorator_DijitContainer */
require_once 'Zend/Dojo/Form/Decorator/DijitContainer.php';

/**
 * SplitContainer
 *
 * Render a dijit SplitContainer
 *
 * @uses       Zend_Dojo_Form_Decorator_DijitContainer
 * @package    Zend_Dojo
 * @subpackage Form_Decorator
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: SplitContainer.php 24594 2012-01-05 21:27:01Z matthew $
 */
class Zend_Dojo_Form_Decorator_SplitContainer extends Zend_Dojo_Form_Decorator_DijitContainer
{
    /**
     * View helper
     * @var string
     */
    protected $_helper = 'SplitContainer';
}
