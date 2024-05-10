<?php
#$config['identity_limit'] = false;
#$config['remote_soap_user'] = 'roundcube';
#$config['remote_soap_pass'] = 'Bous_SQgR6';
#$config['soap_url'] = 'https://painel.fecammx.com.br:8080/remote/';
#$config['soap_validate_cert'] = true;
$config['identity_limit'] = false;
$config['remote_soap_user'] = $_ENV["REMOTE_SOAP_USER"];
$config['remote_soap_pass'] = $_ENV["REMOTE_SOAP_PASS"];
$config['soap_url'] = $_ENV["SOAP_URL"];
$config['soap_validate_cert'] = true;