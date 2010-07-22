<?php

/**
 * pxMedia actions.
 *
 * @package    project
 * @subpackage pxMedia
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class wymeditorActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->setLayout(false);
    sfConfig::set('sf_web_debug', false);
    $this->fieldId = $this->getRequestParameter('field_id');
    $this->images = array();
  /*
    $this->images = Doctrine::getTable('PxMedia')
      ->createQuery('a')
      ->execute();;
*/
  }


}
