<?php
/**
 * WP Google Cloud Source Repo API
 *
 * @link https://cloud.google.com/source-repositories/docs/reference/rest/
 * @package WP-API-Libraries\WP-Cloud-Compute-Engine-API
 */
/*
* Plugin Name: WP Cloud Source Repo API
* Plugin URI: https://github.com/wp-api-libraries/wp-google-cloud-source-api
* Description: Perform API requests to Google Cloud Source Repo in WordPress.
* Author: WP API Libraries
* Version: 1.0.2
* Author URI: https://wp-api-libraries.com
* GitHub Plugin URI: https://github.com/wp-api-libraries/wp-google-cloud-source-api
* GitHub Branch: master
*/
/* Exit if accessed directly. */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* Check if class exists. */
if ( ! class_exists( 'GoogleCloudSourceRepoAPI' ) ) {
	
	/**
	 * GoogleCloudSourceRepoAPI Class.
	 */
	class GoogleCloudSourceRepoAPI {
		
		/**
		 * BaseAPI Endpoint
		 *
		 * @var string
		 * @access protected
		 */
		protected $base_uri = 'https://sourcerepo.googleapis.com';
		
		public function get_discovery() {
			// https://sourcerepo.googleapis.com/$discovery/rest?version=v1
		}
		
		public function create_repo() {
			
		}
		
		public function delete_repo() {
			
		}
		
		public function get_repo() {
			
		}
		
		public function get_iam_policy() {
			
		}
		
		public function list_repos() {
			
		}
		
		public function set_iam_policy() {
			
		}
		
		public function test_iam_permissions() {
			
		}

	}
	
}