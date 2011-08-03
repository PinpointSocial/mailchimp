<?php
/**
*
*/
class Kohana_Mailchimp {
   public static function instance($api_key = null, $config = 'default') {
      include Kohana::find_file('vendor', 'mailchimp/MCAPI.class');
      if($api_key == null) {
	 $conf = Kohana::config('mailchimp')->$config; 
	 return new MCAPI($conf['api_key']);
      } else {
	 return new MCAPI($api_key);
      }
   }
}
