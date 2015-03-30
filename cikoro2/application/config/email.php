<?php
$config['useragent'] = 'CodeIgniter';
$config['protocol'] = 'smtp';
//$config['mailpath'] = '/usr/sbin/sendmail';
$config['smtp_host'] = 'ssl://smtp.gmail.com';
$config['smtp_user'] = 'ripas.filqadar@gmail.com';
$config['smtp_pass'] = 'inumancity';
$config['smtp_port'] = 465; 
//$config['smtp_timeout'] = 5;
$config['wordwrap'] = TRUE;
$config['wrapchars'] = 76;
$config['mailtype'] = 'html';
$config ['charset'] = 'iso-8859-1';
$config['validate'] = FALSE;
$config['priority'] = 3;
$config['crlf'] = "\r\n";
$config['newline'] = "\r\n";
$config['bcc_batch_mode'] = FALSE;
$config['bcc_batch_size'] = 200;
?>

<!-- $config = Array(
  'protocol' => 'smtp',
  'smtp_host' => 'ssl://smtp.googlemail.com',
  'smtp_port' => 465,
  'smtp_timeout'=>'30',
  'smtp_user' => 'username@gmail.com',
  'smtp_pass' => 'mypassword',
  'mailtype'  => 'html',
  'charset'   => 'iso-8859-1'


  	   'protocol' => 'smtp',
		    'smtp_host' => 'ssl://smtp.googlemail.com',
		    'smtp_port' => 465,
		    'smtp_user' => 'ripas.filqadar@gmail.com',
		    'smtp_pass' => 'inumancity',
		    'mailtype'  => 'html', 
		    'charset'   => 'iso-8859-1'
);
$th -->