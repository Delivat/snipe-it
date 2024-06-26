<?php

return [
    'ad'				        => 'Directorio activo',
    'ad_domain'				    => 'Dominio de directorio activo',
    'ad_domain_help'			=> 'Esto es a veces el mismo que tu dominio de correo electrónico, pero no siempre.',
    'ad_append_domain_label'    => 'Añadir nombre de dominio',
    'ad_append_domain'          => 'Añadir nombre de dominio al campo de nombre de usuario',
    'ad_append_domain_help'     => 'El usuario no necesita escribir "username@domain.local", sólo puede escribir "username".',
    'admin_cc_email'            => 'Email CC',
    'admin_cc_email_help'       => 'Si desea enviar una copia de los correos electrónicos de checkin/checkout que se envían a los usuarios a una cuenta de correo electrónico adicional, escríbelo aquí. De lo contrario, deje este campo en blanco.',
    'admin_settings'            => 'Configuración de Admin',
    'is_ad'				        => 'Este es un servidor de Active Directory',
    'alerts'                	=> 'Alertas',
    'alert_title'               => 'Actualizar ajustes de notificación',
    'alert_email'				=> 'Enviar alertas a',
    'alert_email_help'    => 'Direcciones de correo electrónico o listas de distribución a las que desea que se envíen alertas separadas por comas',
    'alerts_enabled'			=> 'Alertas de email habilitadas',
    'alert_interval'			=> 'Umbral de alertas de caducidad (en días)',
    'alert_inv_threshold'		=> 'Umbral de alerta de inventario',
    'allow_user_skin'           => 'Permitir Skin de usuario',
    'allow_user_skin_help_text' => 'Marcar esta casilla permitirá a un usuario reemplazar la apariencia de la interfaz de usuario con una diferente.',
    'asset_ids'					=> 'Asset IDs',
    'audit_interval'            => 'Intervalo de auditoría',
    'audit_interval_help'       => 'Si se le exige auditoría física regular de sus activos, ingrese el intervalo en meses que utilice. Si actualiza este valor, se actualizarán todas las "próximas fechas de auditoría" de los activos con una próxima fecha de auditoría.',
    'audit_warning_days'        => 'Umbral de advertencia de auditoría',
    'audit_warning_days_help'   => '¿Con cuántos días de antelación deberíamos advertirle cuando los activos deban ser auditados?',
    'auto_increment_assets'		=> 'Generar etiquetas de activos que incrementan automáticamente',
    'auto_increment_prefix'		=> 'Prefijo (opcional)',
    'auto_incrementing_help'    => 'Habilitar etiquetas de activos auto-incrementantes primero para establecer esto',
    'backups'					=> 'Copias de seguridad',
    'backups_help'              => 'Crear, descargar y restaurar copias de seguridad ',
    'backups_restoring'         => 'Restaurando desde la copia de seguridad',
    'backups_upload'            => 'Subir copia de seguridad',
    'backups_path'              => 'Las copias de seguridad en el servidor se almacenan en <code>:path</code>',
    'backups_restore_warning'   => 'Utilice el botón de restauración <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> para restaurar desde una copia de seguridad anterior. (Actualmente esto no funciona con almacenamiento de archivos S3 o Docker.<br><br>Su <strong>base de datos completa de :app_name y cualquier archivo subido será completamente reemplazado</strong> por lo que hay en el archivo de copia de seguridad.  ',
    'backups_logged_out'         => 'Todos los usuarios existentes, incluido usted, se cerrarán una vez que la restauración haya finalizado.',
    'backups_large'             => 'Las copias de seguridad muy grandes pueden agotarse en el intento de restauración y todavía pueden necesitar ser ejecutadas a través de la línea de comandos. ',
    'barcode_settings'			=> 'Ajustes de código de barras',
    'confirm_purge'			    => 'Confirmar purga',
    'confirm_purge_help'		=> 'Introduzca el texto "DELETE" en el cuadro de abajo para purgar sus registros borrados. Esta acción no se puede deshacer y borrará PERMANENTAMENTE todos los elementos y usuarios eliminados de forma soft. (Primero debes hacer una copia de seguridad, solo para estar seguro).',
    'custom_css'				=> 'Custom CSS',
    'custom_css_help'			=> 'Introduzca cualquier CSS personalizado que desee utilizar. No incluya las etiquetas &lt;style&gt;&lt;/style&gt;.',
    'custom_forgot_pass_url'	=> 'URL de restablecimiento de contraseña personalizada',
    'custom_forgot_pass_url_help'	=> 'Esto reemplaza la URL de la contraseña olvidada en la pantalla de inicio de sesión, útil para dirigir a la gente a la funcionalidad interna o alojada para restablecer la contraseña LDAP. Deshabilitará efectivamente la funcionalidad de contraseña olvidada por el usuario local.',
    'dashboard_message'			=> 'Mensaje del Tablero',
    'dashboard_message_help'	=> 'Este texto aparecerá en el panel de control para cualquiera con permiso para ver el tablero.',
    'default_currency'  		=> 'Moneda por defecto',
    'default_eula_text'			=> 'Default EULA',
    'default_language'			=> 'Idioma por defecto',
    'default_eula_help_text'	=> 'También puede asociar EULAs personalizados a categorías específicas de activos.',
    'acceptance_note'           => 'Add a note for your decision (Optional)',
    'display_asset_name'        => 'Mostrar nombre de activo',
    'display_checkout_date'     => 'Mostrar fecha de pago',
    'display_eol'               => 'Mostrar EOL en vista de tabla',
    'display_qr'                => 'Mostrar códigos cuadrados',
    'display_alt_barcode'		=> 'Mostrar código de barras 1D',
    'email_logo'                => 'Logo de Email',
    'barcode_type'				=> 'Tipo de código de barras 2D',
    'alt_barcode_type'			=> 'Tipo de código de barras 1D',
    'email_logo_size'       => 'Los logotipos cuadrados en el correo electrónico se ven mejor. ',
    'enabled'                   => 'Activado',
    'eula_settings'				=> 'Configuración EULA',
    'eula_markdown'				=> 'Este EULA permite <a href="https://help.github.com/articles/github-flavored-markdown/">GitHub con sabor a markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Los tipos de archivo aceptados son ico, png y gif. Otros formatos de imagen pueden no funcionar en todos los navegadores.',
    'favicon_size'          => 'Favicons deben ser imágenes cuadradas, 16x16 píxeles.',
    'footer_text'               => 'Texto adicional del pie de página ',
    'footer_text_help'          => 'Este texto aparecerá en el lado derecho del pie de página. Se permiten enlaces usando <a href="https://help.github.com/articles/github-flavored-markdown/">Github con sabor a markdown</a>. Saltos de línea, cabeceras, imágenes, etc. pueden resultar impredecibles.',
    'general_settings'			=> 'Configuración General',
    'general_settings_keywords' => 'soporte de la empresa, firma, aceptación, formato de correo electrónico, formato de nombre de usuario, imágenes, por página, miniatura, eula, gravatar, tos, dashboard, privacidad',
    'general_settings_help'     => 'EULA por defecto y más',
    'generate_backup'			=> 'Generar copia de seguridad',
    'google_workspaces'         => 'Espacios de trabajo de Google',
    'header_color'              => 'Color de cabecera',
    'info'                      => 'Estos ajustes le permiten personalizar ciertos aspectos de su instalación.',
    'label_logo'                => 'Logo de etiqueta',
    'label_logo_size'           => 'Los logos cuadrados se ven mejor - se mostrarán en la parte superior derecha de cada etiqueta de activo. ',
    'laravel'                   => 'Versión de Laravel',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Grupo de permisos por defecto',
    'ldap_default_group_info'   => 'Seleccione un grupo para asignar a los usuarios recién sincronizados. Recuerde que un usuario asume los permisos del grupo que le han asignado.',
    'no_default_group'          => 'Ningún grupo por defecto',
    'ldap_help'                 => 'Directorio LDAP/Activo',
    'ldap_client_tls_key'       => 'Llave TLS del cliente LDAP',
    'ldap_client_tls_cert'      => 'Certificado LDAP cliente-lado TLS',
    'ldap_enabled'              => 'LDAP activado',
    'ldap_integration'          => 'Integración LDAP',
    'ldap_settings'             => 'Ajustes LDAP',
    'ldap_client_tls_cert_help' => 'El certificado TLS lateral del cliente y la clave para las conexiones LDAP normalmente sólo son útiles en las configuraciones del espacio de trabajo de Google con "Secure LDAP". Ambas son requeridas.',
    'ldap_location'             => 'Ubicación LDAP',
'ldap_location_help'             => 'The Ldap Location field should be used if <strong>an OU is not being used in the Base Bind DN.</strong> Leave this blank if an OU search is being used.',
    'ldap_login_test_help'      => 'Introduzca un nombre de usuario y contraseña LDAP válidos del DN base que especificó anteriormente para comprobar si su inicio de sesión LDAP está configurado correctamente. DEBES GUARDAR SUS SETTINGS LDAP ACTUALIZADOS.',
    'ldap_login_sync_help'      => 'Esto sólo prueba que LDAP puede sincronizar correctamente. Si su consulta de autenticación LDAP no es correcta, es posible que los usuarios todavía no puedan iniciar sesión. DEBES GUARDAR SUS SETTINGS LDAP ACTUALIZADOS.',
    'ldap_manager'              => 'Gestor LDAP',
    'ldap_server'               => 'Servidor LDAP',
    'ldap_server_help'          => 'Esto debería comenzar con ldap:// (para no cifrado o TLS) o ldaps:// (para SSL)',
    'ldap_server_cert'			=> 'Validación del certificado LDAP SSL',
    'ldap_server_cert_ignore'	=> 'Permitir certificado SSL inválido',
    'ldap_server_cert_help'		=> 'Seleccione esta casilla si está utilizando un certificado SSL autofirmado y desea aceptar un certificado SSL inválido.',
    'ldap_tls'                  => 'Usar TLS',
    'ldap_tls_help'             => 'Esto debería ser comprobado sólo si está ejecutando STARTTLS en su servidor LDAP. ',
    'ldap_uname'                => 'LDAP Bind Username',
    'ldap_dept'                 => 'Departamento LDAP',
    'ldap_phone'                => 'Número de teléfono LDAP',
    'ldap_jobtitle'             => 'Título de trabajo LDAP',
    'ldap_country'              => 'País LDAP',
    'ldap_pword'                => 'Contraseña de enlace LDAP',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'Filtro LDAP',
    'ldap_pw_sync'              => 'Sincronización de contraseña LDAP',
    'ldap_pw_sync_help'         => 'Desmarque esta casilla si no desea mantener las contraseñas LDAP sincronizadas con las contraseñas locales. Deshabilitar esto significa que los usuarios pueden no poder iniciar sesión si su servidor LDAP es inaccesible por alguna razón.',
    'ldap_username_field'       => 'Campo Usuario',
    'ldap_lname_field'          => 'Apellidos',
    'ldap_fname_field'          => 'Nombre LDAP',
    'ldap_auth_filter_query'    => 'Consulta de autenticación LDAP',
    'ldap_version'              => 'Versión LDAP',
    'ldap_active_flag'          => 'Bandera activa LDAP',
    'ldap_activated_flag_help'  => 'Este valor se utiliza para determinar si un usuario sincronizado puede iniciar sesión en Snipe-IT. <strong>No afecta a la capacidad de asignarles o retirarles items</strong>, y debería ser el <strong>nombre de atributo</strong> dentro de su AD/LDAP, <strong>no el valor</strong>. <br><br>Si este campo está configurado a un nombre de campo que no existe en su AD/LDAP, o el valor en el campo AD/LDAP se establece en <code>0</code> o <code>falso</code>, <strong>el inicio de sesión de usuario será deshabilitado</strong>. Si el valor en el campo AD/LDAP está establecido en <code>1</code> o <code>true</code> o <em>cualquier otro texto</em> significa que el usuario puede iniciar sesión. Cuando el campo está en blanco en tu AD, respetamos el atributo <code>userAccountControl</code>, que generalmente permite a los usuarios no suspendidos iniciar sesión.',
    'ldap_emp_num'              => 'Número de empleado LDAP',
    'ldap_email'                => 'LDAP Email',
    'ldap_test'                 => 'Probar LDAP',
    'ldap_test_sync'            => 'Prueba de sincronización LDAP',
    'license'                   => 'Licencia de software',
    'load_remote'               => 'Usar Gravatar',
    'load_remote_help_text'		=> 'Desmarque esta casilla si su instalación no puede cargar scripts desde el Internet externo. Esto evitará que Snipe-IT intente cargar imágenes desde Gravatar.',
    'login'                     => 'Intentos de inicio de sesión',
    'login_attempt'             => 'Intento de inicio de sesión',
    'login_ip'                  => 'Dirección IP',
    'login_success'             => '¿Éxito?',
    'login_user_agent'          => 'Agente de usuario',
    'login_help'                => 'Lista de intentos de inicio de sesión',
    'login_note'                => 'Nota de acceso',
    'login_note_help'           => 'Opcionalmente incluye algunas frases en la pantalla de inicio de sesión, por ejemplo para ayudar a las personas que han encontrado un dispositivo perdido o robado. Este campo acepta <a href="https://help.github.com/articles/github-flavored-markdown/">Github con sabor a markdown</a>',
    'login_remote_user_text'    => 'Opciones de usuario remoto',
    'login_remote_user_enabled_text' => 'Activar inicio de sesión con la cabecera de usuario remota',
    'login_remote_user_enabled_help' => 'Esta opción permite la autenticación a través del encabezado REMOTE_USER de acuerdo a la "Interfaz común de puerta de enlace (rfc3875)"',
    'login_common_disabled_text' => 'Desactivar otros mecanismos de autenticación',
    'login_common_disabled_help' => 'Esta opción desactiva otros mecanismos de autenticación. Sólo habilite esta opción si está seguro de que su inicio de sesión REMOTE_USER ya está funcionando',
    'login_remote_user_custom_logout_url_text' => 'URL de salida personalizada',
    'login_remote_user_custom_logout_url_help' => 'Si se proporciona una url aquí, los usuarios serán redireccionados a esta URL después de que el usuario se desconecte de Snipe-IT. Esto es útil para cerrar correctamente las sesiones de usuario de su proveedor de autenticación.',
    'login_remote_user_header_name_text' => 'Cabecera de nombre de usuario personalizado',
    'login_remote_user_header_name_help' => 'Usar la cabecera especificada en lugar de REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Usar en la impresión',
    'logo_print_assets_help'    => 'Usar marca en listas de activos imprimibles ',
    'full_multiple_companies_support_help_text' => 'Usuarios restringidos (incluyendo administradores) asignados a las empresas a los activos de su empresa.',
    'full_multiple_companies_support_text' => 'Soporte completo de varias empresas',
    'show_in_model_list'   => 'Mostrar en el modelo de destrucción',
    'optional'					=> 'opcional',
    'per_page'                  => 'Resultados por página',
    'php'                       => 'Versión PHP',
    'php_info'                  => 'PHP Info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, sistema, información',
    'php_overview_help'         => 'Información del sistema PHP',
    'php_gd_info'               => 'Debe instalar php-gd para mostrar los códigos QR, ver las instrucciones de instalación.',
    'php_gd_warning'            => 'PHP Image Processing y GD plugin NO está instalado.',
    'pwd_secure_complexity'     => 'Complejidad de contraseña',
    'pwd_secure_complexity_help' => 'Seleccione las reglas de complejidad de contraseña que desee aplicar.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'La contraseña no puede ser la misma que el nombre, apellido, correo electrónico o nombre de usuario',
    'pwd_secure_complexity_letters' => 'Requiere al menos una letra',
    'pwd_secure_complexity_numbers' => 'Requiere al menos un número',
    'pwd_secure_complexity_symbols' => 'Requiere al menos un símbolo',
    'pwd_secure_complexity_case_diff' => 'Requiere al menos una mayúscula y una minúscula',
    'pwd_secure_min'            => 'Caracteres mínimos de la contraseña',
    'pwd_secure_min_help'       => 'El valor mínimo permitido es 8',
    'pwd_secure_uncommon'       => 'Evitar contraseñas comunes',
    'pwd_secure_uncommon_help'  => 'Esto impedirá que los usuarios usen contraseñas comunes de los 10.000 mejores contraseñas reportadas en infracciones.',
    'qr_help'                   => 'Habilita primero los códigos QR para establecer esto',
    'qr_text'                   => 'QR Code Text',
    'saml'                      => 'SAML',
    'saml_title'                => 'Actualizar ajustes de SAML',
    'saml_help'                 => 'Configuración SAML',
    'saml_enabled'              => 'SAML activado',
    'saml_integration'          => 'Integración SAML',
    'saml_sp_entityid'          => 'ID de entidad',
    'saml_sp_acs_url'           => 'URL del Servicio al Consumidor de Aserción (ACS)',
    'saml_sp_sls_url'           => 'URL del Servicio de cierre de sesión único (SLS)',
    'saml_sp_x509cert'          => 'Certificado público',
    'saml_sp_metadata_url'      => 'URL de metadatos',
    'saml_idp_metadata'         => 'Metadatos SAML IdP',
    'saml_idp_metadata_help'    => 'Puede especificar los metadatos IdP usando un archivo URL o XML.',
    'saml_attr_mapping_username' => 'Mapeo de Atributos - Nombre de Usuario',
    'saml_attr_mapping_username_help' => 'NameID se utilizará si el mapeo de atributos no está especificado o no es válido.',
    'saml_forcelogin_label'     => 'Forzar inicio de sesión SAML',
    'saml_forcelogin'           => 'Hacer SAML el inicio de sesión principal',
    'saml_forcelogin_help'      => 'Puedes usar \'/login?nosaml\' para llegar a la página de inicio de sesión normal.',
    'saml_slo_label'            => 'Cerrar sesión única SAML',
    'saml_slo'                  => 'Enviar una solicitud de salida a IdP al cerrar sesión',
    'saml_slo_help'             => 'Esto causará que el usuario sea redirigido primero a la IdP al cerrar sesión. Dejar desmarcado si el IdP no soporta correctamente SAML SLO iniciado por SL.',
    'saml_custom_settings'      => 'Configuración personalizada SAML',
    'saml_custom_settings_help' => 'Puedes especificar ajustes adicionales a la biblioteca onelogin/php-saml. Úsalo bajo tu propio riesgo.',
    'saml_download'             => 'Descargar metadatos',
    'setting'                   => 'Ajustes',
    'settings'                  => 'Ajustes',
    'show_alerts_in_menu'       => 'Mostrar alertas en el menú superior',
    'show_archived_in_list'     => 'Recursos archivados',
    'show_archived_in_list_text'     => 'Mostrar recursos archivados en el listado de "todos los activos"',
    'show_assigned_assets'      => 'Mostrar recursos asignados a recursos',
    'show_assigned_assets_help' => 'Mostrar los recursos asignados a los otros activos en Ver Usuario -> Activos, Ver Usuario -> Información -> Imprimir Todos Asignados y en Cuenta -> Ver Recursos Asignados.',
    'show_images_in_email'     => 'Mostrar imágenes en emails',
    'show_images_in_email_help'   => 'Desmarque esta casilla si su instalación de Snipe-IT está detrás de una VPN o red cerrada y los usuarios fuera de la red no podrán cargar imágenes servidas desde esta instalación en sus correos electrónicos.',
    'site_name'                 => 'Nombre del sitio',
    'integrations'               => 'Integraciones',
    'slack'                     => 'Slack',
    'general_webhook'           => 'Webhook general',
    'ms_teams'                  => 'Equipos Microsoft',
    'webhook'                   => ':app',
    'webhook_presave'           => 'Probar para guardar',
    'webhook_title'               => 'Actualizar ajustes de Webhook',
    'webhook_help'                => 'Ajustes de integración',
    'webhook_botname'             => ':app Nombre',
    'webhook_channel'             => ':app Canal',
    'webhook_endpoint'            => ':app Endpoint',
    'webhook_integration'         => ':app Ajustes',
    'webhook_test'                 =>'Probar :app integración',
    'webhook_integration_help'    => 'La integración de :app es opcional, sin embargo el extremo y el canal son necesarios si desea usarlo. Para configurar la integración de :app, primero debes crear <a href=":webhook_link" target="_new" rel="noopener">un webhook entrante</a> en tu cuenta :app. Haga clic en el botón <strong>Test :app Integración</strong> para confirmar que su configuración es correcta antes de guardar. ',
    'webhook_integration_help_button'    => 'Una vez que hayas guardado la información de :app, aparecerá un botón de prueba.',
    'webhook_test_help'           => 'Comprueba si tu integración con :app está configurada correctamente. DEBES GUARDAR TU ACTUALIZADO :app SETTINGS FIRST.',
    'snipe_version'  			=> 'Versión de Snipe-IT',
    'support_footer'            => 'Enlaces de apoyo al pie ',
    'support_footer_help'       => 'Especifique quién ve los enlaces a la información de Soporte de Snipe-IT y Manual de Usuarios',
    'version_footer'            => 'Versión en pie ',
    'version_footer_help'       => 'Especifique quién ve la versión de Snipe-IT y el número de compilación.',
    'system'                    => 'Información del sistema',
    'update'                    => 'Actualizar ajustes',
    'value'                     => 'Precio',
    'brand'                     => 'Marca',
    'brand_keywords'            => 'pie de página, logotipo, impresión, tema, piel, cabeza, colores, color, c(debate)',
    'brand_help'                => 'Logo, nombre del sitio',
    'web_brand'                 => 'Tipo de marca web',
    'about_settings_title'      => 'Sobre ajustes',
    'about_settings_text'       => 'Estos ajustes le permiten personalizar ciertos aspectos de su instalación.',
    'labels_per_page'           => 'Etiquetas por página',
    'label_dimensions'          => 'Dimensiones de la etiqueta (pulgadas)',
    'next_auto_tag_base'        => 'Siguiente autoincremento',
    'page_padding'              => 'Margen de página (pulgadas)',
    'privacy_policy_link'       => 'Enlace a la política de privacidad',
    'privacy_policy'            => 'Política de privacidad',
    'privacy_policy_link_help'  => 'Si una url está incluida aquí, un enlace a tu política de privacidad se incluirá en el pie de página de la aplicación y en cualquier correo electrónico que el sistema envía, de conformidad con el RGPD. ',
    'purge'                     => 'Purgar registros eliminados',
    'purge_deleted'             => 'Purgar eliminados ',
    'labels_display_bgutter'    => 'Etiqueta inferior gutter',
    'labels_display_sgutter'    => 'Guiador lateral de etiqueta',
    'labels_fontsize'           => 'Label font size',
    'labels_pagewidth'          => 'Ancho de la hoja de etiqueta',
    'labels_pageheight'         => 'Altura de la hoja de etiqueta',
    'label_gutters'        => 'Espacio de etiqueta (pulgadas)',
    'page_dimensions'        => 'Dimensiones de página (pulgadas)',
    'label_fields'          => 'Campos visibles de etiqueta',
    'inches'        => 'pulgadas',
    'width_w'        => 'i',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Enlace a Snipe-IT en correos electrónicos',
    'show_url_in_emails_help_text'      => 'Desmarque esta casilla si no desea enlazar de nuevo a su instalación de Snipe-IT en sus pie de página de correo electrónico. Útil si la mayoría de tus usuarios nunca se conectan. ',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Altura máxima de la miniatura',
    'thumbnail_max_h_help'   => 'Altura máxima en píxeles que las miniaturas pueden mostrar en la vista de listado. Mínimo 25, máximo 500.',
    'two_factor'        => 'Autenticación de dos factores',
    'two_factor_secret'        => 'Código de dos factores',
    'two_factor_enrollment'        => 'Inscripción en dos factores',
    'two_factor_enabled_text'        => 'Habilitar dos factores',
    'two_factor_reset'        => 'Restablecer secreto de dos factores',
    'two_factor_reset_help'        => 'Esto obligará al usuario a volver a inscribir su dispositivo en su aplicación de autenticación. Esto puede ser útil si su dispositivo actualmente inscrito es perdido o robado. ',
    'two_factor_reset_success'          => 'Dispositivo de doble factor restablecido con éxito',
    'two_factor_reset_error'          => 'Error al restablecer el dispositivo de doble factor',
    'two_factor_enabled_warning'        => 'Habilitar doble factor si no está habilitado inmediatamente le obligará a autenticarse con un dispositivo inscrito en Google Auth. Tendrás la posibilidad de inscribir tu dispositivo si uno no está actualmente inscrito.',
    'two_factor_enabled_help'        => 'Esto activará la autenticación de dos factores usando Google Authenticator.',
    'two_factor_optional'        => 'Selectivo (los usuarios pueden activar o desactivar si está permitido)',
    'two_factor_required'        => 'Requerido para todos los usuarios',
    'two_factor_disabled'        => 'Deshabilitado',
    'two_factor_enter_code'	=> 'Introduzca código de dos factores',
    'two_factor_config_complete'	=> 'Enviar código',
    'two_factor_enabled_edit_not_allowed' => 'Su administrador no le permite editar esta configuración.',
    'two_factor_enrollment_text'	=> "Se requiere autenticación de dos factores, sin embargo su dispositivo aún no ha sido inscrito. Abre tu aplicación de Google Authenticator y escanea el código QR de abajo para inscribir tu dispositivo. Una vez que hayas inscrito, introduce el código de abajo",
    'require_accept_signature'      => 'Requiere firma',
    'require_accept_signature_help_text'      => 'Activar esta función requerirá que los usuarios se registren físicamente al aceptar un activo.',
    'left'        => 'restante',
    'right'        => 'derecha',
    'top'        => 'arriba',
    'bottom'        => 'abajo',
    'vertical'        => 'vertical',
    'horizontal'        => 'horizontal',
    'unique_serial'                => 'Números de serie únicos',
    'unique_serial_help_text'                => 'Marcando esta casilla se aplicará una restricción de singularidad en las publicaciones seriadas de activos',
    'zerofill_count'        => 'Longitud de etiquetas de activos, incluyendo zerofill',
    'username_format_help'   => 'Esta configuración sólo será utilizada por el proceso de importación si no se proporciona un nombre de usuario y tenemos que generar un nombre de usuario para usted.',
    'oauth_title' => 'Configuración de la API de OAuth',
    'oauth' => 'OAuth',
    'oauth_help' => 'Configuración de Oauth Endpoint',
    'asset_tag_title' => 'Actualizar ajustes de etiqueta de activos',
    'barcode_title' => 'Actualizar ajustes de código de barras',
    'barcodes' => 'Barcodes',
    'barcodes_help_overview' => 'Configuración de código de barras &amp; QR',
    'barcodes_help' => 'Esto intentará eliminar códigos de barras en caché. Esto normalmente sólo se usaría si la configuración del código de barras ha cambiado, o si la URL de Snipe-IT ha cambiado. Los códigos de barras se regenerarán cuando se acceda a continuación.',
    'barcodes_spinner' => 'Intentando eliminar archivos...',
    'barcode_delete_cache' => 'Borrar caché de código de barras',
    'branding_title' => 'Actualizar ajustes de marca',
    'general_title' => 'Actualizar ajustes generales',
    'mail_test' => 'Enviar prueba',
    'mail_test_help' => 'Esto intentará enviar un correo de prueba a :replyto.',
    'filter_by_keyword' => 'Filtrar por palabra clave',
    'security' => 'Seguridad',
    'security_title' => 'Actualizar ajustes de seguridad',
    'security_keywords' => 'contraseña, contraseñas, requisitos, dos factores, dos factores, contraseñas comunes, inicio de sesión remoto, autenticación',
    'security_help' => 'Restricciones de contraseña de dos factores',
    'groups_keywords' => 'permisos, grupos de permisos, autorización',
    'groups_help' => 'Grupos de permisos de cuenta',
    'localization' => 'Localización',
    'localization_title' => 'Actualizar ajustes de localización',
    'localization_keywords' => 'localización, moneda, local, locale, zona horaria, zona horaria, internacional, internatinalización, idioma, idioma, traducción',
    'localization_help' => 'Idioma, fecha',
    'notifications' => 'Notificaciones',
    'notifications_help' => 'Configuración de alertas por email y auditoría',
    'asset_tags_help' => 'Incrementando y prefijos',
    'labels' => 'Etiquetas',
    'labels_title' => 'Actualizar ajustes de etiqueta',
    'labels_help' => 'Tamaños de etiqueta &amp; ajustes',
    'purge' => 'Purge',
    'purge_keywords' => 'eliminar permanentemente',
    'purge_help' => 'Purgar registros eliminados',
    'ldap_extension_warning' => 'No parece que la extensión LDAP esté instalada o habilitada en este servidor. Todavía puede guardar su configuración, pero necesitará habilitar la extensión LDAP para PHP antes de que funcione la sincronización LDAP o el inicio de sesión.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Número de empleado',
    'create_admin_user' => 'Crear un usuario ::',
    'create_admin_success' => '¡Éxito! ¡Tu usuario admin ha sido añadido!',
    'create_admin_redirect' => '¡Haz clic aquí para acceder a tu aplicación!',
    'setup_migrations' => 'Migraciones de base de datos ::',
    'setup_no_migrations' => 'No hay nada que migrar. ¡Las tablas de la base de datos ya estaban configuradas!',
    'setup_successful_migrations' => 'Se han creado las tablas de la base de datos',
    'setup_migration_output' => 'Salida de Migración:',
    'setup_migration_create_user' => 'Siguiente: Crear usuario',
    'ldap_settings_link' => 'Página de ajustes LDAP',
    'slack_test' => 'Prueba <i class="fab fa-slack"></i> Integración',
    'label2_enable'           => 'Nuevo motor de etiqueta',
    'label2_enable_help'      => 'Cambiar al nuevo motor de etiquetas. <b>Nota: Deberá guardar esta configuración antes de configurar otros.</b>',
    'label2_template'         => 'Plantilla',
    'label2_template_help'    => 'Seleccione qué plantilla utilizar para la generación de etiquetas',
    'label2_title'            => 'Puesto',
    'label2_title_help'       => 'El título para mostrar en etiquetas que lo soportan',
    'label2_title_help_phold' => 'El marcador de posición <code>{COMPANY}</code> será reemplazado con el nombre de empresa del activo&apos;s',
    'label2_asset_logo'       => 'Usar Logo de Activos',
    'label2_asset_logo_help'  => 'Utilice el logotipo de la empresa asignada&apos;s, en lugar del valor en <code>:setting_name</code>',
    'label2_1d_type'          => 'Tipo de código de barras 1D',
    'label2_1d_type_help'     => 'Formato para códigos de barras 1D',
    'label2_2d_type'          => 'Tipo de código de barras 2D',
    'label2_2d_type_help'     => 'Formato para códigos de barras 2D',
    'label2_2d_target'        => 'Objetivo código de barras 2D',
    'label2_2d_target_help'   => 'La URL a la que apunta el código de barras 2D cuando se escanea',
    'label2_fields'           => 'Definiciones de campo',
    'label2_fields_help'      => 'Los campos pueden ser agregados, eliminados y reordenados en la columna izquierda. Para cada campo, múltiples opciones para Etiqueta y DataSource pueden ser agregadas, eliminadas y reordenadas en la columna derecha.',
    'help_asterisk_bold'    => 'Texto introducido como <code>**texto**</code> se mostrará como negrita',
    'help_blank_to_use'     => 'Deje en blanco para usar el valor de <code>:setting_name</code>',
    'help_default_will_use' => '<code>:default</code> will use the value from <code>:setting_name</code>. <br>Note that the value of the barcodes must comply with the respective barcode spec in order to be successfully generated. Please see <a href="https://snipe-it.readme.io/docs/barcodes">the documentation <i class="fa fa-external-link"></i></a> for more details. ',
    'default'               => 'Por defecto',
    'none'                  => 'Ninguna',
    'google_callback_help' => 'Esto debería introducirse como la URL de devolución de llamada en la configuración de la aplicación de Google OAuth en tu organización&apos;s <strong><a href="https://console.cloud.google.com/" target="_blank">consola de desarrollador de Google <i class="fa fa-external-link" aria-hidden="true"></i></a></strong>.',
    'google_login'      => 'Configuración de inicio de sesión de Google Workspace',
    'enable_google_login'  => 'Permitir a los usuarios iniciar sesión con Google Workspace',
    'enable_google_login_help'  => 'Los usuarios no serán provistos automáticamente. Deben tener una cuenta existente aquí AND en Google Workspace, y su nombre de usuario debe coincidir con su dirección de correo electrónico de Google Workspace. ',
    'mail_reply_to' => 'Dirección de respuesta de correo',
    'mail_from' => 'Correo desde la dirección',
    'database_driver' => 'Controlador de base de datos',
    'bs_table_storage' => 'Almacenamiento de Tabla',
    'timezone' => 'Timezone',

];
