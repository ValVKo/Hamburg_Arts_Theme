<?php
	$addons_options = get_option( 'etn_addons_options' );
	$pluginStatus = \Etn\Core\addons\Plugin_Status::instance();
	if ( class_exists( 'Wpeventin_Pro' ) ) {
		$buddyboss           = ! empty( $addons_options['buddyboss'] ) && $addons_options['buddyboss'] == "on" ? "checked" : "";
		$certificate_builder = ! empty( $addons_options['certificate_builder'] ) && $addons_options['certificate_builder'] == "on" ? "checked" : "";
		$dokan               = ( \Etn\Core\addons\Helper::instance()->check_active_module( 'dokan' ) ) == true ? "checked" : "";
		$rsvp =  empty( $addons_options['rsvp'] ) || $addons_options['rsvp'] == "on" ? "checked" : "";
		$google_meet =  empty( $addons_options['google_meet'] ) || $addons_options['google_meet'] == "on" ? "checked" : "";
		$disable_switch      = "";
	} else {
		$buddyboss           = "";
		$certificate_builder = "";
		$dokan               = "";
		$rsvp                = "no";
		$google_meet       = "no";
		$disable_switch      = "disabled";
	}
?>
<div class="etn-admin-sec">
	<div class="etn-row">
		<div class="etn-col-md-5">
			<div class="etn-addons-content">
				<h1 class="etn-main-title">
					<?php echo esc_html__( 'Extensions to Power Up Your Plugins', 'eventin' ); ?>
				</h1>
				<p class="etn-desc">
					<?php echo esc_html__( 'Extensions are quick solutions our team came up with to solve specific issues you may need. (Note - extensions are not covered by our support team.)', 'eventin' ); ?>
				</p>
			</div>
		</div>
	</div>
	<form action=""  method="post" id="etn_addons_form">
		<div class="module-sec">
			<div class="etn-row">
				<div class="etn-col-12">
					<h2 class="etn-addon-title"><?php echo esc_html__( 'Modules', 'eventin' ); ?></h2>
				</div>
				<div class="etn-col-md-6 etn-col-lg-4">
					<div class="etn-label-item etn-addons-item">
						<div class="etn-label">
							<div class="etn-label-icon">
								<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M63.9993 32C63.9993 49.6735 49.6728 64 31.9993 64C14.3258 64 0 49.6735 0 32C0 14.3265 14.3258 0 31.9993 0C49.6728 0 63.9993 14.3272 63.9993 32Z" fill="#F1634C" />
									<path d="M21.2461 15.7875C21.2461 15.7875 39.2682 14.4601 39.2682 30.0165C39.2682 45.5729 34.5048 48.665 30.3316 49.6802C30.3316 49.6802 47.6995 53.8619 47.6995 31.9837C47.6995 10.1055 25.5463 13.2588 21.2461 15.7875Z" fill="white" />
									<path d="M35.9027 42.2427C35.9027 42.2427 34.1618 48.2829 28.9028 49.0468C23.6438 49.8108 22.664 46.9603 19.0084 47.1551C19.0084 47.1551 18.7095 44.3198 21.669 43.9196C24.6284 43.5195 30.1767 44.3016 33.8639 41.9677C33.8639 41.9677 36.046 40.8217 36.4719 40.2698L35.9027 42.2427Z" fill="white" />
									<path d="M20.9727 16.8743V24.3641V43.0002C21.1568 42.9542 21.3433 42.9181 21.5313 42.8923C22.4213 42.7719 23.5071 42.7519 24.6569 42.7299C25.7417 42.7099 26.9297 42.687 28.1177 42.5771V33.7857C28.1177 30.8655 27.9324 27.8793 28.1177 24.9638C28.2266 23.2554 29.5501 21.6682 31.1306 21.0484C32.5182 20.507 33.9172 20.7075 35.1596 21.313C29.2102 16.9096 22.534 16.8275 20.9727 16.8743Z" fill="white" />
								</svg>
							</div>
							<div class="etn-label-content">
								<label for="dokan_mod">
									<?php if (!class_exists('Wpeventin_Pro')) { ?>
										<a target="_blank" title="<?php echo esc_attr('Go Pro', 'eventin'); ?>" class="etn-pro-deactive" href="<?php echo esc_url(\Etn\Bootstrap::get_pro_link()) ?>">
											<?php esc_html_e('Dokan', 'eventin'); ?>
										</a>
									<?php } else { ?>
										<?php esc_html_e('Dokan', 'eventin'); ?>
									<?php } ?>
								</label>
								<div class="etn-desc">
									<?php esc_html_e('It allows you to create a Multivendor Event marketplace and make commission for each sale.', 'eventin'); ?>
								</div>
								<?php if (!class_exists('Wpeventin_Pro')) { ?>
									<a target="_blank" href="https://themewinter.com/eventin/#ts-pricing-list" class="etn-btn-text">
										<?php echo esc_html__('Upgrade to Pro', 'eventin');  ?>
									</a>
								<?php }
								else {
									if(!class_exists('WeDevs_Dokan')):
									?>
										<p class="etn-warning-text"><?php echo esc_html__('NB: Need to active Dokan plugin', 'eventin'); ?></p>
									<?php endif;
								} ?>
							</div>
						</div>
						<div class="etn-meta">
							<?php if (!class_exists('Wpeventin_Pro')) { ?>
								<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M5.79688 10.6V8.2C5.79688 4.228 6.99687 1 12.9969 1C18.9969 1 20.1969 4.228 20.1969 8.2V10.6" stroke="#F5841C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M13 20.7998C14.6569 20.7998 16 19.4567 16 17.7998C16 16.143 14.6569 14.7998 13 14.7998C11.3431 14.7998 10 16.143 10 17.7998C10 19.4567 11.3431 20.7998 13 20.7998Z" stroke="#F5841C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M19 25.0001H7C2.2 25.0001 1 23.8001 1 19.0001V16.6001C1 11.8001 2.2 10.6001 7 10.6001H19C23.8 10.6001 25 11.8001 25 16.6001V19.0001C25 23.8001 23.8 25.0001 19 25.0001Z" stroke="#F5841C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							<?php } else { ?>
								<input type="checkbox" name="dokan" class="etn-admin-control-input" value="off" <?php echo esc_attr($dokan) ?> />
								<input type="checkbox" name="dokan" id='dokan_mod' class="etn-admin-control-input" <?php echo esc_attr($dokan) . " " . esc_attr($disable_switch); ?> />
								<label for="dokan_mod" class="etn_switch_button_label"></label>
							<?php } ?>
						</div>
						<?php if (!class_exists('Wpeventin_Pro')) { ?>
							<span class="etn-badge"><?php echo esc_html__('Pro', 'eventin'); ?></span>
						<?php } ?>
					</div>
				</div>
				<div class="etn-col-md-6 etn-col-lg-4">
					<div class="etn-label-item etn-addons-item">
						<div class="etn-label">
							<div class="etn-label-icon">
								<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M63.9993 32C63.9993 49.6735 49.6728 64 31.9993 64C14.3258 64 0 49.6735 0 32C0 14.3265 14.3258 0 31.9993 0C49.6728 0 63.9993 14.3272 63.9993 32Z" fill="#E0623D" />
									<path d="M39.0831 20.4392C37.2604 20.44 35.455 20.7919 33.7655 21.4757L34.0056 20.1762C34.0056 20.1762 35.6214 13.1936 28.9974 12.7724C28.4691 12.7751 28.3045 13.0471 28.2352 13.4136L26.9385 20.4465C25.1805 20.4683 23.4419 20.8166 21.8111 21.4737L22.0505 20.1741C22.0505 20.1741 23.6663 13.1936 17.043 12.7724C16.5171 12.7744 16.3501 13.044 16.2829 13.4071L12.7374 32.6347C12.5718 33.5057 12.4823 34.3895 12.47 35.276C12.3678 43.4566 18.7752 50.1121 26.7563 50.1121C34.7373 50.1121 41.3125 43.4566 41.4154 35.276C41.4427 33.0691 40.9064 31.5784 39.9551 30.7085C38.6771 29.541 36.4356 29.7731 35.3581 31.216C34.3618 32.5495 34.5131 34.5907 34.5041 35.276C34.4826 36.9888 33.9061 38.6484 32.861 40.0056C31.847 38.6394 31.3113 36.9772 31.3366 35.276C31.39 31.0012 34.826 27.524 38.9948 27.524C43.1635 27.524 46.5126 31.0012 46.4606 35.276C46.4457 36.5934 46.102 37.8863 45.4607 39.0372C44.8194 40.188 43.9008 41.1606 42.7883 41.8664C42.6386 41.9606 42.2503 42.1931 41.9444 42.5274C41.6821 42.8146 41.494 43.2037 41.4109 43.3589C40.1373 45.708 38.3363 47.7298 36.1494 49.2654C36.0257 49.3517 35.8057 49.519 35.8747 49.6894C35.9384 49.8464 36.2925 49.9036 36.4474 49.9285C37.1959 50.052 37.9534 50.114 38.7121 50.1138C46.6917 50.1138 53.2679 43.4583 53.3698 35.2777C53.4716 27.0971 47.0641 20.4392 39.0831 20.4392ZM19.3794 35.276C19.4262 31.5025 22.1108 28.3547 25.6071 27.6674L24.6922 32.6347C24.527 33.5058 24.4376 34.3895 24.425 35.276C24.3904 38.1075 25.136 40.7543 26.4562 43.0069C22.4704 42.7969 19.3285 39.4139 19.3794 35.276Z" fill="white" />
								</svg>
							</div>
							<div class="etn-label-content">
								<label for="buddyboss_mod">
									<?php if (!class_exists('Wpeventin_Pro')) { ?>
										<a target="_blank" title="<?php echo esc_attr('Go Pro', 'eventin'); ?>" class="etn-pro-deactive" href="<?php echo esc_url(\Etn\Bootstrap::get_pro_link()) ?>">
											<?php esc_html_e('BuddyBoss', 'eventin'); ?>
										</a>
									<?php } else {
										esc_html_e('BuddyBoss', 'eventin');
									} ?>
								</label>
								<div class="etn-desc">
									<?php esc_html_e('It allows you to create and manage events and sell tickets inside the BuddyBoss theme.', 'eventin'); ?>
								</div>
								<?php if (!class_exists('Wpeventin_Pro')) { ?>
									<a target="_blank" href="https://themewinter.com/eventin/#ts-pricing-list" class="etn-btn-text">
										<?php echo esc_html__('Upgrade to Pro', 'eventin');  ?>
									</a>
								<?php
								 	} else { 
										if(!class_exists('BuddyPress')): ?>
											<p class="etn-warning-text"><?php echo esc_html__('NB: Need to active BuddyBoss plugin','eventin'); ?></p>
										<?php endif;
									} ?>
							</div>
						</div>
						<div class="etn-meta">
							<?php if (!class_exists('Wpeventin_Pro')) { ?>
								<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M5.79688 10.6V8.2C5.79688 4.228 6.99687 1 12.9969 1C18.9969 1 20.1969 4.228 20.1969 8.2V10.6" stroke="#F5841C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M13 20.7998C14.6569 20.7998 16 19.4567 16 17.7998C16 16.143 14.6569 14.7998 13 14.7998C11.3431 14.7998 10 16.143 10 17.7998C10 19.4567 11.3431 20.7998 13 20.7998Z" stroke="#F5841C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M19 25.0001H7C2.2 25.0001 1 23.8001 1 19.0001V16.6001C1 11.8001 2.2 10.6001 7 10.6001H19C23.8 10.6001 25 11.8001 25 16.6001V19.0001C25 23.8001 23.8 25.0001 19 25.0001Z" stroke="#F5841C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							<?php } else { ?>
								<input type="checkbox" name="buddyboss" class="etn-admin-control-input" value="off" <?php echo esc_attr($buddyboss) ?> />
								<input type="checkbox" name="buddyboss" id='buddyboss_mod' class="etn-admin-control-input" <?php echo esc_attr($buddyboss) . " " . esc_attr($disable_switch); ?> />
								<label for="buddyboss_mod" class="etn_switch_button_label"></label>
							<?php } ?>
						</div>
						<?php if (!class_exists('Wpeventin_Pro')) { ?>
							<span class="etn-badge"><?php echo esc_html__('Pro', 'eventin'); ?></span>
						<?php } ?>
					</div>
				</div>
				<div class="etn-col-md-6 etn-col-lg-4">
					<div class="etn-label-item etn-addons-item">
						<div class="etn-label">
							<div class="etn-label-icon">
								<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="32" cy="32" r="32" fill="#602CF9" />
									<path d="M42.7489 28.979V16.4429C42.7489 15.0958 41.653 14 40.306 14H20.4429C19.0958 14 18 15.0958 18 16.4429V42.4933C18 43.8403 19.0958 44.9362 20.4429 44.9362H35.4368V48.8735C35.4368 49.7338 36.3684 50.2796 37.1198 49.8503L40.499 47.9193C44.2314 50.052 44.0362 49.9985 44.4364 49.9985C45.0576 49.9985 45.5613 49.4941 45.5613 48.8735V41.208C49.5653 37.3613 47.9793 30.6745 42.7489 28.979V28.979ZM20.4429 42.6863C20.3365 42.6863 20.2499 42.5997 20.2499 42.4933V16.4429C20.2499 16.3365 20.3365 16.2499 20.4429 16.2499H40.306C40.4125 16.2499 40.499 16.3365 40.499 16.4429V28.6244C36.4671 28.6244 33.1869 31.9046 33.1869 35.9366C33.1869 38.0056 34.0508 39.8765 35.4368 41.208V42.6863H20.4429ZM43.3114 46.935L41.0572 45.6469C40.7112 45.4492 40.2868 45.4492 39.9409 45.6469L37.6866 46.935V42.6859C39.4804 43.4362 41.5152 43.4372 43.3114 42.6859V46.935H43.3114ZM40.499 40.9988C37.7077 40.9988 35.4368 38.7279 35.4368 35.9366C35.4368 33.1452 37.7077 30.8743 40.499 30.8743C43.2904 30.8743 45.5613 33.1452 45.5613 35.9366C45.5613 38.7279 43.2904 40.9988 40.499 40.9988Z" fill="white" />
									<path d="M39.9365 38.8194C39.497 38.8194 39.4411 38.7154 37.6261 37.5053C37.1091 37.1607 36.9694 36.4622 37.3141 35.9453C37.6587 35.4283 38.3572 35.2887 38.8741 35.6333L39.6256 36.1342L41.2515 33.6954C41.5961 33.1784 42.2947 33.0388 42.8115 33.3834C43.3285 33.728 43.4682 34.4265 43.1235 34.9434L40.8736 38.3183C40.6567 38.6434 40.3 38.8194 39.9365 38.8194V38.8194Z" fill="white" />
									<path d="M34.312 21.8744H24.75C24.1287 21.8744 23.625 21.3707 23.625 20.7495C23.625 20.1282 24.1287 19.6245 24.75 19.6245H34.312C34.9334 19.6245 35.437 20.1282 35.437 20.7495C35.437 21.3707 34.9333 21.8744 34.312 21.8744Z" fill="white" />
									<path d="M34.312 26.3744H24.75C24.1287 26.3744 23.625 25.8707 23.625 25.2495C23.625 24.6282 24.1287 24.1245 24.75 24.1245H34.312C34.9334 24.1245 35.437 24.6282 35.437 25.2495C35.437 25.8707 34.9333 26.3744 34.312 26.3744Z" fill="white" />
									<path d="M30.3747 30.8744H24.75C24.1287 30.8744 23.625 30.3707 23.625 29.7495C23.625 29.1282 24.1287 28.6245 24.75 28.6245H30.3747C30.996 28.6245 31.4997 29.1282 31.4997 29.7495C31.4997 30.3707 30.996 30.8744 30.3747 30.8744Z" fill="white" />
								</svg>
							</div>
							<div class="etn-label-content">
								<label for="certificate_builder_mod">
									<?php if (!class_exists('Wpeventin_Pro')) { ?>
										<a title="<?php echo esc_attr('Go Pro', 'eventin'); ?>" class="etn-pro-deactive" href="<?php echo esc_url(\Etn\Bootstrap::get_pro_link()) ?>" target="_blank">
											<?php esc_html_e('Certificate Builder', 'eventin'); ?>
										</a>
									<?php } else { ?>
										<?php esc_html_e('Certificate Builder', 'eventin'); ?>
									<?php } ?>
								</label>
								<div class="etn-desc">
									<?php esc_html_e('You can design and send a PDF certificate for the event attendee.', 'eventin'); ?>
								</div>
								<?php if (!class_exists('Wpeventin_Pro')) { ?>
									<a href="https://themewinter.com/eventin/#ts-pricing-list" target="_blank" class="etn-btn-text">
										<?php echo esc_html__('Upgrade to Pro', 'eventin');  ?>
									</a>
								<?php } else { ?>
									<ul class="demo-link">
										<li><a href="<?php echo esc_url(admin_url('admin.php?page=etn-event-settings#attendee-settings')); ?>"><?php echo esc_html__('Go to Settings','eventin'); ?></a></li>
										<li><a href="https://product.themewinter.com/eventin/" target="_blank"><?php echo esc_html__('View Demo','eventin'); ?></a></li>
									</ul>
								<?php } ?>
							</div>
						</div>
						<div class="etn-meta">
							<?php if (!class_exists('Wpeventin_Pro')) { ?>
								<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M5.79688 10.6V8.2C5.79688 4.228 6.99687 1 12.9969 1C18.9969 1 20.1969 4.228 20.1969 8.2V10.6" stroke="#F5841C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M13 20.7998C14.6569 20.7998 16 19.4567 16 17.7998C16 16.143 14.6569 14.7998 13 14.7998C11.3431 14.7998 10 16.143 10 17.7998C10 19.4567 11.3431 20.7998 13 20.7998Z" stroke="#F5841C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M19 25.0001H7C2.2 25.0001 1 23.8001 1 19.0001V16.6001C1 11.8001 2.2 10.6001 7 10.6001H19C23.8 10.6001 25 11.8001 25 16.6001V19.0001C25 23.8001 23.8 25.0001 19 25.0001Z" stroke="#F5841C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							<?php } else { ?>
								<input type="checkbox" name="certificate_builder" class="etn-admin-control-input" value="off" <?php echo esc_attr($certificate_builder) ?> />
								<input type="checkbox" name="certificate_builder" id='certificate_builder_mod' class="etn-admin-control-input" <?php echo esc_attr($certificate_builder) . " " . esc_attr($disable_switch); ?> />
								<label for="certificate_builder_mod" class="etn_switch_button_label"></label>
							<?php } ?>
						</div>
						<?php if (!class_exists('Wpeventin_Pro')) { ?>
							<span class="etn-badge"><?php echo esc_html__('Pro', 'eventin'); ?></span>
						<?php } ?>
					</div>
				</div>
				<div class="etn-col-md-6 etn-col-lg-4">
					<div class="etn-label-item etn-addons-item">
						<div class="etn-label">
							<div class="etn-label-icon">
								<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="32" cy="32" r="32" fill="#1AA1A6" />
									<path fill-rule="evenodd" clip-rule="evenodd" d="M19.1161 16.2691C20.2681 14.755 22.4518 14 26.2067 14H37.2861C41.0411 14 43.2248 14.755 44.3768 16.2691C44.9405 17.0101 45.2001 17.8646 45.3253 18.7348C45.4479 19.5875 45.4479 20.5123 45.4479 21.4169V31.5069C45.4479 31.9154 45.1007 32.2466 44.6723 32.2466C44.244 32.2466 43.8968 31.9154 43.8968 31.5069V21.4466C43.8968 20.5078 43.8954 19.6788 43.7886 18.9359C43.6829 18.2012 43.4809 17.6105 43.1214 17.138C42.4268 16.2251 40.9174 15.4795 37.2861 15.4795H26.2067C22.5754 15.4795 21.066 16.2251 20.3715 17.138C20.012 17.6105 19.8099 18.2012 19.7042 18.9359C19.5974 19.6788 19.596 20.5078 19.596 21.4466V31.5069C19.596 31.9154 19.2488 32.2466 18.8205 32.2466C18.3922 32.2466 18.0449 31.9154 18.0449 31.5069L18.0449 21.4169C18.0449 20.5123 18.0449 19.5875 18.1675 18.7348C18.2927 17.8646 18.5523 17.0101 19.1161 16.2691Z" fill="white" />
									<path fill-rule="evenodd" clip-rule="evenodd" d="M16.0346 33.1693C17.1553 31.5731 19.2949 30.7671 22.9784 30.7671C23.9309 30.7671 24.6141 30.8647 25.2063 31.0916C25.7739 31.3091 26.2082 31.6297 26.6509 31.9566C26.6628 31.9654 26.6747 31.9741 26.6865 31.9829C26.7221 32.0091 26.7551 32.0383 26.7854 32.0701L28.6052 33.9848C28.6056 33.9852 28.606 33.9857 28.6064 33.9861C30.454 35.9095 33.5485 35.9057 35.3746 33.9871L35.3768 33.9848L37.2172 32.0675C37.2467 32.0367 37.2789 32.0084 37.3135 31.9829L37.3491 31.9566C37.7918 31.6297 38.2261 31.3091 38.7937 31.0916C39.3859 30.8647 40.0691 30.7671 41.0216 30.7671C44.7051 30.7671 46.8447 31.5731 47.9654 33.1693C48.5095 33.9442 48.7599 34.8367 48.881 35.7487C49 36.6457 49 37.6197 49 38.5798V40.3835C49 42.8977 48.5419 45.3251 47.0235 47.1279C45.4796 48.961 42.9696 50 39.2172 50H24.7828C20.1968 50 17.6062 48.9941 16.26 47.0762C15.6032 46.1404 15.2965 45.0566 15.1472 43.9323C15 42.8232 15 41.6162 15 40.4124L15 38.5799C15 37.6198 15 36.6457 15.119 35.7487C15.2401 34.8367 15.4905 33.9442 16.0346 33.1693ZM16.6289 35.938C16.5236 36.7315 16.5224 37.6157 16.5224 38.6082V40.3835C16.5224 41.6201 16.5236 42.7373 16.6571 43.743C16.7898 44.7425 17.0468 45.5716 17.5177 46.2425C18.427 47.538 20.3471 48.5205 24.7828 48.5205H39.2172C42.6821 48.5205 44.6829 47.5711 45.8455 46.1908C47.0335 44.7803 47.4776 42.7693 47.4776 40.3835V38.6082C47.4776 37.6157 47.4764 36.7315 47.3711 35.938C47.2666 35.1507 47.0659 34.5131 46.7079 34.0031C46.0243 33.0295 44.5553 32.2465 41.0216 32.2465C40.1697 32.2465 39.6981 32.3353 39.3521 32.4679C39.0095 32.5992 38.7376 32.7902 38.2859 33.123L36.4922 34.9917C36.4918 34.9921 36.4915 34.9925 36.4911 34.9929C34.0593 37.5465 29.9384 37.5427 27.4919 34.994L27.4894 34.9913L25.7126 33.1219C25.2618 32.7898 24.9901 32.5991 24.6479 32.4679C24.3019 32.3353 23.8303 32.2465 22.9784 32.2465C19.4447 32.2465 17.9757 33.0295 17.2921 34.0031C16.9341 34.5131 16.7334 35.1507 16.6289 35.938Z" fill="white" />
									<path d="M35.9434 20.6575H37.3274L35.7127 26.5753H34.3288L32.7141 20.6575H34.0981L35.0207 24.0405L35.9434 20.6575ZM25.8864 24.5041L26.7168 26.5753H25.3328L24.5486 24.6027H23.4875V26.5753H22.1035V20.6575H25.3328C26.1171 20.6575 26.7168 21.2986 26.7168 22.137V23.1233C26.7168 23.7151 26.3477 24.2575 25.8864 24.5041ZM25.3328 22.137H23.4875V23.1233H25.3328V22.137ZM41.018 24.6027H39.1727V26.5753H37.7887V20.6575H41.018C41.7838 20.6575 42.402 21.3184 42.402 22.137V23.1233C42.402 23.9419 41.7838 24.6027 41.018 24.6027ZM41.018 22.137H39.1727V23.1233H41.018V22.137ZM31.7914 20.6575V22.137H29.0235V22.8767H30.8688C31.3762 22.8767 31.7914 23.3205 31.7914 23.863V25.589C31.7914 26.1315 31.3762 26.5753 30.8688 26.5753H27.6395V25.0959H30.4075V24.3562H28.3315C27.9532 24.3562 27.6395 24.0208 27.6395 23.6164V21.6438C27.6395 21.1014 28.0547 20.6575 28.5621 20.6575H31.7914Z" fill="white" />
								</svg>
							</div>
							<div class="etn-label-content">
								<label for="rsvp_mod">
									<?php if (!class_exists('Wpeventin_Pro')) { ?>
										<a target="_blank" title="<?php echo esc_attr('Go Pro', 'eventin'); ?>" class="etn-pro-deactive" href="<?php echo esc_url(\Etn\Bootstrap::get_pro_link()) ?>">
											<?php esc_html_e('RSVP Module', 'eventin'); ?>
										</a>
									<?php } else { ?>
										<?php esc_html_e('RSVP Module', 'eventin'); ?>
									<?php } ?>
								</label>
								<div class="etn-desc">
									<?php esc_html_e('It allows you to add RSVP at your upcoming events and grab user\'s attention easily.', 'eventin'); ?>
								</div>
								<?php if (!class_exists('Wpeventin_Pro')) { ?>
									<a target="_blank" href="https://themewinter.com/eventin/#ts-pricing-list" class="etn-btn-text">
										<?php echo esc_html__('Upgrade to Pro', 'eventin');  ?>
									</a>
								<?php } else { ?>
									<ul class="demo-link">
										<li><a href="<?php echo esc_url(admin_url('admin.php?page=etn-event-settings#etn-rsvp')); ?>"><?php echo esc_html__('Go to Settings','eventin'); ?></a></li>
										<li><a href="https://product.themewinter.com/eventin/"><?php echo esc_html__('View Demo','eventin'); ?></a></li>
									</ul>
								<?php } ?>
							</div>
						</div>
						<div class="etn-meta">
							<?php if (!class_exists('Wpeventin_Pro')) { ?>
								<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M5.79688 10.6V8.2C5.79688 4.228 6.99687 1 12.9969 1C18.9969 1 20.1969 4.228 20.1969 8.2V10.6" stroke="#F5841C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M13 20.7998C14.6569 20.7998 16 19.4567 16 17.7998C16 16.143 14.6569 14.7998 13 14.7998C11.3431 14.7998 10 16.143 10 17.7998C10 19.4567 11.3431 20.7998 13 20.7998Z" stroke="#F5841C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M19 25.0001H7C2.2 25.0001 1 23.8001 1 19.0001V16.6001C1 11.8001 2.2 10.6001 7 10.6001H19C23.8 10.6001 25 11.8001 25 16.6001V19.0001C25 23.8001 23.8 25.0001 19 25.0001Z" stroke="#F5841C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							<?php } else { ?>
								<input type="checkbox" name="rsvp" class="etn-admin-control-input" value="off" <?php echo esc_attr($rsvp) ?> />
								<input type="checkbox" name="rsvp" id='rsvp_mod' class="etn-admin-control-input" <?php echo esc_attr($rsvp) . " " . esc_attr($disable_switch); ?> />
								<label for="rsvp_mod" class="etn_switch_button_label"></label>
							<?php } ?>
						</div>
						<?php if (!class_exists('Wpeventin_Pro')) { ?>
							<span class="etn-badge"><?php echo esc_html__('Pro', 'eventin'); ?></span>
						<?php } ?>
					</div>
				</div>

				<div class="etn-col-md-6 etn-col-lg-4">
					<div class="etn-label-item etn-addons-item">
						<div class="etn-label">
							<div class="etn-label-icon">
								<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect width="64" height="64" rx="32" fill="#C1FF10"/>
									<path d="M34.125 31.7287L37.2832 35.3386L41.5299 38.0525L42.2704 31.7509L41.5299 25.5901L37.2017 27.9745L34.125 31.7287Z" fill="#00832D"/>
									<path d="M15.8008 37.4675V42.8361C15.8008 44.0634 16.7949 45.0575 18.0222 45.0575H23.3908L24.5015 40.9997L23.3908 37.4675L19.7068 36.3568L15.8008 37.4675Z" fill="#0066DA"/>
									<path d="M23.3908 18.4L15.8008 25.99L19.7068 27.1007L23.3908 25.99L24.483 22.506L23.3908 18.4Z" fill="#E94235"/>
									<path d="M23.3908 25.99H15.8008V37.4675H23.3908V25.99Z" fill="#2684FC"/>
									<path d="M46.3788 21.6137L41.5286 25.5901V38.0525L46.401 42.0474C47.1304 42.6176 48.1967 42.0974 48.1967 41.1699V22.4726C48.1967 21.5341 47.1064 21.0194 46.3788 21.6137ZM34.1238 31.7287V37.4675H23.3867V45.0575H39.3072C40.5345 45.0575 41.5286 44.0634 41.5286 42.836V38.0525L34.1238 31.7287Z" fill="#00AC47"/>
									<path d="M39.3072 18.4H23.3867V25.99H34.1238V31.7287L41.5286 25.5938V20.6214C41.5286 19.3941 40.5345 18.4 39.3072 18.4Z" fill="#FFBA00"/>
								</svg>
							</div>
							<div class="etn-label-content">
								<label for="googlemeet_mod">
									<?php if (!class_exists('Wpeventin_Pro')) { ?>
										<a target="_blank" title="<?php echo esc_attr('Go Pro', 'eventin'); ?>" class="etn-pro-deactive" href="<?php echo esc_url(\Etn\Bootstrap::get_pro_link()) ?>">
											<?php esc_html_e('Google Meet', 'eventin'); ?>
										</a>
									<?php } else { ?>
										<?php esc_html_e('Google Meet', 'eventin'); ?>
									<?php } ?>
								</label>
								<div class="etn-desc">
									<?php esc_html_e('It allows you to add Google Meet for all users.', 'eventin'); ?>
								</div>
								<?php if (!class_exists('Wpeventin_Pro')) { ?>
									<a target="_blank" href="https://themewinter.com/eventin/#ts-pricing-list" class="etn-btn-text">
										<?php echo esc_html__('Upgrade to Pro', 'eventin');  ?>
									</a>
								<?php } else { ?>
									<ul class="demo-link">
										<li><a href="<?php echo esc_url(admin_url('admin.php?page=etn-event-settings#etn-user_data')); ?>"><?php echo esc_html__('Go to Settings','eventin'); ?></a></li>
										<li><a href="https://product.themewinter.com/eventin/"><?php echo esc_html__( 'View Demo', 'eventin' ); ?></a></li>
									</ul>
								<?php } ?>
							</div>
						</div>
						<div class="etn-meta">
							<?php if (!class_exists('Wpeventin_Pro')) { ?>
								<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M5.79688 10.6V8.2C5.79688 4.228 6.99687 1 12.9969 1C18.9969 1 20.1969 4.228 20.1969 8.2V10.6" stroke="#F5841C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M13 20.7998C14.6569 20.7998 16 19.4567 16 17.7998C16 16.143 14.6569 14.7998 13 14.7998C11.3431 14.7998 10 16.143 10 17.7998C10 19.4567 11.3431 20.7998 13 20.7998Z" stroke="#F5841C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M19 25.0001H7C2.2 25.0001 1 23.8001 1 19.0001V16.6001C1 11.8001 2.2 10.6001 7 10.6001H19C23.8 10.6001 25 11.8001 25 16.6001V19.0001C25 23.8001 23.8 25.0001 19 25.0001Z" stroke="#F5841C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							<?php } else { ?>
								<input type="checkbox" name="google_meet" class="etn-admin-control-input" value="off" <?php echo esc_attr($google_meet) ?> />
								<input type="checkbox" name="google_meet" id='googlemeet_mod' class="etn-admin-control-input" <?php echo esc_attr($google_meet) . " " . esc_attr($disable_switch); ?> />
								<label for="googlemeet_mod" class="etn_switch_button_label"></label>
							<?php } ?>
						</div>
						<?php if (!class_exists('Wpeventin_Pro')) { ?>
							<span class="etn-badge"><?php echo esc_html__( 'Pro', 'eventin' ); ?></span>
						<?php } ?>
					</div>
				</div>

			</div>
		</div><!-- ./module-sec -->

		<div class="module-sec">
			<div class="etn-row">
				<div class="etn-col-12">
					<h2 class="etn-addon-title"><?php echo esc_html__('Addons', 'eventin'); ?></h2>
				</div>
				<div class="etn-col-md-6 etn-col-lg-4">
					<div class="etn-label-item etn-addons-item">
						<div class="etn-label">
							<div class="etn-label-icon">
								<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect width="64" height="64" rx="32" fill="#8D4BE9" />
									<path d="M32.1845 41.6775H25.5312V22.9092H32.2395C34.1273 22.9092 35.7524 23.2849 37.1148 24.0364C38.4772 24.7817 39.525 25.8539 40.2582 27.253C40.9974 28.6521 41.367 30.3261 41.367 32.275C41.367 34.23 40.9974 35.9102 40.2582 37.3153C39.525 38.7205 38.4711 39.7988 37.0965 40.5503C35.728 41.3018 34.0906 41.6775 32.1845 41.6775ZM29.4994 38.2776H32.0195C33.1925 38.2776 34.1792 38.0699 34.9796 37.6544C35.786 37.2329 36.3909 36.5822 36.7941 35.7024C37.2034 34.8166 37.4081 33.6741 37.4081 32.275C37.4081 30.8882 37.2034 29.7549 36.7941 28.8751C36.3909 27.9953 35.7891 27.3477 34.9887 26.9323C34.1884 26.5168 33.2017 26.3091 32.0287 26.3091H29.4994V38.2776Z" fill="white" />
									<path fill-rule="evenodd" clip-rule="evenodd" d="M32 48.129C40.9078 48.129 48.129 40.9078 48.129 32C48.129 23.0922 40.9078 15.871 32 15.871C23.0922 15.871 15.871 23.0922 15.871 32C15.871 40.9078 23.0922 48.129 32 48.129ZM32 52C43.0457 52 52 43.0457 52 32C52 20.9543 43.0457 12 32 12C20.9543 12 12 20.9543 12 32C12 43.0457 20.9543 52 32 52Z" fill="white" />
								</svg>
							</div>
							<div class="etn-label-content">
								<label for="divi_mod">
									<?php if (!class_exists('Wpeventin_Pro')) { ?>
										<a target="_blank" title="<?php echo esc_attr('Go Pro', 'eventin'); ?>" class="etn-pro-deactive" href="https://themewinter.com/eventin/#ts-pricing-list">
											<?php esc_html_e('Eventin Divi Addon', 'eventin'); ?>
										</a>
									<?php } else { ?>
										<?php esc_html_e('Eventin Divi Addon', 'eventin'); ?>
									<?php } ?>
								</label>
								<div class="etn-desc">
									<?php esc_html_e('It enable the Eventin featured and module inside DIVI editing panel.', 'eventin'); ?>
								</div>
								<?php if (!class_exists('Wpeventin_Pro')) { ?>
									<a target="_blank" href="https://themewinter.com/eventin/#ts-pricing-list" class="etn-btn-text">
										<?php echo esc_html__('Upgrade to Pro', 'eventin');  ?>
									</a>
								<?php } else { ?>
									<?php $plugin = $pluginStatus->get_status( 'eventin-divi-addon/eventin-divi-addon.php' ); ?>
									<a data-plugin_status="<?php echo esc_attr( $plugin['status'] ); ?>" data-activation_url="<?php echo esc_url( $plugin['activation_url'] ); ?>" href="<?php echo esc_url( $plugin['installation_url'] ); ?>" class="etn-btn-text etn-addon-install_plugin <?php echo $plugin['status'] == 'activated' ? 'activated' : ''; ?>"><?php echo esc_html( $plugin['title'], 'eventin' ); ?></a>
								<?php } ?>
							</div>
						</div>
						<div class="etn-meta">
							<?php if (!class_exists('Wpeventin_Pro')) { ?>
								<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M5.79688 10.6V8.2C5.79688 4.228 6.99687 1 12.9969 1C18.9969 1 20.1969 4.228 20.1969 8.2V10.6" stroke="#F5841C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M13 20.7998C14.6569 20.7998 16 19.4567 16 17.7998C16 16.143 14.6569 14.7998 13 14.7998C11.3431 14.7998 10 16.143 10 17.7998C10 19.4567 11.3431 20.7998 13 20.7998Z" stroke="#F5841C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M19 25.0001H7C2.2 25.0001 1 23.8001 1 19.0001V16.6001C1 11.8001 2.2 10.6001 7 10.6001H19C23.8 10.6001 25 11.8001 25 16.6001V19.0001C25 23.8001 23.8 25.0001 19 25.0001Z" stroke="#F5841C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							<?php }  ?>
						</div>
						<?php if (!class_exists('Wpeventin_Pro')) { ?>
							<span class="etn-badge"><?php echo esc_html__('Pro', 'eventin'); ?></span>
						<?php } ?>
					</div>
				</div>
				<div class="etn-col-md-6 etn-col-lg-4">
					<div class="etn-label-item etn-addons-item">
						<div class="etn-label">
							<div class="etn-label-icon">
								<svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="32" cy="32" r="32" fill="#FFD43D"/>
									<path d="M17.2305 15.7538H33.4766V32H17.2305V15.7538Z" fill="white" fill-opacity="0.5"/>
									<path d="M17.2305 32H33.4766V48.2462H17.2305V32Z" fill="white"/>
									<path d="M33.4766 32H49.7228V48.2462H33.4766V32Z" fill="white" fill-opacity="0.5"/>
								</svg>
							</div>
							<div class="etn-label-content">
								<label for="divi_mod">
									<?php if (!class_exists('Wpeventin_Pro')) { ?>
										<a target="_blank" title="<?php echo esc_attr('Go Pro', 'eventin'); ?>" class="etn-pro-deactive" href="https://themewinter.com/eventin/#ts-pricing-list">
											<?php esc_html_e('Eventin Bricks Addon', 'eventin'); ?>
										</a>
									<?php } else { ?>
										<?php esc_html_e('Eventin Bricks Addon', 'eventin'); ?>
									<?php } ?>
								</label>
								<div class="etn-desc">
									<?php esc_html_e('It\'s enable the Eventin featured and module inside Bricks editing panel.', 'eventin'); ?>
								</div>
								<?php if (!class_exists('Wpeventin_Pro')) { ?>
									<a target="_blank" href="https://themewinter.com/eventin/#ts-pricing-list" class="etn-btn-text">
										<?php echo esc_html__('Upgrade to Pro', 'eventin');  ?>
									</a>
								<?php } else { ?>
									<a target="_blank" href="https://support.themewinter.com/docs/plugins/plugin-docs/integration/bricks-builder-integration/" class="etn-btn-text">
										<?php echo esc_html__('Documentation', 'eventin');  ?>
									</a>	
								<?php } ?>
							</div>
						</div>
						<div class="etn-meta">
							<?php if (!class_exists('Wpeventin_Pro')) { ?>
								<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M5.79688 10.6V8.2C5.79688 4.228 6.99687 1 12.9969 1C18.9969 1 20.1969 4.228 20.1969 8.2V10.6" stroke="#F5841C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M13 20.7998C14.6569 20.7998 16 19.4567 16 17.7998C16 16.143 14.6569 14.7998 13 14.7998C11.3431 14.7998 10 16.143 10 17.7998C10 19.4567 11.3431 20.7998 13 20.7998Z" stroke="#F5841C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
									<path d="M19 25.0001H7C2.2 25.0001 1 23.8001 1 19.0001V16.6001C1 11.8001 2.2 10.6001 7 10.6001H19C23.8 10.6001 25 11.8001 25 16.6001V19.0001C25 23.8001 23.8 25.0001 19 25.0001Z" stroke="#F5841C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							<?php }  ?>
						</div>
						<?php if (!class_exists('Wpeventin_Pro')) { ?>
							<span class="etn-badge"><?php echo esc_html__('Pro', 'eventin'); ?></span>
						<?php } ?>
					</div>
				</div>
			</div>
		</div><!-- ./module-sec -->

		<div class="mt-4 etn_submit_wrap">
			<input type="hidden" name="etn_addons_action" value="addons_save">
			<input type="submit" name="submit" id="eventin_addons_submit" class="etn-btn etn-btn-primary etn_save_settings" value="<?php esc_attr_e('Save Change', 'eventin'); ?>">
		</div>
		<?php wp_nonce_field('eventin-addons-page', 'eventin-addons-page'); ?>
	</form>
</div>