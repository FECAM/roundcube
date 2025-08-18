<?php
// Sessão do usuário (em minutos)
//$config['session_lifetime'] = 60;        // ex.: 1h
ini_set('max_execution_time', 120);

// ===== Timeouts de rede =====
$config['imap_timeout'] = 60;   // segundos para operações IMAP
$config['smtp_timeout'] = 60;   // segundos para operações SMTP

// ===== Sessão (logout por inatividade) =====
$config['session_lifetime'] = 180; // minutos até expirar sessão (cookies)
$config['session_timeout']  = 10;  // minutos de inatividade antes do logout forçado

// ===== Keep-alive/AJAX =====
$config['keep_alive'] = 60;         // ping ao servidor para manter sessão/IMAP vivos
$config['min_refresh_interval'] = 5; // intervalo mínimo entre atualizações automáticas (min)

// (opcional) reduzir custo em caixas enormes
$config['check_all_folders'] = false;

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

