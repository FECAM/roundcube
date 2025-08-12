<?php
// Sessão do usuário (em minutos)
//$config['session_lifetime'] = 60;        // ex.: 1h

// IMAP/SMTP: tempo limite de conexão (em segundos)
 $config['imap_timeout'] = 300;           // 0 usa default_socket_timeout do PHP
 $config['smtp_timeout'] = 300;           // idem

 // “Keep-alive” e checagem de novos e-mails
 $config['min_refresh_interval'] = 60;    // mínimo permitido p/ usuários
 $config['refresh_interval'] = 180;       // checar estado a cada 3 min (0 desativa)

 // Se tiver plugins que buscam conteúdo externo (URL), dê um timeout global:
 $config['http_client'] = ['timeout' => 10]; // via Guzzle
 $config['enable_spellcheck'] = false;
 #$config['imap_conn_options'] =  array('verify_peer' => false, 'verify_peer_name' => false) ;
 #$config['smtp_conn_options'] =  array('verify_peer' => false, 'verify_peer_name' => false) ;
 $config['imap_conn_options'] = array(
  'ssl'         => array(
     'verify_peer'  => false,
     'verify_peer_name'  => false
   )
 );

 $config['smtp_conn_options'] = array(
  'ssl'         => array(
     'verify_peer'  => false,
     'verify_peer_name'  => false
   )
 );
 $config['max_message_size'] = 70000000;  // ~70MB para garantir 50MB de anexos
 $config['log_driver'] = 'file';
 $config['log_driver'] = 'stdout';
 $config['log_logins'] = true;  // Registra logins
 $config['language'] = 'pt_BR';
 $config['htmleditor'] = 1;
 $config['reply_mode'] = 1;
 $config['session_lifetime'] = 2880;
 $config['reconnect_imap_max_attempts'] = 3;
 #$config['password_driver'] = 'sql';
 #$config['password_confirm_current'] = true;
 #$config['password_minimum_length'] = 5;
 #$config['password_require_nonalpha'] = true;
 #$config['password_log'] = true;
 #$config['password_algorithm'] = 'dovecot';
 #$config['password_dovecotpw'] = '/usr/bin/doveadm pw';
 #$config['password_dovecotpw_method'] = 'CRAM-MD5';
 #$config['password_dovecotpw_with_method'] = true;
 #$config['password_db_dsn'] = '%ROUNDCUBEMAIL_PASSWORD_DB_DSN';
 #$config['password_query'] = 'UPDATE mailbox SET password=%P WHERE username=%u LIMIT 1'; 
 $config['debug_level'] = 3;
 $config['sql_debug'] = false;
 $config['product_name'] = 'Fecam Webmail';
 $config['folder_info_messages'] = array(
   'Folder 1' => 'Messages will be deleted after {} {}.',
   'InBox' => 'Messages will be deleted after {} days.'
 );
 $config['folder_info_messages_args'] = array(
  'Folder 1' => array(30, 'days'),
  'InBox' => 14
 );
$config['markasjunk_toolbar'] = true;
$config['managesieve_host'] = '%ROUNDCUBEMAIL_MANAGESIEVE_HOST';
#$config['managesieve_default'] = '/etc/dovecot/sieve/global';
$config['managesieve_script_name'] = 'filtro-1';
$config['managesieve_usetls'] = true;
$config['managesieve_conn_options'] = array(
  'ssl'         => array(
     'verify_peer'  => false
   )
);

