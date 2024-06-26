<?php

if ( ! function_exists( 'pharmacare_membership_include_register_navigation_template' ) ) {
	/**
	 * Loads modal template
	 */
	function pharmacare_membership_include_register_navigation_template() {
		$params = array(
			'item_class' => 'qodef--register',
			'item_label' => esc_attr__( 'Register', 'pharmacare-membership' ),
			'item_link'  => '#qodef-membership-register-modal-part'
		);
		
		pharmacare_membership_template_part( 'login-modal', 'templates/parts/navigation-item', '', $params );
	}
	
	add_action( 'pharmacare_membership_action_login_modal_navigation_item', 'pharmacare_membership_include_register_navigation_template', 15 );
}

if ( ! function_exists( 'pharmacare_membership_include_register_template' ) ) {
	/**
	 * Loads modal template
	 */
	function pharmacare_membership_include_register_template() {
		pharmacare_membership_template_part( 'login-modal/register', 'templates/register-form' );
	}
	
	add_action( 'pharmacare_membership_action_login_modal_content', 'pharmacare_membership_include_register_template', 15 );
}

if ( ! function_exists( 'pharmacare_membership_init_rest_api_register' ) ) {
	/**
	 * Main login modal function that is triggered through register modal ajax
	 */
	function pharmacare_membership_init_rest_api_register( $options ) {
		
		if ( ! empty( $options ) ) {
			$credentials                          = array();
			$credentials['user_login']            = sanitize_user( $options['user_login'] );
			$credentials['user_email']            = sanitize_email( $options['user_email'] );
			$credentials['user_password']         = wp_unslash( $options['user_password'] );
			$credentials['user_confirm_password'] = wp_unslash( $options['user_confirm_password'] );
			
			if ( empty( $credentials['user_email'] ) || ! is_email( $credentials['user_email'] ) ) {
				qode_framework_get_ajax_status( 'error', esc_html__( 'Please provide a valid email address.', 'pharmacare-membership' ) );
			}
			
			if ( email_exists( $credentials['user_email'] ) ) {
				qode_framework_get_ajax_status( 'error', esc_html__( 'An account is already registered with your email address. Please log in.', 'pharmacare-membership' ) );
			}
			
			if ( empty( $credentials['user_login'] ) || ! validate_username( $credentials['user_login'] ) ) {
				qode_framework_get_ajax_status( 'error', esc_html__( 'Please enter a valid account username.', 'pharmacare-membership' ) );
			}
			
			if ( username_exists( $credentials['user_login'] ) ) {
				qode_framework_get_ajax_status( 'error', esc_html__( 'Username already exists. Please choose another one.', 'pharmacare-membership' ) );
			}
			
			if ( $credentials['user_password'] !== $credentials['user_confirm_password'] ) {
				qode_framework_get_ajax_status( 'error', esc_html__( 'Password and confirm password doesn\'t match.', 'pharmacare-membership' ) );
			}
			
			// Perform the registration.
			$user = wp_create_user( $credentials['user_login'], $credentials['user_password'], $credentials['user_email'] );
			
			if ( is_wp_error( $user ) ) {
				qode_framework_get_ajax_status( 'error', esc_html__( 'User with this details can\'t be created.', 'pharmacare-membership' ) );
			} else {
				$user_params = array(
					'ID'   => $user,
					'role' => apply_filters( 'pharmacare_membership_filter_registration_default_role', get_option( 'default_role' ) )
				);
				
				if ( isset( $options['user_description'] ) && ! empty( $options['user_description'] ) ) {
					$user_params['description'] = esc_attr( strip_tags( $options['user_description'] ) );
				}
				
				if ( isset( $options['user_url'] ) && ! empty( $options['user_url'] ) ) {
					$user_params['user_url'] = esc_url( $options['user_url'] );
				}
				
				if ( isset( $options['user_profile_image'] ) && ! empty( $options['user_profile_image'] ) ) {
					add_user_meta( $user, 'user_profile_image', esc_url( $options['user_profile_image'] ), true );
				}
				
				wp_update_user( $user_params );
				
				if ( ! isset( $options['private_key'] ) || $options['private_key'] === 'false' ) {
					$mail_to = $credentials['user_email'];
					$subject = esc_attr__( 'User Registration', 'pharmacare-membership' ); // Subject
					$message = esc_attr__( 'You have registered successfully on ', 'pharmacare-membership' ) . esc_url( get_site_url() ); // Message
					
					wp_mail( $mail_to, $subject, $message );
				}
				
				// Check is social login triggered
				if ( ! isset( $options['social_login'] ) || ( isset( $options['social_login'] ) && empty( $options['social_login'] ) ) ) {
					// Set social network meta for current user
					add_user_meta( $user, 'user_social_network', sanitize_text_field( $options['social_login'] ), true );
					
					$redirect_uri = pharmacare_membership_get_membership_redirect_url( isset( $options['redirect'] ) ? $options['redirect'] : '' );
					
					qode_framework_get_ajax_status( 'success', esc_html__( 'You have registered successfully, please login with the created credentials.', 'pharmacare-membership' ), null, $redirect_uri );
				} else {
					pharmacare_membership_login_current_user_by_meta( $credentials['user_email'], $options['social_login'] !== 'twitter' );
				}
			}
		} else {
			qode_framework_get_ajax_status( 'error', esc_html__( 'Options are invalid.', 'pharmacare-membership' ) );
		}
	}
}