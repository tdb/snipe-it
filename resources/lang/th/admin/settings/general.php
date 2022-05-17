<?php

return [
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'โดเมน Active Directory',
    'ad_domain_help'			=> 'นี่เป็นบางครั้งเหมือนกับโดเมนอีเมลของคุณ แต่ไม่บ่อยนัก',
    'ad_append_domain_label'    => 'Append domain name',
    'ad_append_domain'          => 'Append domain name to username field',
    'ad_append_domain_help'     => 'User isn\'t required to write "username@domain.local", they can just type "username".',
    'admin_cc_email'            => 'อีเมล สำเนาถึง',
    'admin_cc_email_help'       => 'หากคุณต้องการส่งสำเนาเช็คอิน / เช็คเอาต์อีเมลที่ส่งถึงผู้ใช้ไปยังบัญชีอีเมลอื่นให้ป้อนได้ที่นี่ มิฉะนั้นปล่อยให้ฟิลด์นี้ว่างเปล่า',
    'is_ad'				        => 'นี่คือเซิร์ฟเวอร์ Active Directory',
    'alerts'                	=> 'Alerts',
    'alert_title'               => 'Update Alert Settings',
    'alert_email'				=> 'ส่งแจ้งเตือนไปยัง',
    'alert_email_help'    => 'Email addresses or distribution lists you want alerts to be sent to, comma separated',
    'alerts_enabled'			=> 'การแจ้งเตือนถูกเปิดใช้งานแล้ว',
    'alert_interval'			=> 'เกณฑ์การเตือนที่หมดอายุ (เป็นวัน)',
    'alert_inv_threshold'		=> 'เกณฑ์การแจ้งเตือนพื้นที่โฆษณา',
    'allow_user_skin'           => 'Allow User Skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.',
    'asset_ids'					=> 'รหัสทรัพย์สิน',
    'audit_interval'            => 'ช่วงการตรวจสอบ',
    'audit_interval_help'       => 'If you are required to regularly physically audit your assets, enter the interval in months that you use. If you update this value, all of the "next audit dates" for assets with an upcoming audit date.',
    'audit_warning_days'        => 'เกณฑ์การตรวจสอบคำเตือน',
    'audit_warning_days_help'   => 'เราควรเตือนล่วงหน้ากี่วันเมื่อสินทรัพย์มีกำหนดการตรวจสอบ?',
    'auto_increment_assets'		=> 'Generate auto-incrementing asset tags',
    'auto_increment_prefix'		=> 'Prefix (ส่วนเสริม)',
    'auto_incrementing_help'    => 'Enable auto-incrementing asset tags first to set this',
    'backups'					=> 'สำรอง',
    'backups_restoring'         => 'Restoring from Backup',
    'backups_upload'            => 'Upload Backup',
    'backups_path'              => 'Backups on the server are stored in <code>:path</code>',
    'backups_restore_warning'   => 'Use the restore button <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> to restore from a previous backup. (This does not currently work with S3 file storage or Docker.<br><br>Your <strong>entire :app_name database and any uploaded files will be completely replaced</strong> by what\'s in the backup file.  ',
    'backups_logged_out'         => 'All existing users, including you, will be logged out once your restore is complete.',
    'backups_large'             => 'Very large backups may time out on the restore attempt and may still need to be run via command line. ',
    'barcode_settings'			=> 'ตั้งค่าบาร์โค๊ด',
    'confirm_purge'			    => 'ยืนยัน Purge',
    'confirm_purge_help'		=> 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone and will PERMANENTLY delete all soft-deleted items and users. (You should make a backup first, just to be safe.)',
    'custom_css'				=> 'กำหนด CSS เอง',
    'custom_css_help'			=> 'ระบุการกำหนด CSS ที่คุณต้องการใช้แทน ห้ามรวม tags นี้ &lt;style&gt;&lt;/style&gt;',
    'custom_forgot_pass_url'	=> 'URL รีเซ็ตรหัสผ่านที่กำหนดเอง',
    'custom_forgot_pass_url_help'	=> 'การทำเช่นนี้จะแทนที่ URL ของรหัสผ่านที่ลืมอยู่ภายในในหน้าจอการเข้าสู่ระบบซึ่งเป็นประโยชน์ในการแนะนำให้ผู้ใช้สามารถกำหนดรหัสผ่าน LDAP หรือใช้งานภายในได้ จะปิดการใช้งานฟังก์ชันรหัสผ่านลืมรหัสผ่านของผู้ใช้ภายในเครื่องได้อย่างมีประสิทธิภาพ',
    'dashboard_message'			=> 'ข้อความในหน้าแดชบอร์ด',
    'dashboard_message_help'	=> 'ข้อความนี้จะปรากฏในแดชบอร์ดสำหรับทุกคนที่มีสิทธิ์ดูแดชบอร์ด',
    'default_currency'  		=> 'สกุลเงินตั้งต้น',
    'default_eula_text'			=> 'ค่าเริ่มต้นข้อกำหนดการใช้งาน',
    'default_language'			=> 'ภาษาเริ่มต้น',
    'default_eula_help_text'	=> 'คุณยังสามารถปรับแต่งข้อตกลงการใช้งานสำหรับกกำหนดให้กับหมวดหมู่ทรัพย์สินได้',
    'display_asset_name'        => 'แสดงชื่อทรัพย์สิน',
    'display_checkout_date'     => 'แสดงวันที่นำออก',
    'display_eol'               => 'ดู EOL ในแบบตาราง',
    'display_qr'                => 'รหัสสแควร์บนจอแสดงผล',
    'display_alt_barcode'		=> 'แสดงบาร์โค้ด 1D',
    'email_logo'                => 'โลโก้อีเมล',
    'barcode_type'				=> 'ประเภทบาร์โค้ด 2D',
    'alt_barcode_type'			=> 'บาร์โค้ด 1D',
    'email_logo_size'       => 'Square logos in email look best. ',
    'enabled'                   => 'Enabled',
    'eula_settings'				=> 'ตั้งค่าข้อตกลงการใช้งาน',
    'eula_markdown'				=> 'อนุญาต EULA นี้ <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Accepted filetypes are ico, png, and gif. Other image formats may not work in all browsers.',
    'favicon_size'          => 'Favicons should be square images, 16x16 pixels.',
    'footer_text'               => 'ข้อความส่วนท้ายเพิ่มเติม ',
    'footer_text_help'          => 'ข้อความนี้จะปรากฏในส่วนท้ายด้านขวา ลิงค์ได้รับอนุญาตให้ใช้เครื่องหมาย <a href="https://help.github.com/articles/github-flavored-markdown/">Github รส</a>การแบ่งบรรทัดส่วนหัวภาพ ฯลฯ อาจส่งผลให้ไม่อาจคาดเดาได้',
    'general_settings'			=> 'การตั้งค่าทั่วไป',
    'general_settings_keywords' => 'company support, signature, acceptance, email format, username format, images, per page, thumbnail, eula,  tos, dashboard, privacy',
    'general_settings_help'     => 'Default EULA and more',
    'generate_backup'			=> 'สร้างการสำรองข้อมูล',
    'header_color'              => 'สีส่วนหัว',
    'info'                      => 'การตั้งค่าเหล่านี้ช่วยให้คุณสามารถปรับแต่งลักษณะบางอย่าง',
    'label_logo'                => 'โลโก้ฉลาก',
    'label_logo_size'           => 'Square logos look best - will be displayed in the top right of each asset label. ',
    'laravel'                   => 'เวอร์ชั่น Laravel',
    'ldap'                      => 'LDAP',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAP Client TLS Key',
    'ldap_client_tls_cert'      => 'LDAP Client-Side TLS Certificate',
    'ldap_enabled'              => 'เปิดใช้งาน LDAP แล้ว',
    'ldap_integration'          => 'การรวม LDAP',
    'ldap_settings'             => 'การตั้งค่า LDAP',
    'ldap_client_tls_cert_help' => 'Client-Side TLS Certificate and Key for LDAP connections are usually only useful in Google Workspace configurations with "Secure LDAP." Both are required.',
     'ldap_client_tls_key'       => 'LDAP Client-Side TLS key',
    'ldap_login_test_help'      => 'ป้อนชื่อผู้ใช้และรหัสผ่าน LDAP ที่ถูกต้องจากฐานข้อมูล DN ที่คุณระบุไว้ด้านบนเพื่อทดสอบว่าการเข้าสู่ระบบ LDAP ของคุณมีการกำหนดค่าอย่างถูกต้องหรือไม่ คุณต้องบันทึกการตั้งค่า LDAP ที่อัปเดตก่อน',
    'ldap_login_sync_help'      => 'นี่เป็นการทดสอบว่า LDAP สามารถซิงค์ได้อย่างถูกต้อง หากแบบสอบถามการตรวจสอบสิทธิ์ LDAP ของคุณไม่ถูกต้องผู้ใช้อาจยังไม่สามารถเข้าสู่ระบบได้ คุณต้องบันทึกการตั้งค่า LDAP ที่อัปเดตก่อน',
    'ldap_server'               => 'เซิร์ฟเวอร์ LDAP',
    'ldap_server_help'          => 'ซึ่งควรเริ่มต้นด้วย ldap: // (สำหรับ unencrypted หรือ TLS) หรือ ldaps: // (สำหรับ SSL)',
    'ldap_server_cert'			=> 'การตรวจสอบใบรับรอง SSL LDAP',
    'ldap_server_cert_ignore'	=> 'อนุญาตใบรับรอง SSL ที่ไม่ถูกต้อง',
    'ldap_server_cert_help'		=> 'เลือกช่องทำเครื่องหมายนี้ถ้าคุณใช้ใบรับรอง SSL ที่ลงนามด้วยตนเองและต้องการยอมรับใบรับรอง SSL ที่ไม่ถูกต้อง',
    'ldap_tls'                  => 'ใช้ TLS',
    'ldap_tls_help'             => 'ควรเลือกเฉพาะกรณีที่คุณใช้งาน STARTTLS บนเซิร์ฟเวอร์ LDAP ของคุณ',
    'ldap_uname'                => 'ชื่อผู้ใช้ LDAP Bind',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'รหัสผ่าน LDAP Bind',
    'ldap_basedn'               => 'ฐานผูก DN',
    'ldap_filter'               => 'ตัวกรอง LDAP',
    'ldap_pw_sync'              => 'การซิงค์รหัสผ่าน LDAP',
    'ldap_pw_sync_help'         => 'ยกเลิกการเลือกช่องนี้หากคุณไม่ต้องการเก็บรหัสผ่าน LDAP ที่ซิงค์กับรหัสผ่านเฉพาะที่ การปิดใช้งานนี้หมายความว่าผู้ใช้ของคุณอาจไม่สามารถเข้าสู่ระบบได้หากเซิร์ฟเวอร์ LDAP ของคุณไม่สามารถเข้าถึงได้เนื่องจากเหตุผลบางประการ',
    'ldap_username_field'       => 'ฟิลด์ชื่อผู้ใช้',
    'ldap_lname_field'          => 'นามสกุล',
    'ldap_fname_field'          => 'ชื่อแรกของ LDAP',
    'ldap_auth_filter_query'    => 'ข้อความค้นหาการตรวจสอบความถูกต้องของ LDAP',
    'ldap_version'              => 'เวอร์ชัน LDAP',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_activated_flag_help'  => 'This flag is used to determine whether a user can login to Snipe-IT and does not affect the ability to check items in or out to them.',
    'ldap_emp_num'              => 'หมายเลขพนักงานของ LDAP',
    'ldap_email'                => 'อีเมล LDAP',
    'ldap_test'                 => 'Test LDAP',
    'ldap_test_sync'            => 'Test LDAP Synchronization',
    'license'                   => 'ไลเซนซ์ซอฟต์แวร์',
    'load_remote_text'          => 'สคริปต์ระยะไกล',
    'load_remote_help_text'		=> 'การติดตั้ง Snipe-IT นี้สามารถโหลดสคริปต์จากภายนอกได้',
    'login'                     => 'Login Attempts',
    'login_attempt'             => 'Login Attempt',
    'login_ip'                  => 'IP Address',
    'login_success'             => 'Success?',
    'login_user_agent'          => 'User Agent',
    'login_help'                => 'List of attempted logins',
    'login_note'                => 'เข้าสู่ระบบหมายเหตุ',
    'login_note_help'           => 'คุณสามารถเลือกไม่กี่ประโยคในหน้าจอการเข้าสู่ระบบของคุณเช่นช่วยผู้ที่พบอุปกรณ์สูญหายหรือถูกขโมย ฟิลด์นี้ยอมรับเครื่องหมายการค้าที่มีรสปรุงรส <a href="https://help.github.com/articles/github-flavored-markdown/">Github</a>',
    'login_remote_user_text'    => 'ตัวเลือกการล็อกอินของผู้ใช้ระยะไกล',
    'login_remote_user_enabled_text' => 'เปิดใช้งานการเข้าสู่ระบบด้วย User Header ระยะไกล',
    'login_remote_user_enabled_help' => 'ตัวเลือกนี้จะช่วยให้การตรวจสอบความถูกต้องผ่านทางส่วนหัว REMOTE_USER ตาม "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'ปิดใช้งานกลไกการตรวจสอบสิทธิ์อื่น ๆ',
    'login_common_disabled_help' => 'ตัวเลือกนี้ปิดใช้งานกลไกการตรวจสอบสิทธิ์อื่น ๆ เพียงเปิดใช้งานตัวเลือกนี้หากคุณแน่ใจว่าการเข้าสู่ระบบ REMOTE_USER ของคุณกำลังทำงานอยู่แล้ว',
    'login_remote_user_custom_logout_url_text' => 'URL ออกจากระบบแบบกำหนดเอง',
    'login_remote_user_custom_logout_url_help' => 'หากมีการระบุ URL ไว้ที่นี่ผู้ใช้จะได้รับการเปลี่ยนเส้นทางไปยัง URL นี้หลังจากที่ผู้ใช้ล็อกออกจาก Snipe-IT ซึ่งจะเป็นประโยชน์ในการปิดเซสชันผู้ใช้ของผู้ให้บริการการรับรองความถูกต้องของคุณอย่างถูกต้อง',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'โลโก้',
    'logo_print_assets'         => 'ใช้ในการพิมพ์',
    'logo_print_assets_help'    => 'ใช้ตราสินค้าบนสินทรัพย์สามารถพิมพ์รายการ ',
    'full_multiple_companies_support_help_text' => 'จำกัด ผู้ใช้ (รวมทั้งผู้ดูแลระบบ) ที่มอบหมายให้ บริษัท ไปยังสินทรัพย์ของ บริษัท',
    'full_multiple_companies_support_text' => 'การสนับสนุนหลาย บริษัท',
    'show_in_model_list'   => 'แสดงใน Dropdown แบบจำลอง',
    'optional'					=> 'ออฟชั่นเสริม',
    'per_page'                  => 'ผลการค้นหาต่อหน้า',
    'php'                       => 'เวอร์ชัน PHP',
    'php_info'                  => 'PHP Info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, system, info',
    'php_overview_help'         => 'PHP System info',
    'php_gd_info'               => 'คุณต้องติดตั้ง php-gd เพื่อแสดง QR codes, ดูในคู่มือการติดตั้ง',
    'php_gd_warning'            => 'ยังไม่ได้ติดตั้ง PHP imgae processing และ GD plugin',
    'pwd_secure_complexity'     => 'ความซับซ้อนของรหัสผ่าน',
    'pwd_secure_complexity_help' => 'เลือกกฎความซับซ้อนของรหัสผ่านที่คุณต้องการบังคับใช้',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Password cannot be the same as first name, last name, email, or username',
    'pwd_secure_complexity_letters' => 'Require at least one letter',
    'pwd_secure_complexity_numbers' => 'Require at least one number',
    'pwd_secure_complexity_symbols' => 'Require at least one symbol',
    'pwd_secure_complexity_case_diff' => 'Require at least one uppercase and one lowercase',
    'pwd_secure_min'            => 'รหัสผ่านขั้นต่ำอักขระ',
    'pwd_secure_min_help'       => 'Minimum permitted value is 8',
    'pwd_secure_uncommon'       => 'ป้องกันรหัสผ่านทั่วไป',
    'pwd_secure_uncommon_help'  => 'การดำเนินการนี้จะไม่อนุญาตให้ผู้ใช้ใช้รหัสผ่านทั่วไปจากรหัสผ่าน 10,000 อันดับแรกที่รายงานว่าละเมิด',
    'qr_help'                   => 'เปิดใช้งาน QR Codes ก่อนการตั้งค่านี้',
    'qr_text'                   => 'ข้อความโค้ด QR',
    'saml'                      => 'SAML',
    'saml_title'                => 'Update SAML settings',
    'saml_help'                 => 'SAML settings',
    'saml_enabled'              => 'SAML enabled',
    'saml_integration'          => 'SAML Integration',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Public Certificate',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'You can specify the IdP metadata using a URL or XML file.',
    'saml_attr_mapping_username' => 'Attribute Mapping - Username',
    'saml_attr_mapping_username_help' => 'NameID will be used if attribute mapping is unspecified or invalid.',
    'saml_forcelogin_label'     => 'SAML Default Login',
    'saml_forcelogin'           => 'Make SAML the primary login',
    'saml_forcelogin_help'      => 'You can use \'/login?nosaml\' to get to the normal login page.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'You can specify additional settings to the onelogin/php-saml library. Use at your own risk.',
    'saml_download'             => 'Download Metadata',
    'setting'                   => 'การตั้งค่า',
    'settings'                  => 'ตั้งค่า',
    'show_alerts_in_menu'       => 'แสดงการแจ้งเตือนในเมนูด้านบน',
    'show_archived_in_list'     => 'สินทรัพย์ที่เก็บถาวร',
    'show_archived_in_list_text'     => 'แสดงเนื้อหาที่เก็บถาวรในรายการ "เนื้อหาทั้งหมด"',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'แสดงภาพในอีเมล',
    'show_images_in_email_help'   => 'ยกเลิกการทำเครื่องหมายในช่องนี้หากการติดตั้ง Snipe-IT ของคุณอยู่หลัง VPN หรือเครือข่ายที่ปิดอยู่และผู้ใช้ภายนอกเครือข่ายจะไม่สามารถโหลดภาพที่แสดงจากการติดตั้งนี้ในอีเมลของตนได้',
    'site_name'                 => 'ชื่อไซต์',
    'slack'                     => 'Slack',
    'slack_title'               => 'Update Slack Settings',
    'slack_help'                => 'Slack settings',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack Channel',
    'slack_endpoint'            => 'Slack Endpoint',
    'slack_integration'         => 'Slack Settings',
    'slack_integration_help'    => 'Slack integration is optional, however the endpoint and channel are required if you wish to use it. To configure Slack integration, you must first <a href=":slack_link" target="_new" rel="noopener">create an incoming webhook</a> on your Slack account. Click on the <strong>Test Slack Integration</strong> button to confirm your settings are correct before saving. ',
    'slack_integration_help_button'    => 'เมื่อคุณได้บันทึกข้อมูลของคุณแล้วปุ่มทดสอบจะปรากฏขึ้น',
    'slack_test_help'           => 'ทดสอบว่าการบูรณาการแบบ Slack ของคุณได้รับการกำหนดค่าอย่างถูกต้องหรือไม่ คุณต้องบันทึกการตั้งค่าที่เพิ่งอัปโหลดไว้ก่อน',
    'snipe_version'  			=> 'Snipe-IT version',
    'support_footer'            => 'ลิงค์ในส่วนท้ายของหน้า ',
    'support_footer_help'       => 'ระบุผู้ที่เห็นลิงก์ไปยังข้อมูลสนับสนุน Snipe-IT และคู่มือผู้ใช้',
    'version_footer'            => 'รุ่นในส่วนท้าย ',
    'version_footer_help'       => 'ระบุผู้ที่สามารถเห็นเวอร์ชัน Snipe-IT และบิวด์',
    'system'                    => 'ข้อมูลระบบ',
    'update'                    => 'แก้ไขการตั้งค่า',
    'value'                     => 'มูลค่า',
    'brand'                     => 'การสร้างแบรนด์',
    'brand_keywords'            => 'footer, logo, print, theme, skin, header, colors, color, css',
    'brand_help'                => 'Logo, Site Name',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'เกี่ยวกับการตั้งค่า',
    'about_settings_text'       => 'การตั้งค่าเหล่านี้ช่วยให้คุณสามารถปรับแต่งลักษณะการติดตั้งของคุณได้',
    'labels_per_page'           => 'ป้ายกำกับต่อหน้า',
    'label_dimensions'          => 'ขนาดฉลาก (นิ้ว)',
    'next_auto_tag_base'        => 'การเพิ่มอัตโนมัติครั้งต่อไป',
    'page_padding'              => 'ส่วนของหน้า (นิ้ว)',
    'privacy_policy_link'       => 'ลิงก์ไปยังนโยบายส่วนบุคคล',
    'privacy_policy'            => 'นโยบายความเป็นส่วนตัว',
    'privacy_policy_link_help'  => 'หากรวม URL ไว้ที่นี่ลิงก์เชื่อมโยงไปยังนโยบายส่วนบุคคลของคุณจะรวมอยู่ในส่วนท้ายของแอปและในอีเมลที่ระบบส่งออกตามเกณฑ์ GDPR ',
    'purge'                     => 'ล้างข้อมูลที่ถูกลบ',
    'purge_deleted'             => 'Purge Deleted ',
    'labels_display_bgutter'    => 'ป้ายก้นท่อ',
    'labels_display_sgutter'    => 'รางด้านฉลาก',
    'labels_fontsize'           => 'ขนาดแบบอักษรของป้ายกำกับ',
    'labels_pagewidth'          => 'ความกว้างของแผ่นฉลาก',
    'labels_pageheight'         => 'ความสูงของแผ่นฉลาก',
    'label_gutters'        => 'ระยะห่างของป้ายกำกับ (นิ้ว)',
    'page_dimensions'        => 'ขนาดหน้าเว็บ (นิ้ว)',
    'label_fields'          => 'ระบุฟิลด์ที่มองเห็นได้',
    'inches'        => 'นิ้ว',
    'width_w'        => 'W',
    'height_h'        => 'ชั่วโมง',
    'show_url_in_emails'                => 'เชื่อมโยงกับ Snipe-IT ในอีเมล',
    'show_url_in_emails_help_text'      => 'ยกเลิกการเลือกช่องนี้หากคุณไม่ต้องการเชื่อมโยงกับการติดตั้ง Snipe-IT ในส่วนท้ายของอีเมล มีประโยชน์หากผู้ใช้ส่วนใหญ่ไม่เคยเข้าสู่ระบบ',
    'text_pt'        => 'จุด',
    'thumbnail_max_h'   => 'ความสูงของภาพขนาดย่อสูงสุด',
    'thumbnail_max_h_help'   => 'ความสูงสูงสุดเป็นพิกเซลที่ภาพขนาดย่ออาจแสดงในมุมมองรายการ ต่ำสุด 25, สูงสุด 500',
    'two_factor'        => 'การตรวจสอบความถูกต้องของปัจจัยสองตัว',
    'two_factor_secret'        => 'รหัสสองปัจจัย',
    'two_factor_enrollment'        => 'การลงทะเบียนสองปัจจัย',
    'two_factor_enabled_text'        => 'เปิดใช้งาน Two Factor',
    'two_factor_reset'        => 'รีเซ็ตความลับสองระดับ',
    'two_factor_reset_help'        => 'การดำเนินการนี้จะบังคับให้ผู้ใช้ลงทะเบียนอุปกรณ์ด้วย Google Authenticator อีกครั้ง วิธีนี้มีประโยชน์หากอุปกรณ์ที่ลงทะเบียนเรียนในปัจจุบันสูญหายหรือถูกขโมย',
    'two_factor_reset_success'          => 'รีเซ็ตเครื่องอุปกรณ์สองตัวเรียบร้อยแล้ว',
    'two_factor_reset_error'          => 'การรีเซ็ตอุปกรณ์สององค์ประกอบล้มเหลว',
    'two_factor_enabled_warning'        => 'การเปิดใช้งานสองปัจจัยหากไม่ได้เปิดใช้อยู่ในขณะนี้จะบังคับให้คุณตรวจสอบสิทธิ์ด้วยอุปกรณ์ที่ลงทะเบียนของ Google Auth คุณจะสามารถลงทะเบียนอุปกรณ์ของคุณหากยังไม่ได้ลงทะเบียนเรียน',
    'two_factor_enabled_help'        => 'การทำเช่นนี้จะเปิดใช้การตรวจสอบสิทธิ์แบบสองปัจจัยโดยใช้ Google Authenticator',
    'two_factor_optional'        => 'เลือก (ผู้ใช้สามารถเปิดหรือปิดใช้งานได้ถ้าได้รับอนุญาต)',
    'two_factor_required'        => 'จำเป็นสำหรับผู้ใช้ทั้งหมด',
    'two_factor_disabled'        => 'พิการ',
    'two_factor_enter_code'	=> 'ป้อนรหัสสองปัจจัย',
    'two_factor_config_complete'	=> 'ส่งรหัส',
    'two_factor_enabled_edit_not_allowed' => 'ผู้ดูแลระบบของคุณไม่อนุญาตให้คุณแก้ไขการตั้งค่านี้',
    'two_factor_enrollment_text'	=> "จำเป็นต้องมีการตรวจสอบสิทธิ์สองปัจจัย แต่อุปกรณ์ของคุณยังไม่ได้ลงทะเบียน เปิดแอป Google Authenticator และสแกนโค้ด QR ด้านล่างเพื่อลงทะเบียนอุปกรณ์ของคุณ เมื่อคุณลงทะเบียนอุปกรณ์แล้วให้ป้อนรหัสด้านล่าง",
    'require_accept_signature'      => 'ต้องการลายเซ็น',
    'require_accept_signature_help_text'      => 'การเปิดใช้งานคุณลักษณะนี้จะกำหนดให้ผู้ใช้ลงชื่อเข้าใช้เพื่อยอมรับเนื้อหา',
    'left'        => 'ซ้าย',
    'right'        => 'ขวา',
    'top'        => 'ด้านบน',
    'bottom'        => 'ด้านล่าง',
    'vertical'        => 'แนวตั้ง',
    'horizontal'        => 'ตามแนวนอน',
    'unique_serial'                => 'หมายเลขซีเรียลที่ไม่ซ้ำกัน',
    'unique_serial_help_text'                => 'การทำเครื่องหมายในช่องนี้จะบังคับใช้ข้อ จำกัด เฉพาะใน serials ของเนื้อหา',
    'zerofill_count'        => 'ความยาวของแท็กเนื้อหารวมทั้ง zerofill',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
    'oauth_title' => 'OAuth API Settings',
    'oauth' => 'OAuth',
    'oauth_help' => 'Oauth Endpoint Settings',
    'asset_tag_title' => 'Update Asset Tag Settings',
    'barcode_title' => 'Update Barcode Settings',
    'barcodes' => 'Barcodes',
    'barcodes_help_overview' => 'Barcode &amp; QR settings',
    'barcodes_help' => 'This will attempt to delete cached barcodes. This would typically only be used if your barcode settings have changed, or if your Snipe-IT URL has changed. Barcodes will be re-generated when accessed next.',
    'barcodes_spinner' => 'Attempting to delete files...',
    'barcode_delete_cache' => 'Delete Barcode Cache',
    'branding_title' => 'Update Branding Settings',
    'general_title' => 'Update General Settings',
    'mail_test' => 'Send Test',
    'mail_test_help' => 'This will attempt to send a test mail to :replyto.',
    'filter_by_keyword' => 'Filter by setting keyword',
    'security' => 'Security',
    'security_title' => 'Update Security Settings',
    'security_keywords' => 'password, passwords, requirements, two factor, two-factor, common passwords, remote login, logout, authentication',
    'security_help' => 'Two-factor, Password Restrictions',
    'groups_keywords' => 'permissions, permission groups, authorization',
    'groups_help' => 'Account permission groups',
    'localization' => 'Localization',
    'localization_title' => 'Update Localization Settings',
    'localization_keywords' => 'localization, currency, local, locale, time zone, timezone, international, internatinalization, language, languages, translation',
    'localization_help' => 'Language, date display',
    'notifications' => 'Notifications',
    'notifications_help' => 'Email alerts, audit settings',
    'asset_tags_help' => 'Incrementing and prefixes',
    'labels' => 'Labels',
    'labels_title' => 'Update Label Settings',
    'labels_help' => 'Label sizes &amp; settings',
    'purge' => 'Purge',
    'purge_keywords' => 'permanently delete',
    'purge_help' => 'Purge Deleted Records',
    'ldap_extension_warning' => 'It does not look like the LDAP extension is installed or enabled on this server. You can still save your settings, but you will need to enable the LDAP extension for PHP before LDAP syncing or login will work.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Employee Number',
    'create_admin_user' => 'Create a User ::',
    'create_admin_success' => 'Success! Your admin user has been added!',
    'create_admin_redirect' => 'Click here to go to your app login!',
    'setup_migrations' => 'Database Migrations ::',
    'setup_no_migrations' => 'There was nothing to migrate. Your database tables were already set up!',
    'setup_successful_migrations' => 'Your database tables have been created',
    'setup_migration_output' => 'Migration output:',
    'setup_migration_create_user' => 'Next: Create User',
    'ldap_settings_link' => 'LDAP Settings Page',
    'slack_test' => 'Test <i class="fab fa-slack"></i> Integration',
];
