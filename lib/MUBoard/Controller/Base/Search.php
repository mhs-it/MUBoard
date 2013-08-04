<?php
/**
 * MUBoard.
 *
 * @copyright Michael Ueberschaer
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License
 * @package MUBoard
 * @author Michael Ueberschaer <kontakt@webdesign-in-bremen.com>.
 * @link http://www.webdesign-in-bremen.com
 * @link http://zikula.org
 * @version Generated by ModuleStudio 0.5.4 (http://modulestudio.de) at Sun Oct 14 15:42:51 CEST 2012.
 */

/**
 * Search controller class.
 */
class MUBoard_Controller_Base_Search extends Zikula_AbstractController
{
    /**
     * Post initialise.
     *
     * Run after construction.
     *
     * @return void
     */
    protected function postInitialize()
    {
        // Set caching to true by default.
        $this->view->setCaching(Zikula_View::CACHE_ENABLED);
    }

    /**
     * This method is the default function, and is called whenever the application's
     * Search area is called without defining arguments.
     *
     * @return mixed Output.
     */
    public function main($args)
    {
        // DEBUG: permission check aspect starts
        $this->throwForbiddenUnless(SecurityUtil::checkPermission('MUBoard::', '::', ACCESS_OVERVIEW));
        // DEBUG: permission check aspect ends

    }
}