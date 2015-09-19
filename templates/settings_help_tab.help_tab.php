<h2><?php esc_attr_e( 'WP User Settings', 'event_espresso'); ?></h2>
<p>
	<?php esc_attr_e( 'This page shows options for the WP User integration add-on', 'event_espresso' ); ?>
</p>
<div id="user_sync_info">
	<h3><?php esc_html_e( 'Always sync contact information with WP user profile?', 'event_espresso' ); ?></h3>
	<p>
		<?php esc_html_e( 'This global option is used to indicate behaviour when a logged in user registers for an event, and what happens to that user\'s related contact, which in turn is related to the primary registration.', 'event_espresso' ); ?>
	</p>
	<p>
		<?php esc_html_e( 'When true (default):', 'event_espresso' ); ?>
		<ul>
			<li>
				<?php  esc_html_e( 'If the logged in user has never had a relationship set between the user and the contact record, the relationship will be created on the initial registration between the contact for the primary registration and this user.', 'event_espresso' ); ?>
			</li>
			<li>
				<?php esc_html_e( 'On subsequent registrations by this user, the contact record from previous registrations for that user will be used for the primary registration and ANY changes to that contact record will sync both with the contact record AND related wp user details for that account.', 'event_espresso' ); ?>
			</li>
		</ul>
	</p>
	<p>
		<?php esc_html_e( 'When false:', 'event_espresso' ); ?>
		<ul>
			<li>
				<?php esc_html_e( 'If the logged in user has never had a relationship set between the user and the contact record, the relationship will be created on the initial registration between the contact for the primary registration and this user.', 'event_espresso' ); ?>
			</li>
			<li>
				<?php esc_html_e( 'On subsequent registrations by this user, if the contact details for the primary registrant are changed (personal question group), then a NEW contact record is created and there is NO relationship setup between this user and this new contact. The existing contact relationship is preserved.', 'event_espresso' ); ?>
			</li>
		</ul>
	</p>
	<p>
		<?php esc_html_e( 'The main difference between the two options is in the former (true) - EVERY registration by a logged in user is attached to the same contact for the primary registration, and the user has a record of every event they\'ve registered for.', 'event_espresso' ); ?>
	</p>
	<p>
		<?php esc_html_e( 'Whereas with the second option (false) - a record of events the user has registered for ONLY applies when the personal questions for the primary registration have not been changed.', 'event_espresso' ); ?>
	</p>
</div>
