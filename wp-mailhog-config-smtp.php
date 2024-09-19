<?php
/*
* Add the MailHog to your WordPress projects
* Originally created by Khalid Ahmada (https://github.com/khalidahmada)
* Edited and improved by langtukqs (https://github.com/langtukqs)
* MailHog @see https://github.com/mailhog/MailHog
*/

class WP_MAILHOG {
		function __construct() {
				// Config only on local
				if ($this->isLocal()) {
						$this->AddSMTP();
				}
		}

		/**
		 * Config Your local rule by checking the WP_MAILHOG constant defined in wp_config.php
		 * @return bool
		 */
		private function isLocal() {
				if (defined('WP_MAILHOG') && WP_MAILHOG === true) {
						return true;
				}
				return false;
		}

		/*
		* WordPress default hook to config php mail
		*/
		private function AddSMTP() {
				add_action('phpmailer_init', array($this, 'configEmailSMTP'));
		}

		/*
		* Config PHPMailer SMTP with MailHog
		*/
		public function configEmailSMTP(PHPMailer\PHPMailer\PHPMailer $phpmailer) {
				$phpmailer->IsSMTP();
				$phpmailer->Host = '127.0.0.1';
				$phpmailer->Port = 1025;
				$phpmailer->Username = '';
				$phpmailer->Password = '';
				$phpmailer->SMTPAuth = true;
		}
}

new WP_MAILHOG();