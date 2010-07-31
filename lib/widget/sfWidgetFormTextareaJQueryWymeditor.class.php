<?php


class sfWidgetFormTextareaJQueryWymeditor extends sfWidgetFormTextarea
{
  /**
   * Constructor.
   *
   * Available options:
   *
   *  * TODO:  TODO
   *  * TODO:  TODO   
   *
   * @param array $options     An array of options TODO
   * @param array $attributes  An array of default HTML attributes TODO
   *
   * @see sfWidgetForm
   */
  protected function configure($options = array(), $attributes = array())
  {
//    $this->addOption('theme', 'advanced'); TODO
//    $this->addOption('width'); TODO
//    $this->addOption('height'); TODO
//    $this->addOption('config', ''); TODO
  }

  /**
   * @param  string $name        The ement name TODO
   * @param  string $value       The value selected in this widget TODO
   * @param  array  $attributes  An array of HTML attributes to be merged with the default HTML attributes TODO
   * @param  array  $errors      An array of errors for the field TODO
   *
   * @return string An HTML tag string TODO
   *
   * @see sfWidgetForm
   */
  public function render($name, $value = null, $attributes = array(), $errors = array())
  {
    //sfContext::getInstance()->getResponse()->addJavascript("http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js");
    sfContext::getInstance()->getResponse()->addJavascript("/pxWymeditorPlugin/js/wymeditor-0.5-rc-1/wymeditor/jquery.wymeditor.min.js");    
    sfContext::getInstance()->getResponse()->addJavascript(url_for("wymeditor/js")."/".$this->generateId($name));   
    $textarea = parent::render($name, $value, $attributes, $errors);
    return $textarea;
  }
}
