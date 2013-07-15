<?php
/**
 * AWS configuration file
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @copyright Copyright &copy; 2amigos.us 2013-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package A2.amazon.components
 */

return array(
	'includes' => array('_aws'),
	'services' => array(
		'default_settings' => array(
			'params' => array(
				'key'    => '{YOUR-AWS-KEY}',
				'secret' => '{YOUR-AWS-SECRET}',
				'region' => 'us-east-1',
				/**
				 * Use this options if u get this kind of error
				 * Error Number: 60. Reason: SSL certificate problem, verify that the CA cert is OK. Details:
				 * error:14090086:SSL routines:SSL3_GET_SERVER_CERTIFICATE:certificate verify failed.
				 * some useful resoruce:
				 * http://unitstep.net/blog/2009/05/05/using-curl-in-php-to-access-https-ssltls-protected-sites/
				 */ 
				//'ssl.certificate_authority' => true,
				 /**
				  * Use this options to send any parameter to curl.
				  * Options that can be set is listed here:
				  * http://www.php.net/manual/en/function.curl-setopt.php
				  */
				//'curl.options' => array (
                                //    'CURLOPT_SSL_VERIFYPEER' => false,
                                //    'CURLOPT_SSL_VERIFYHOST' => false,
                                //),
			)
		)
	)
);
