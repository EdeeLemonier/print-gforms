<?php

//*Add print button & functionality to GravityForms
add_filter( 'gform_submit_button', 'theme_t_wp_submit_button', 10, 2 );
function theme_t_wp_submit_button( $button, $form ){
   return '<input type="submit" id="gform_submit_button_"'.$form["id"].' class="button gform_button" value="'.$form["button"]["text"].'" onclick="if(window["gf_submitting_'.$form["id"].'"]){return false;}  window["gf_submitting_'.$form["id"].'"]=true; "><span class="print-button" <form><input type="button" value="Print" onclick="window.print();return false;" /></form></span>';
}
