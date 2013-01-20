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
 * @package    Zend_Dojo
 * @subpackage View
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: TabContainer.php 24594 2012-01-05 21:27:01Z matthew $
 */

/** Zend_Dojo_View_Helper_DijitContainer */
require_once 'Zend/Dojo/View/Helper/DijitContainer.php';

/**
 * Dojo TabContainer dijit
 *
 * @uses       Zend_Dojo_View_Helper_DijitContainer
 * @package    Zend_Dojo
 * @subpackage View
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
  */
class Zend_Dojo_View_Helper_TabContainer extends Zend_Dojo_View_Helper_DijitContainer
{
    /**
     * Dijit being used
     * @var string
     */
    protected $_dijit  = 'dijit.layout.TabContainer';

    /**
     * Dojo module to use
     * @var string
     */
    protected $_module = 'dijit.layout.TabContainer';

    /**
     * dijit.layout.TabContainer
     *
     * @param  string $id
     * @param  string $content
     * @param  array $params  Parameters to use for dijit creation
     * @param  array $attribs HTML attributes
     * @return string
     */
    public function tabContainer($id = null, $content = '', array $params = array(), array $attribs = array())
    {
        if (0 === func_num_args()) {
            return $this;
        }

        return $this->_createLayoutContainer($id, $content, $params, $attribs);
    }
}
