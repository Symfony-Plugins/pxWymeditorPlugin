<?php //Header("content-type: application/x-javascript"); ?>
jQuery(function() {
    jQuery("#<?php echo $fieldId ?>").wymeditor({
      updateSelector: "input[type=submit]",
      lang: 'fr',
      postInit: function(wym) {
          jQuery(wym._box).find(wym._options.containersSelector)
              .removeClass('wym_dropdown')
              .addClass('wym_panel')
              .find('h2 > span')
              .remove();
          jQuery(wym._box).find(wym._options.classesSelector)
              .remove();
        },
        
        
       dialogHtml: "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN'"
          + " 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>"
          + "<html><head>"
          + "<link rel='stylesheet' type='text/css' media='screen'"
          + " href='"
          + WYMeditor.CSS_PATH
          + "' />"
          + "<title>"
          + WYMeditor.DIALOG_TITLE
          + "</title>"
          + "<script type='text/javascript'"
          + " src='"
          + WYMeditor.JQUERY_PATH
          + "'></s"+"cript>"
          + "<script type='text/javascript'"
          + " src='"
          + WYMeditor.BASE_PATH
          + "jquery.wymeditor.js'></s"+"cript>"
      //TODO: FIX PATH    
          + "<script type='text/javascript' src='/pxMediaManager/web/pxWymeditorPlugin/js/jquery.imager.js'></s"+"cript>"
          + "<script type='text/javascript' src='/scripts/easing.js'></s"+"cript>"
          + "<script type='text/javascript' src='/scripts/jquery.jcarousel.js'></s"+"cript>"
          + "<link rel='stylesheet' type='text/css' href='/css/jquery.jcarousel.css' />"
          + "<link rel='stylesheet' type='text/css' href='/css/skins/tango/skin.css' />"
          + "<style type='text/css'>"
          + ".jcarousel-skin-tango.jcarousel-container-horizontal { width: 85%; }"
          + ".jcarousel-skin-tango .jcarousel-clip-horizontal { width: 100%; }"
          + "</style>"
          + "</h"+"ead>"
          + WYMeditor.DIALOG_BODY
          + "</html>",


      dialogImageHtml:  "<body class='wym_dialog wym_dialog_image'"
          + " onload='WYMeditor.INIT_DIALOG(" + WYMeditor.INDEX + ")'"
          + ">"
          + "<form>"
          + "<fieldset>"
          + "<legend>{Image}</legend>"
          + "<div class='row'>"
          + "<label>{URL}</label>"
//          + "<input type='text' class='wym_src' value='' size='40' />"
          +"<select class='wym_src'>"
            <?php foreach($images as $image): ?>
// $this->getObject()->getFileSrc()            
		      +"<option value='<?php echo $image->getFileSrc() ?>'><?php echo $image->getFile() ?>:<img src='<?php echo $image ?>' width='68' height='60' alt='alttext1' title='title1' /></option>"
	  	      <?php endforeach; ?>
		      +"</select>"

          + "</div>"
          + "<div class='row'>"
          + "<label>{Alternative_Text}</label>"
          + "<input type='text' class='wym_alt' value='' size='40' />"
          + "</div>"
          + "<div class='row'>"
          + "<label>{Title}</label>"
          + "<input type='text' class='wym_title' value='' size='40' />"
          + "</div>"
          + "<div class='row row-indent'>"
          + "<input class='wym_submit' type='button'"
          + " value='{Submit}' />"
          + "<input class='wym_cancel' type='button'" 
          + "value='{Cancel}' />"
          + "</div>"
          + "</fieldset>"
          + "</form>"
          + "<div id='gallery'><h2>Loading images, please wait...</h2>"

          +"</div>"
          + "</b"+"ody>"



    });
    
});

