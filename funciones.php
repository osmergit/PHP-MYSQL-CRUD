<?php

class common {

	
		static private $link = NULL;
		static private $linki = NULL;
		private $config = NULL;

		function __construct() {

			// ini_set('include_path', ini_get('include_path').';'.BASEPATH.'application/my_classes/');
			// ini_set('register_globals','off');
			// ini_set('max_input_time','600');

			include("./config.php");
			$this->config = $config;
		}
	
		
		function check_user() {
		
			$user_id = "";
			$id = "";
			$user_id = $this->common->get_encrypted_id();
			$uid = $this->common->value('uid');
	
			if( (empty($user_id)) ) {
				$session_id = '';
				$session_id = $_SESSION['userid'];
				if(!empty($session_id)) {
					$msg = "<BR/>session exists($session_id)";
					$id = $session_id;
				}
				else if(!empty($uid)) {
					$msg = "<BR/>uid found($uid)";
		   			$id = $uid;
				}
			}
			else {
	
				$session_id = '';
				$session_id = $_SESSION['userid'];
				if(!empty($session_id)) {
				
					if( $user_id == $session_id ) {
						$msg = "<BR/>Session($session_id) & user_id($user_id) matches";
						$id = $session_id;
					}
					else {
						$msg = "<BR/>Session($session_id) exist but not matches with user_id($user_id)";
			   			$id = $user_id;
					}		
				}
				else {
					$msg = "<BR/>Session not exist, user_id($user_id)";
		   			$id = $user_id;
				}
			}
			
//			echo $msg.", User_id=".$id; exit;
			
			if(empty($id)) {
				// Redirecting into login page
				$url = "http://www.google.co.in";
				header("location:".$url);
			}
			else {
				$_SESSION['userid'] = $id;
				return true;
			}
		}
		
		
		function get_body($body, $type) {
			
			$body = $this->get_absolute_value($body);
			$newline="\n";
			$content_type = strtolower($type);
			$company_address = $this->config->config['organisation_details'];
			$unsubscribe_ar  = $this->config->config['unsubscribe_ar'];
			
			
			if($content_type == "plain") {
					$str = "";
					
					$str .= $newline. $body . $newline.$newline.$newline.$this->remove_html(html_entity_decode($company_address));
					
					return $str;
			}
			
			
			if($content_type == "html") {
				
					$str = "";
					$html_head = "";
					$html_foot = "";
					
					$html_head .= $newline.$newline.'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
					$html_head .= $newline.'<html xmlns="http://www.w3.org/1999/xhtml">';
					$html_head .= $newline.'<head>';
					$html_head .= $newline.'<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />';
					$html_head .= $newline.'<title>Test document</title>';
					$html_head .= $newline.'</head>';
					$html_head .= $newline.'<body>';
					
					$html_foot .= $newline.$newline.$newline.$company_address;
					$html_foot .= $newline.$newline.$newline.$unsubscribe_ar;
					
					$html_foot .= $newline.'</body>';
					$html_foot .= $newline.'</html>';
					
					$str .= $html_head . $body . $html_foot;
					
					return $str;
			}
		}
		
		
		function replace_personalized_text($body, $buyer_array, $user_array, $mail_type="html") {
			
			$content = $this->get_body($body, $mail_type);
			$access_code = $this->encode($buyer_array->first_name, $buyer_array->last_name);
			
			$replace = array(
							'buyer_first_name' 	=> $this->value('first_name', '', $buyer_array),
							'buyer_last_name' 	=> $this->value('last_name', '', $buyer_array),
							'buyer_email' 		=> $this->value('email', '', $buyer_array),
							'buyer_phone' 		=> $this->value('phone', '', $buyer_array),
							'my_first_name' 	=> $this->value('first_name','',$user_array),
							'my_last_name' 		=> $this->value('last_name','',$user_array),
							'my_email' 			=> $this->value('email','',$user_array),
							'my_phone' 			=> $this->value('phone','',$user_array),
							'subscribe_ar'		=> BASEURL.'guest/subscribe/'.$buyer_array->id.'/'.$access_code,
						);
			
			while( is_array($replace) && list($key,$value) = each($replace) ) {

						$patterns[] = '/<< ' . $key . ' >>/';
						$patterns[] = '/<< ' . $key . ' >>/';
						
						
						foreach ($patterns as $pattern) {
							$content = preg_replace($pattern, $value, $content);
						}
			}
			
			return $content;
		}
		
		
		function remove_html($str) {
			$patterns = "/<\/?[^>]*>/";
			$content = preg_replace($patterns, "", $str);
			return htmlspecialchars($content);
		}
		
		
		function connect_smtp() {
				try {
	
				require_once "./libraries/swift/Swift.php";
				require_once "./libraries/swift/Swift/Connection/SMTP.php";
				require_once "./libraries/swift/Swift/Authenticator/LOGIN.php";				
	
				$smtp =& new Swift_Connection_SMTP($this->config['smtp_host']);
				
				//Continue like normal
				$smtp->setUsername($this->config['smtp_user']);
				$smtp->setPassword($this->config['smtp_pass']);
				
				$swift =& new Swift($smtp);
				return $swift;
				 
				}
				catch (Swift_ConnectionException $e) {
	  				echo "There was a problem communicating with SMTP: " . $e->getMessage();
	  				exit;
				}	
		}		
		
		
		/**
		 * Enter description here...
		 * 
		 * ex - $result = $this->common->send_mail(array('Manoj Verma' => 'manoj.verma@hytechpro.com', 'Manu' => 'manabendra.sarkar@hytechpro.com'), array('Manojkumar' => 'manoj.verma@hytechpro.com'), 'test', 'testing purpose mail');
		 *
		 * @param array $to
		 * @param array $from
		 * @param string $sub
		 * @param text $body
		 * @param string $mail_type
		 * @param object $swift
		 * @return mixed
		 */
		function send_mail($to=array(), $from=array(), $sub, $body, $mail_type='html', $swift=false, $undisclosed=true, $attachment=array('browse_field_name' => 'attachment')) {
		
			$return = false;
			
			if(!$swift) {
				$swift = $this->connect_smtp();
			}
			
			
			$content_type = "text/html";
			if(strtolower($mail_type) == "plain") {
				$content_type = "text/plain";
			}
			
			try {
					
				//Create the message
				$message =& new Swift_Message($sub, $body, $content_type);
				
				// preparing from address
				if($this->check_array($from)) {
					foreach ($from as $from_name => $from_email) {
						
						if(is_string($from_name)) {
							$from_address = new Swift_Address($from_email, $from_name);
						}
						else {
							$from_address = new Swift_Address($from_email);
						}
					}
				}
				else {
					$this->log_msg('Common::send_mail() --> Please mention from email address.');
					return false;
				}
				
				// Preparing to addressess
				$recipients =& new Swift_RecipientList();
				if($this->check_array($to)) {
					
					if(count($to) > 1) {
						if($undisclosed == true) {
							$message->setTo("undisclosed-recipients:;");
						}
					}
					else {
						$to_email = array_values($to);
						// setting header
						$message->headers->set("To", array($to_email[0]));
					}
					
					foreach ($to as $to_name => $to_email) {
						if(is_string($to_name)) {
							$recipients->addTo($to_email, $to_name);
						}
						else {
							$recipients->addTo($to_email);
						}
					}
				}
				else {
					$this->log_msg('Common::send_mail() --> Please mention to email address.');
					return false;
				}

				
				// Attachment
				if($this->check_array($_FILES)) {
					$attachment_fieldname = $attachment['browse_field_name'];
				    $attachment_name = $_FILES[$attachment_fieldname]['name'];
				    if(!empty($attachment_name)) {
				    	
						    $arr = explode(".", $attachment_name);
						    $extentsion = $arr['1'];
						  	$attachment_type = "application/".$extentsion;
						   	$attachment_path = $_FILES[$attachment_fieldname]['tmp_name'];
	
							$swift_file = new Swift_File($attachment_path);
							$part =& new Swift_Message_Part($body, $content_type);
							$message->attach(new Swift_Message_Attachment($swift_file, $attachment_name, $attachment_type));
							$message->attach($part);
				    }
				}

				
				if ($number_sent = $swift->send($message, $recipients, $from_address)) {
					$msg = "Mail has been sent to ($number_sent) users.";
					$return = $number_sent;
				}
				else {
					$msg = "Unexpected error occured when sending mail.";
					$return = false;
				}
				
			}
			catch (Swift_Message_MimeException $e) {
	  			$msg = "There was an unexpected problem building the email:" . $e->getMessage();
	  			$return = false;
			}
			
			$this->log_msg($msg);
		
			return $return;
		}
		
		
		function check_email($address){

			// check an email address is possibly valid
			  if(ereg("^[^@ ]+@[^@ ]+\.[^@ ]+$",$address,$trashed))
			    return true;
			  else 
			    return false;
		}


		function find_client_ip()
		{

			global $_SERVER;

			// No IP found (will be overwritten by for
			// if any IP is found behind a firewall)
			$ip = FALSE;

//			$this->print_rr($_SERVER);

			// If HTTP_CLIENT_IP is set, then give it priority
			if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
				$ip = $_SERVER["HTTP_CLIENT_IP"];
			}
		   
			// User is behind a proxy and check that we discard RFC1918 IP addresses
			// if they are behind a proxy then only figure out which IP belongs to the
			// user.  Might not need any more hackin if there is a squid reverse proxy
			// infront of apache.
			if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

				// Put the IP's into an array which we shall work with shortly.
				$ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
				if ($ip) { array_unshift($ips, $ip); $ip = FALSE; }

				for ($i = 0; $i < count($ips); $i++) {
					// Skip RFC 1918 IP's 10.0.0.0/8, 172.16.0.0/12 and
					// 192.168.0.0/16
					if (!preg_match('/^(?:10|172\.(?:1[6-9]|2\d|3[01])|192\.168)\./', $ips[$i])) {
						if (version_compare(phpversion(), "5.0.0", ">=")) {
							if (ip2long($ips[$i]) != false) {
								$ip = $ips[$i];
								break;
							}
						} else {
							if (ip2long($ips[$i]) != -1) {
								$ip = $ips[$i];
								break;
							}
						}
					}
				}
			}
			// Return with the found IP or the remote address
			return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
		}

		
		#######################
		## MYSQL_I api Start
		#######################

		function connect_mysqli() {
			
			$link = mysqli_connect($this->config["db_host"], $this->config["db_user"], $this->config["db_pass"], $this->config["db_name"]);
			if (!$link) {
			   die ('i Mysqli connection failed: ' . mysqli_connect_error());
			}
			else {
				$this->linki = $link;
			}
		}

	
		function execute_queryi($query='') {
			
			if (empty($query)) {
				
				$this->log_msg("Common::execute_queryi() --> Query can not be empty.", "#888888");
				return '';
			}
			else {
				if( self::$linki == NULL ) {
					$this->connect_mysqli();
				}				
			}
			
			// execute query
			$mtime = explode(" ", microtime());
			$start = doubleval($mtime[1]) + doubleval($mtime[0]); 
			
			$result = @mysqli_query($this->linki, $query);
			
			$mtime = explode(" ", microtime());
			$end   = doubleval($mtime[1]) + doubleval($mtime[0]);
			$time_elapsed = number_format(abs($start - $end), 5, '.', '');
			
			// if error occured
			if (!$result) {
				$error = @mysqli_error($this->linki);
				$this->log_msg("Common::execute_queryi() --> Error in query: [ $query ] ($time_elapsed), Mysqli error: ".$error);
			}
			else {
				if(is_object($result)) {
					$num_rows = @mysqli_num_rows($result);
					$this->log_msg("Common::execute_queryi() --> Num Rows: $num_rows, [ $query ] ($time_elapsed)", "#8686D9");
				}
				else {
					$affected_rows = @mysqli_affected_rows($this->linki);
					$this->log_msg("Common::execute_queryi() --> Affacted Rows: $affected_rows, [ $query ] ($time_elapsed)", "#8686D9");
				}
			}
			
			return $result;	
		}
		
		
		function get_primarykeyi($table) {
			
		    $sql = "SELECT * FROM `".$table."`;";
		    // execute query
		    $result = $this->execute_queryi($sql);
		  
		    if($result) {
		  		$fields = @mysqli_fetch_fields($result);
//	  			$this->print_rr($fields);
		  		foreach ($fields as $field) {
		  			if($field->type == 253) {
		  				$pk = $field->orgname;
		  				return $pk;
		  			}
		  		}
			}
			return false;
		}
		
		#######################
		## MYSQL_I api Ends
		#######################
		
		
		/**
		 * Returns a string representation of the date, of differing format
		 * depending on how recent the date is.
		 *
		 * @param  int    		$_date Unix timestamp of the date.
		 * @return string		String representation of the date.
		 */
		function nice_date( $_date ) {
			$date_ymd = date( "Ymd", $_date );
			$now = time();
			
			if ( $date_ymd == date( "Ymd", $now + 86400 ) ) { // tomorrow
				return "Tomorrow";
			} elseif ( $date_ymd == date( "Ymd", $now ) ) { // today
				return "Today";
			} elseif ( $date_ymd == date( "Ymd", $now - 86400 ) ) { // yesterday
				return "Yesterday";
			} elseif ( ( $now < $_date ) && ( abs( $now - $_date ) < 518400 ) ) { // next week
				return "Next ".date( "l", $_date );
			} elseif ( ( $now > $_date ) && ( abs( $now - $_date ) < 518400 ) ) { // previous week
				return "Last ".date( "l", $_date );
			} elseif ( date( "Y", $now ) == date( "Y", $_date ) ) { // this year
				return date( "j M", $_date );
			} else {
				return date( "j M Y", $_date );
			}
		}
		
		/**
		 * Returns a string representation of the date and time, of differing format
		 * depending on how recent the date is.
		 *
		 * @param  int    $_datetime Unix timestamp of the date.
		 * @return string            String representation of the date and time.
		 */
		function nice_datetime( $_datetime ) {
			$datetime_ymd = date( "Ymd", $_datetime );
			return $this->nice_date( $_datetime ).", ".date( "g:ia", $_datetime );
		}
		
		
		/**
		 * This function returns difference between two days.
		 *
		 * @param timestamp $start
		 * @param timestamp $end
		 * @return integer
		 */
		function daysInSpan($start,$end='')
		{
			if(empty($end)) {
				$today=getdate();
//    			$yesterday=mktime(0,0,0,$today[mon],$today[mday]-1,$today[year]);
    			$today=mktime(0,0,0,$today['mon'],$today['mday'],$today['year']);
    			
    			$end = $today;
			}
		    return (($end-$start)/86400);
		}
		
		
#################################################################################################		
#################################################################################################
#################################################################################################
#################################################################################################
#################################################################################################
		
		
		function get_primarykey($table) {
			
		    $sql = "SELECT * FROM `".$table."`;";
		    // execute query
		    $result = $this->execute_query($sql);
		  	
		    if($result)
		    for($i = 0; $i < @mysql_num_fields($result); $i++) {
		      if(eregi(".*primary_key.*", @mysql_field_flags($result, $i))){
		        $pk=@mysql_field_name($result, $i);
						@mysql_free_result($result);
						return $pk;
					}
		    }
		    
		    return false;
		}
		
		
		function connect_mysql() {
			
			$link = mysql_connect($this->config["db_host"], $this->config["db_user"], $this->config["db_pass"]);
			if (!$link) {
			   die ('Mysql connection failed: ' . mysql_error());
			}
			$db_selected = mysql_select_db($this->config["db_name"], $link);
			if (!$db_selected) {
			   die ('Can not able to open database : ' . mysql_error());
			}
			else {
				$this->link = $link;
			}
		}

	
		function execute_query($query='') {
			
			if (empty($query)) {
				
				$this->log_msg("Common::execute_query() --> Query can not be empty.", "#888888");
				return '';
			}
			else {
				if( self::$link == NULL ) {
					$this->connect_mysql();
				}				
			}
			
			// execute query
			$mtime = explode(" ", microtime());
			$start = doubleval($mtime[1]) + doubleval($mtime[0]); 
			
			$result = @mysql_query($query);
			
			$mtime = explode(" ", microtime());
			$end   = doubleval($mtime[1]) + doubleval($mtime[0]);
			$time_elapsed = number_format(abs($start - $end), 5, '.', '');
			
			// if error occured
			if (!$result) {
				$error = @mysql_error();
				$this->log_msg("Common::execute_query() --> Error in query: [ $query ] ($time_elapsed), Mysql error: ".$error);
			}
			else {
				if(is_resource($result)) {
					$num_rows = @mysql_num_rows($result);
					$this->log_msg("Common::execute_query() --> Num Rows: $num_rows, [ $query ] ($time_elapsed)", "#8686D9");
				}
				else {
					$affected_rows = @mysql_affected_rows();
					$this->log_msg("Common::execute_query() --> Affacted Rows: $affected_rows, [ $query ] ($time_elapsed)", "#8686D9");
				}
			}
			
			return $result;	
		}
		
		
		function fetch_result($result, $fetch_type="") {
			
			$returnValue = array();
			if(is_resource($result)) {
				if(@mysql_num_rows($result) > 0 ) {
						switch($fetch_type)
						{
							case '0':
								$array = array();
								while($row = @mysql_fetch_row($result)) {
									$array[] = $row;
								}
							break;
							case '1':
								// returns associative array
								$array = array();
								while($row = @mysql_fetch_assoc($result)) {
									$array[] = $row;
								}
							break;							
							case '2':
								// returns object type
								$array = array();
								while($row = @mysql_fetch_object($result)) {
									$array[] = $row;
								}
							break;
							case '3':
								$array = @mysql_fetch_row($result);
							break;							
							case '4':
								$array = @mysql_fetch_assoc($result);
							break;
							case '5':
								$array = @mysql_fetch_object($result);
							break;							
							default:
								$array = @mysql_fetch_assoc($result);
							break;
						}
					// gets momory free
					@mysql_free_result($result);
					if($this->check_array($array)) {
						$returnValue = $array;
						return $returnValue;
					}
					else {
						return false;
					}
				}
				else {
					return false;
				}
			}
			else {
				return false;
			}
		}
		
		
		function get_row($table, $id="", $fields="") {
			
			if(empty($fields)) $fields="*";
			
			if (!empty($id)) {
				$pk = $this->get_primarykey($table);
				if(!$pk) return false;
				$sql = "SELECT $fields FROM $table WHERE $pk='$id'";
			}
			else {
				$sql = "SELECT $fields FROM $table LIMIT 0 , 1";
			}
			
			$rs = $this->execute_query($sql);
			$row = $this->fetch_result($rs);

		   	if($fields != '*') {
		   		return $row[$fields];
		   	}
	
	   	   	return $row;
		}
		
		
		function get_rows($table, $condition="", $fields="", $fetch_type='1') {
			
			if(empty($fields)) $fields="*";
			
			if (!empty($condition)) {
				$sql = "SELECT $fields FROM $table WHERE $condition";
			}
			else {
				$sql = "SELECT $fields FROM $table";
			}
			
			$rs = $this->execute_query($sql);
			$rows = $this->fetch_result($rs, $fetch_type);
			
			return $rows;
		}
		
		
		function get_result($sql="", $fetch_type="1") {
			
			$rs = $this->execute_query($sql);
			$rows = $this->fetch_result($rs, $fetch_type);
				
			return $rows;			
		}
		
		
		function select($table='', $arr=array(), $where='') {
			
			if(empty($table)) {
				return false;
			}
			
			$result = self::execute_query("SELECT * FROM $table LIMIT 0,1");
			$columns = @mysql_num_fields($result);
			// getting list of columns of the specified table.
			for ($i = 0; $i < $columns; $i++) {
			  $fieldarr[] = @mysql_field_name($result, $i);
			}		

			$fields = '';
			$i=1;
			if($this->check_array($arr)) {
				
					foreach ($arr as $key => $field_name) {
						
					  $total = count($arr);
					  
					  // Appending ',' after field name
					  if (in_array ($field_name, $fieldarr)) {
					  	$fields .= $field_name;
					  	if($i != $total) {
							$fields .= ",";
					  	}
					  }
					  $i++;
					}
			}
			else {
				$fields = '*';
			}
			
			$sql = "SELECT $fields FROM $table";
			
			if(!empty($where))
			$sql .= " where ".$where;
             
			// executing query.
			$result = self::get_result($sql);
			return $result;				
					
		}
		
		
		function insert($table, $arr) {
				
			$result = self::execute_query("SELECT * FROM $table LIMIT 0,1");
			$columns = @mysql_num_fields($result);
			// getting list of columns of the specified table.
			for ($i = 0; $i < $columns; $i++) {
			  $fieldarr[] = @mysql_field_name($result, $i);
			}
			
			// building insert statement.
			$sqla = "INSERT INTO $table ( ";
			$sqlb = ") VALUES ( ";
			foreach ($arr as $name => $value) {
			  if (in_array ($name, $fieldarr)) {
				$sqla .= "$name,";
				if (is_array($value)) {
				  $sqlb .= "'|";
				  $j = count($value);
				  for ($i = 0; $i < $j-1; $i++) {
					$sqlb .= addslashes($value[$i]) . "|,|";
				  }
				  $k = $j-1;
				  $sqlb .= addslashes($value[$k]) . "|',";
				} else {
				  	if( $value == null ){
			      		$sqlb .= 'null'.",";
			      	}
			      	else
			        	$sqlb .= "'" . addslashes($value) . "',";
				}
			  }
			}
			$sqlb .= ")";
			$sql = $sqla . $sqlb;
			$sql = str_replace(",)", ")", $sql);
             
			// executing query.
			$result = self::execute_query($sql);
			return $result;
		}
		
		
		function update($table, $arr, $where) {
			
			  $result = $this->execute_query("SELECT * FROM $table LIMIT 0,1");
			  $columns = @mysql_num_fields($result);
			  // getting list of columns of the specified table.
			  for ($i = 0; $i < $columns; $i++) {
			    $fieldarr[] = @mysql_field_name($result, $i);
			  }
			  // building update statement.
			  $sql = "UPDATE $table SET ";
			  foreach ($arr as $name => $value) {
					if (in_array ($name, $fieldarr)) {
			      $sql .= "$name = ";
			      
			      if (is_array($value)) {
			        $sql .= "'|";
			        $j = count($value);
			        for ($i = 0; $i < $j-1; $i++) {
			          $sql .= addslashes($value[$i]) . "|,|";
			        }
			        $k = $j-1;
			        $sql .= addslashes($value[$k]) . "|',";
			      } else {
			      	if( $value == null ){
			      		$sql .= 'null'.",";
			      	}
			      	else
			        	$sql .= "'" . addslashes($value) . "',";
			      }
			    }
			  }
			  $sql .= ";";
			  $sql = str_replace(",;", " ", $sql);

		  	$sql .= " where ".$where;

		  	$result = self::execute_query($sql);
		  
			return $result;
		}

			
		function value($key='', $default='', $arr=array()) {

			if(gettype($arr) == 'object') {
				$arr = get_object_vars($arr);
			}

			if(! $this->check_array($arr) ) {
				global $_REQUEST;
				$arr = $_REQUEST;
			}
			
			if(!$this->check_empty($key)) {
				
					if( (!isset($arr[$key])) || (trim($arr[$key] == '')) ) {
						return $this->get_absolute_value($default, "Common::value() --> Element ($key) not found in array and default value not exist.");
					}else{
						return $this->get_absolute_value($arr[$key]);
					}
			}
			else {
					return $this->get_absolute_value($default, "Common::value() --> Key is missing.");
			}
		}
		
		
		function get_absolute_value($val='', $msg='') {
			
			if($this->check_empty($val)) {
				if(empty($msg)) {
					$this->log_msg('Common::get_absolute_value() --> Value is Empty.');
				}
				else {
					$this->log_msg($msg);
				}
				
				return null;
			}
			else {
				if(is_string($val) ) {
					return htmlspecialchars_decode(stripslashes(trim($val)), ENT_QUOTES);
				}
				else {
					return $val;
				}
			}
		}


		function check_empty($value='') {
		
			  if(empty($value)) {
				  if( ($value === 0) || ($value === '0') ) {
					  return false;
				  }
				  else {
					  return true;
				  }
			  }
			  else {
				  return false;
			  }
		}
		
		
		function check_array($arr = array()) {
			
			if( (is_array($arr)) || (is_object($arr)) ){
				
				if(count($arr) > 0) {
					
					foreach ($arr as $val) {
		  				if(!$this->check_empty($val)) return true;
		  			}
				}
			}
			
			return false;
		}
		
		
#################################################################################################		
#################################################################################################
#################################################################################################
#################################################################################################
#################################################################################################
		

		function getxml($array=array(), $fields = array()) {

			$sql = "select eid,ename from emp";
			$result = $this->execute_query($sql);
			if(is_resource($result)){
				$numRows = mysql_num_rows($result);
				if($numRows >= '1'){
					$xml  =	"<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>\n";
					$xml .=	"<MyXML>\n";
					while($arr=mysql_fetch_assoc($result)) {
						$xml.= " <ROW>\n";
						foreach ($arr as $key => $value) {
							if($key == 'thumbImagePath') {
								$xml.= "  <titleThumbPath>Title_Thumb/{$value}</titleThumbPath>\n";	
							}
						}
						 $xml.= " </ROW>\n";
					}
					
					$xml.= "</MyXML>\n";
					
				} else {
					$xml = '<reply ok="false" reason="No data in table" />';
				}
			} else {
				$xml = '<reply ok="false" reason="Database connection not established" />';
			}

			header('Content-Type: text/xml');
			echo $xml;
		}



		/**
		 * xml2array() will convert the given XML text to an array in the XML structure.
		 * Link: http://www.bin-co.com/php/scripts/xml2array/
		 * Arguments : $contents - The XML text
		 *                $get_attributes - 1 or 0. If this is 1 the function will get the attributes as well as the tag values - this results in a different array structure in the return value.
		 *                $priority - Can be 'tag' or 'attribute'. This will change the way the resulting array sturcture. For 'tag', the tags are given more importance.
		 * Return: The parsed XML in an array form. Use print_r() to see the resulting array structure.
		 * Examples: $array =  xml2array(file_get_contents('feed.xml'));
		 *              $array =  xml2array(file_get_contents('feed.xml', 1, 'attribute'));
		 */
		function xml2array($contents, $get_attributes=1, $priority = 'tag') {
			if(!$contents) return array();

			if(!function_exists('xml_parser_create')) {
				//print "'xml_parser_create()' function not found!";
				return array();
			}

			//Get the XML parser of PHP - PHP must have this module for the parser to work
			$parser = xml_parser_create('');
			xml_parser_set_option($parser, XML_OPTION_TARGET_ENCODING, "UTF-8"); # http://minutillo.com/steve/weblog/2004/6/17/php-xml-and-character-encodings-a-tale-of-sadness-rage-and-data-loss
			xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
			xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
			xml_parse_into_struct($parser, trim($contents), $xml_values);
			xml_parser_free($parser);

			if(!$xml_values) return;//Hmm...

			//Initializations
			$xml_array = array();
			$parents = array();
			$opened_tags = array();
			$arr = array();

			$current = &$xml_array; //Refference

			//Go through the tags.
			$repeated_tag_index = array();//Multiple tags with same name will be turned into an array
			foreach($xml_values as $data) {
				unset($attributes,$value);//Remove existing values, or there will be trouble

				//This command will extract these variables into the foreach scope
				// tag(string), type(string), level(int), attributes(array).
				extract($data);//We could use the array by itself, but this cooler.

				$result = array();
				$attributes_data = array();
				
				if(isset($value)) {
					if($priority == 'tag') $result = $value;
					else $result['value'] = $value; //Put the value in a assoc array if we are in the 'Attribute' mode
				}

				//Set the attributes too.
				if(isset($attributes) and $get_attributes) {
					foreach($attributes as $attr => $val) {
						if($priority == 'tag') $attributes_data[$attr] = $val;
						else $result['attr'][$attr] = $val; //Set all the attributes in a array called 'attr'
					}
				}

				//See tag status and do the needed.
				if($type == "open") {//The starting of the tag '<tag>'
					$parent[$level-1] = &$current;
					if(!is_array($current) or (!in_array($tag, array_keys($current)))) { //Insert New tag
						$current[$tag] = $result;
						if($attributes_data) $current[$tag. '_attr'] = $attributes_data;
						$repeated_tag_index[$tag.'_'.$level] = 1;

						$current = &$current[$tag];

					} else { //There was another element with the same tag name

						if(isset($current[$tag][0])) {//If there is a 0th element it is already an array
							$current[$tag][$repeated_tag_index[$tag.'_'.$level]] = $result;
							$repeated_tag_index[$tag.'_'.$level]++;
						} else {//This section will make the value an array if multiple tags with the same name appear together
							$current[$tag] = array($current[$tag],$result);//This will combine the existing item and the new item together to make an array
							$repeated_tag_index[$tag.'_'.$level] = 2;
							
							if(isset($current[$tag.'_attr'])) { //The attribute of the last(0th) tag must be moved as well
								$current[$tag]['0_attr'] = $current[$tag.'_attr'];
								unset($current[$tag.'_attr']);
							}

						}
						$last_item_index = $repeated_tag_index[$tag.'_'.$level]-1;
						$current = &$current[$tag][$last_item_index];
					}

				} elseif($type == "complete") { //Tags that ends in 1 line '<tag />'
					//See if the key is already taken.
					if(!isset($current[$tag])) { //New Key
						$current[$tag] = $result;
						$repeated_tag_index[$tag.'_'.$level] = 1;
						if($priority == 'tag' and $attributes_data) $current[$tag. '_attr'] = $attributes_data;

					} else { //If taken, put all things inside a list(array)
						if(isset($current[$tag][0]) and is_array($current[$tag])) {//If it is already an array...

							// ...push the new element into that array.
							$current[$tag][$repeated_tag_index[$tag.'_'.$level]] = $result;
							
							if($priority == 'tag' and $get_attributes and $attributes_data) {
								$current[$tag][$repeated_tag_index[$tag.'_'.$level] . '_attr'] = $attributes_data;
							}
							$repeated_tag_index[$tag.'_'.$level]++;

						} else { //If it is not an array...
							$current[$tag] = array($current[$tag],$result); //...Make it an array using using the existing value and the new value
							$repeated_tag_index[$tag.'_'.$level] = 1;
							if($priority == 'tag' and $get_attributes) {
								if(isset($current[$tag.'_attr'])) { //The attribute of the last(0th) tag must be moved as well
									
									$current[$tag]['0_attr'] = $current[$tag.'_attr'];
									unset($current[$tag.'_attr']);
								}
								
								if($attributes_data) {
									$current[$tag][$repeated_tag_index[$tag.'_'.$level] . '_attr'] = $attributes_data;
								}
							}
							$repeated_tag_index[$tag.'_'.$level]++; //0 and 1 index is already taken
						}
					}

				} elseif($type == 'close') { //End of tag '</tag>'
					$current = &$parent[$level-1];
				}
			}
			
			return($xml_array);
		}


		/**
		 * This function helps to populate the form fields as well as Table fields.
		 *
		 * @param array $arrToAssign
		 * @param array $arrFromAssign
		 * @param integer $modeOfAssigning
		 * @param array $replaceArray
		 * @return array
		 * @access public
		 */
		function assignValueToFormElements($arrToAssign, $arrFromAssign='', $modeOfAssigning='', $replaceArray='') {
			
			global $_POST;
			
			$is_return = 0;
			// checking for replace array passed as parameter or not
			if(is_array($replaceArray) && (count($replaceArray) > 0))
			{
				// if replace array passed as parameter no need to return anything.
				$replace = &$replaceArray;
			}else{
				// if replace array not passed as parameter return array $arr;
				$is_return = 1;
				$arr = array();
				$replace = &$arr;
			}
			$formArray = $arrToAssign;
			if(empty($arrFromAssign)){
				// if $arrFromAssign not passed peak the value from post array.
				$arrFromAssign = $_POST; 
			}
			switch ($modeOfAssigning){
				
				case '0':
					// 0 for populating database fields with respect to database fields.
					// used when needs to populate form fields with values stored in database.
					foreach($formArray as $key => $value){
						if(!empty($value)){
							$replace[$value] = self::value($value, '', $arrFromAssign);
						}
					}				
				break;
				
				case '1':
					// 1 for populating form fields with respect to database fields
					// used when needs to populate database values in form.
					foreach($formArray as $key => $value){
						if(!empty($key)){
							$replace[$key] = self::value($value, '', $arrFromAssign);
						}
					}				
				break;
				
				case '2':
					// 2 for populating database fields with respect to form fields
					// used when needs to insert form data into database table.
					foreach($formArray as $key => $value){
						if(!empty($value)){
							$replace[$value] = self::value($key, '', $arrFromAssign);
						}
					}				
				break;
				
				default:
					// populating form fields with respect to form fields, ($arr[key] = $arr[$key])
					// used when server error occured to preserve the form value
					foreach($formArray as $key => $value){
						if(!empty($key)){
							$replace[$key] = self::value($key, '', $arrFromAssign);
						}
					}
				break;
			} // Switch Ends
			
			if($is_return == '1'){
				return $replace;
			}
		}
		// Function assignValueToFormElements Ends
		
		
		/**
		 * Select or remove array elements from an array.
		 * Source array could be either one dimensional or muti dimensional.
		 *
		 * @param array $existingArray like array('first_name'=>'Manoj', 'last_name'=>'Verma', 'username'=>'abc', 'password'=>'abcpwd')
		 * @param array $removingElementArray like array('first_name', 'password')
		 * @param strinf ($action != 2) if u want to remove the element from existing array and ($mode==2) if u want to select those elements from the existing array.
		 * @return array
		 * @access public
		 */
		function operateArrayElements($sourceArray, $targetArray, $action='select') {
			
	          $arr = array();
	          
	          if((is_array($sourceArray)) && (is_array($targetArray))) {
	               if((count($targetArray) > 0) && (count($sourceArray) > 0)){
	                         switch($action){
	                              case 'select':
	                                   foreach ($targetArray as $key) {
	                                        foreach($sourceArray as $key2 => $value2){
	                                             if($key == $key2){
	                                                  $arr[$key] = $value2;
	                                                  break;
	                                             }
	                                        }
	                                   }
	                              break;
	                              
	                              case 'remove':
	                                   foreach ($targetArray as $key) {
	                                        foreach($sourceArray as $key2 => $value2){
	                                             if($key == $key2){
	                                                  unset($sourceArray[$key]);
	                                                  break;
	                                             }
	                                        }
	                                   }                                   
	                              break;
	                              
	                              case 'modify':
	                                   foreach ($targetArray as $key => $value) {
	                                        foreach($sourceArray as $key2 => $value2){
	                                             if($key == $key2){
	                                                  $sourceArray[$key] = $value;
	                                                  break;
	                                             }
	                                        }
	                                   }                                   
	                              break;
	                              
	                              /**
	                               * searching for value in $targetArray
	                               * if value not found return false
	                               * if value found, check value
	                               *           if value is empty
	                               *                return false;
	                               *           if value is not empty
	                               *                return true;
	                               * if value not found
	                               *           return false;
	                               */
	                              case 'checkempty':
	                                   foreach ($targetArray as $key) {
	                                        foreach($sourceArray as $key2 => $value2){
	                                             if($key == $key2){
	                                                  if(empty($value2)){
	                                                       // if value found empty
	                                                       return '0';
	                                                  }
	                                             }
	                                        }
	                                   }
	                              break;                              
	                              
	                              // Default operation is 'select'
	                              default:
	                                   foreach ($targetArray as $key) {
	                                        foreach($sourceArray as $key2 => $value2){
	                                             if($key == $key2){
	                                                  $arr[$key] = $value2;
	                                                  break;
	                                             }
	                                        }
	                                   }                         
	                              break;
	                         }
	                         
	                         switch($action){
	                              case 'select':
	                                   return $arr;
	                              break;
	                              
	                              case 'remove':
	                                   return $sourceArray;
	                              break;
	                              
	                              case 'modify':
	                                   return $sourceArray;
	                              break;
	                              
	                              case 'checkempty':
	                              		return '1';
	                              break;
	                              
	                              // Default operation is 'select'
	                              default:
	                                   return $arr;
	                              break;
	                         }
	               }else{
	                    // if $targetArray is empty.
	                    return '0';
	               }
	          }else{
	               // if $sourceArray is empty.
	               return '0';
	          }
	     }
	
	     
		/**  Function to find a single value or list of values(Array) from source array
	   	 *	 e.g., Capture the value and occurance of 'stage' field comes in source array
		 *	 @Param $sourceArray -- array() -- Single or Multidimensional array
		 *	 @Param $toFindValue -- Single value or an array(one dimensional)
		 *	 @Param $parentLevel -- Tells that the value which i have to search, found in which Level of Source Array
		 *	 @Param $parentLevel -- no need to pass as parameter when call this function
		 *	 @Param $parentLevel -- no need to pass as parameter when call this function
		 *	 Rest of two parameter need not to pass in function calling
		 *	 ### THIS FUNCTION IS COPY OF getValueFromArray() IN nsLIB FILE.
	   	 */	
		function getValueFromArray($sourceArray, $toFindValue='', $parentLevel='', $arr=array(), $level=0) {
			$returnValue = '';
			$levelFound = true;
			
			if((!empty($toFindValue)) && ($toFindValue != '')){
					foreach($sourceArray as $key => $value) {
	
						// If value == array() 
		        		if (is_array($value) && (count($value)>0)) {
		        				$level++;
		        				$this->getValueFromArray($value, $toFindValue, $parentLevel, &$arr, $level);
		        				$level--;
		        		}else{
		        			
		        			//  Set value $levelFound either true or false after checking it is passed as parameter or not
		        			
		    				if((!empty($parentLevel)) && ($parentLevel != '')){
								if($parentLevel == $level){
									$levelFound = true;
								}else{
									$levelFound = false;
								}
							}
							
							//  If parentLevel is passing as parameter and found then block runs or if parentLevel is not passing as parameter then also block is running
							
							if($levelFound == true){
			        			if(is_array($toFindValue)){
			    					foreach($toFindValue as $value2){ // $toFindvalue array is like array('stage', 'name', 'roll') -- 1 dimensional
			    						if($key == $value2){
			    							$arr[$key] = $value;
			    						}
			    					}
			        			}else{
			        				
			        				//  $Searching Value is not array
			        				
				        			if($key == $toFindValue){
				        				$arr[$key] = $value;
				        			}
			        			}
							}
		        		}
					}
				}
			
			if(count($arr) > 0){
				$returnValue = $arr;
			}
			return $returnValue;
		}
	     
	
		/**
		  Function to output a separator either through whitespace, or with an image
		 */
		function putSpace($height='1', $image , $type="hor", $y){
			
			if($y != '100%') {
				$y = $y.'px';
			}
			
			if(($type == 'hor') || (empty($type))) {
				return '<img src="images/'.$image.'" border="0" alt="" width="'.$y.'" height="'.$height.'px" >';
			}
			else {
				return '<img src="images/'.$image.'" border="0" alt="" height="'.$y.'" width="'.$height.'px" >';
			}
		}
		
		
		/**
		 * 	$this->putWhiteSpaces(array('14'),&$replace);
		 *	$this->putWhiteSpaces(array('5','14'), &$replace, 'pixel_silver.gif', true, 'silverSpace');
		 *	$this->putWhiteSpaces(array('5','14', '30', '80'), &$replace, 'pixel_black.gif', false, 'blackSpace');
		 *  In template -- <!whiteSpace14> or <!silverSpace10> or <!blackSpace80>
		 */
		function putWhiteSpaces($arr, $replace, $image='', $y='100%', $type="hor", $range=true, $text='whitespace'){
			switch($image){
				case '':
					$img = 'pixel_trans.gif';
				break;
				case 'silver':
					$img = 'pixel_silver.gif';
				break;
				case 'black';
					$img = 'pixel_black.gif';
				break;
				default:
					$img = $image;
				break;
			}
			if($range == true){
				$min = (count($arr) == 2) ? $arr[0] : '0';
				$max = (count($arr) == 2) ? $arr[1] : $arr[0];
				for($height=$min; $height<=$max; $height++){
					$key = $text.$height;
					$replace[$key] = $this->putSpace($height, $img, $type, $y);
				}
			}else{
				foreach($arr as $height){
					$key = $text.$height;
					$replace[$key] = $this->putSpace($height, $img, $type, $y);
				}
			}
		}
		
		/**
		 * Function to generate string like '1','2','3' to use in "IN Query"
		 * e.g, SELECT * FROM user as u WHERE u.user_id IN ('44','48','47','53','27','29')
		 * 
		 * @param array $array
		 * @return string
		 * @access public
		 *
		*/
		function generateInQueryParameter($array) {
			
			// counts the no of elements in array
			$count_rows = count($array);
			$str = "";
			$counter = 0;
			foreach($array as $value){
				
					$str .= "'".$value."'";
					$counter++;
					if($counter != $count_rows){
						$str .= ",";
					}
			}
			return $str;
		}
		
		
		/**
		 *	format must be like - mm/dd/yy or mm/dd/yyyy
		 */
		function check_date($date) {
			
			if(!empty($date)) {
				$arr = explode("/", $date);
				if( (count($arr) > 3) || (count($arr) < 3) ){ 
					return false;
				}
				else {
					foreach ($arr as $val) {
						if(! is_numeric($val)) return false;
					}
				}
				
				$mydate = date("m-d-Y", mktime(0, 0, 0, $arr[0], $arr[1], $arr[2]));
				$arr2 = explode("-", $mydate);
				
				$check = checkdate($arr2[0], $arr2[1], $arr2[2]);
				if(!$check) {
					return false;
				}
			}
			return true;
		}
		
		
		function html_drop_down($name="", $values=array(), $default = '', $parameters = '') {
			
			if(empty($name)) $name="select";
			
		    $field = '<select name="' . $name . '" id="' . $name . '"';
		
		    if (!empty($parameters)) $field .= ' ' . $parameters;
		
		    $field .= '>';
		
		    if($this->check_array($values))
		    foreach ($values as $key => $value) {
		      $field .= '<option value="' . htmlspecialchars($key) . '"';
		      
		      if ((!empty($default)) && ($default == $key)) {
		        $field .= ' SELECTED';
		      }
			
		      $field .= '>' . htmlspecialchars($value) . '</option>';
		    }
		    $field .= '</select>';
			
		    return $field;
		}
		
		
		/**
		 * Function to add the elements in array on specified position.
		 * If position is not specified it will add array at end.
		 * Ex - $arr = $common->array_add_element(array('Manoj', 'Manu', 'Koushal'), array('Ratnesh', 'Janki'), '0');
		 *
		 * @param array $arr - ex. array('Manoj', 'Manu', 'Koushal', 'Janki');
		 * @param array $element - ex. array('Ratnesh') || array('Ratnesh', 'Sanjay');
		 * @param integer $position
		 */
		function array_add_element($arr=array(), $element=array(), $position='') {
			
			if($this->check_array($arr)) {
				if($this->check_array($element)) {
					if($this->check_empty($position)) {
						$position = count($arr);
					}
					array_splice($arr, $position, 0, $element);
				}
			}
			
			return $arr;
		}
		
		
		#####################################################
		##  Functions for two way encryption and decryption
		#####################################################
		
		function generate_code($length=6) {

        	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789";

        	$code = "";

        	while (strlen($code) < $length) {

            	$code .= $chars[mt_rand(0,strlen($chars))];

        	}

        	return $code;
    	}
    	##--------------------------------------------------
    	## SIMPLE FUNCTION TO ENCODE & DECODE STRING
    	function encode($string,$key) {
		    $key = sha1($key);
		    $strLen = strlen($string);
		    $keyLen = strlen($key);
		    $j="";
		    $hash="";
		    for ($i = 0; $i < $strLen; $i++) {
		        $ordStr = ord(substr($string,$i,1));
		        if ($j == $keyLen) { $j = 0; }
		        $ordKey = ord(substr($key,$j,1));
		        $j++;
		        $hash .= strrev(base_convert(dechex($ordStr + $ordKey),16,36));
		    }
		    return $hash;
		}
		##--------------------------------------------------
		function decode($string,$key) {
		    $key = sha1($key);
		    $strLen = strlen($string);
		    $keyLen = strlen($key);
		    $j="";
		    $hash="";		    
		    for ($i = 0; $i < $strLen; $i+=2) {
		        $ordStr = hexdec(base_convert(strrev(substr($string,$i,2)),36,16));
		        if ($j == $keyLen) { $j = 0; }
		        $ordKey = ord(substr($key,$j,1));
		        $j++;
		        $hash .= chr($ordStr - $ordKey);
		    }
		    return $hash;
		}
		##--------------------------------------------------
		## Function to converting hexadecimal number into binary form.
		function hex2bin($hexdata) {
			$bindata='';
		    for ($i=0;$i<strlen($hexdata);$i+=2) {
		        $bindata.=chr(hexdec(substr($hexdata,$i,2)));
		    }  
		    return $bindata;
		}
		##--------------------------------------------------
		function get_decrypted_id($encrypted_value, $key='Test') {
			
			$id = "";
			
			$query = "select AES_DECRYPT(unhex('".$encrypted_value."'),'".$key."') as id";
			$row = $this->get_result($query, '2');
			if($this->check_array($row))
			$id = $row[0]->id;
			
			return $id;
		}
		##--------------------------------------------------
		function set_encrypted_id($id, $key='Test') {
			
			$encrypted_id = "";
			
			$query = "select hex(AES_ENCRYPT('".$id."', '".$key."')) as encrypted_id";
			$row = $this->get_result($query);
			if($this->check_array($row))
			$encrypted_id = $row[0]->encrypted_id;
			
			return $encrypted_id;
		}
		##**************************************************
		
		
		//Get the result of the query as a CSV stream.
		function CSVExport($query) {
		    $sql_csv = $this->execute_query($query);
		    
		    header("Content-type:text/octect-stream");
		    header("Content-Disposition:attachment;filename=data.csv");
		    while($row = $this->fetch_result($sql_csv)) {
		        print '"' . stripslashes(implode('","',$row)) . "\"\n";
		    }
		    exit;
		}

		/**
		 * Import the contents of a CSV file after uploading it
		 * http://www.bin-co.com/php/scripts/csv_import_export/
		 * Aruguments : $table - The name of the table the data must be imported to
         *       $fields - An array of fields that will be used
		 * 		ex - $fields = array('first_name, last_name, country, address, city, state, zip, phone, fax, email','status','priority','mail_subscription','user_id','created_at','updated_at');
         *      $auto_fields - An array of fields that will be used -- Not mandatory
		 * 		ex - $cur_date = date("Y-m-d H:i:s", time());
		 * 			 $auto_fields = array('ACTIVE', 'NORMAL', 'new', '1', $cur_date, $cur_date);
         *      $csv_fieldname - The name of the CSV file field
         */
		function upload_csv($table='buyers', $fields=array(), $csv_fieldname='buyercsv', $auto_fields=array()) {
			
			$return = FALSE;
			global $_FILES;
			
			if(count($fields) <= 0) {
				$this->log_msg("Common::upload_csv() --> Please specify corrospondant database fields."); return false;
			}

			if( (count($_FILES) <= 0) || ($_FILES[$csv_fieldname]['name'] == '') ) {
				$this->log_msg("Common::upload_csv() --> Please upload a csv file."); return false;
			}
			
		    $file_name = $_FILES[$csv_fieldname]['name'];
		    
		    $arr = explode(".", $file_name);
		    $extentsion = $arr['1'];
		    if(strtolower($extentsion) != 'csv') { $this->log_msg('Common::upload_csv() --> Please upload only csv files.'); return false; }
		    
		    $handle = fopen($_FILES[$csv_fieldname]['tmp_name'],'r');
		    if(!$handle) die('Cannot open uploaded file.');
		
		    $row_count = 0;
		    $sql_query = "INSERT INTO $table(". implode(',',$fields) .") VALUES(";
		
		    $rows = array();
		
		    //Read the file as csv
		    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		    	
		    	if( $this->check_array($data) ) {
		    		
			        $row_count++;
			        $data = array_merge($data, $auto_fields);
			        foreach($data as $key=>$value) {
			            $data[$key] = "'" . addslashes($value) . "'";
			        }
			        if(count($data) != count($fields)) { $this->log_msg('Common::upload_csv() --> Some fields are missing in csv, Please check.'); $return=TRUE; }
			        
//			        $this->print_rr($data); exit;
	
			        $rows[] = implode(",",$data);
		    	}
		    } 
//		    $this->print_rr($rows); exit;
		    $sql_query .= implode("),(", $rows);
		    $sql_query .= ")";
		    fclose($handle);
		    
		    if($return == TRUE) {
		    	return false;
		    }
		    
//		    echo $sql_query; exit;
		    
		    if(count($rows)) { //If some recores  were found,
		    	
		        $this->execute_query($sql_query);
		
		        $this->log_msg('Common::upload_csv() --> Successfully imported '.$row_count.' record(s)');
		        
		        return true;
		        
		    } else {
		        $this->set_message('Cannot import data - no records found.');
		        
		        return false;
		    }
		}


		function print_rr($arr = array(), $arr_name='') {
			
			if( $this->check_array($arr) ) {
					
					$rows = count($arr);
		
					echo "<br/><strong>Total elements in array ($arr_name) = ".$rows."</strong></br>";
					
					echo "<pre>";
					print_r($arr);
					echo "</pre>";
			}
			else {
				
				if(is_array($arr)) {
					
					echo "<br/><strong>Empty array having '".count($arr)."' Keys.</strong></br>";
					
					echo "<pre>";
					print_r($arr);
					echo "</pre>";
					
				}
				else if($this->check_empty($arr)) {
					echo "<br/><strong>Parameter is not an array or object, Type = (".gettype($arr)."), Empty value.</strong></br>";
				}
				else {
					echo "<br/><strong>Parameter is not an array or object, Type = (".gettype($arr)."), value = ($arr).</strong></br>";
				}
			}

			echo "<hr>";
		}


		function log_msg($msg="Error occured.", $color="red", $size="3") {
			
			$str = '['.date("D M d H:i:s Y", time()).'] : '. $msg;
//			echo $my_msg = '<br/><font color="'.$color.'" size="'.$size.'"><strong>'.$str.'</strong></font>';

			$source_file = "tmp/mylog.txt";
			@chmod($source_file, 0777);
			
			$handle = @fopen($source_file, "a+"); // w+ is used to write every time from begining.
			if($handle) {
				
				$str2 = "\n $str";
				if (@fwrite($handle, $str2) === FALSE) {
					echo "Cannot able to write into file ($source_file)";
				}
				fclose($handle);
			}
			else {
				echo "Cannot able to open file - ($source_file)";
			}
		}

		function echoo($str, $exit=false) {
			$msg = '<br/><font color="#9900FF"><strong>Track Message : '.$str.'</strong></font>';
			echo $msg;

			if($exit != false) {
				exit;
			}
		}
		
} // Common Class Ends


################################
##  Testing
################################


$common = new common();
//$common->getxml(); exit;

//$common->execute_query("update emp set ename='Ratnesh kr' where eid=1");
//$common->execute_queryi("update emp set ename='Ratnesh kumar' where eid=1");
//$common->execute_queryi("select * from emp inner join emp_profile on emp.eid=emp_profile.id");
//$common->execute_query("select * from emp inner join emp_profile on emp.eid=emp_profile.id");
//$common->get_primarykeyi('emp');
//$row = $common->get_row('te', '1');
//$rows = $common->select('emp', array('eid','mid'));
//$replace = $common->assignValueToFormElements(array('emp_id' => 'eid', 'emp_name' => 'ename'), '', '');
//$common->print_rr($replace);


//echo $common->html_drop_down('dd', array('01'=>'Manoj'));
//$arr = $common->array_add_element(array('Manoj', 'Manu', 'Koushal'), array('Ratnesh', 'Janki'), '0');
$arr = $common->array_add_element(array('mannu'=>'Manoj', 'manu'=>'Manu', 'jha'=>'Koushal'), array('ratan'=>'Ratnesh', 'jaan'=>'Janki'), '0');
//$common->print_rr($arr); exit;


$common->upload_csv('emp_profile', array('id','address'), 'empcsv');


$common->putWhiteSpaces(array('1', '10'), &$hor, 'pixel_silver.gif');
$common->putWhiteSpaces(array('1', '10'), &$ver, 'verticle.gif', '100', 'ver');


//print_r($arr); exit;
/*echo '<table border="1" cellspacing="4" cellpadding="4">
  <tr>
    <td colspan="2" scope="col">1 '.$ver['whitespace1'].' 2</td>
  </tr>
  <tr>
    <td colspan="2" scope="col">1 '.$ver['whitespace10'].' 2</td>
  </tr>
  <tr>
    <td colspan="2" scope="col">1 '.$hor['whitespace1'].' 2</td>
  </tr>
  <tr>
    <td colspan="2" scope="col">1 '.$hor['whitespace10'].' 2</td>
  </tr>
</table>';
*/

/*
echo '<form name="frm" id="frm" method="post" action="'.$_SERVER['PHP_SELF'].'" enctype="multipart/form-data">
Upload csv: <input type="file" name="empcsv" id="empcsv" />
<input type="submit" name="upload" id="upload" value="Upload"  />
</form>';


echo $common->nice_datetime(strtotime('2009-05-17 14:25:50'));
echo "<br/>My Machine's IP = ".$common->find_client_ip();
echo "<br/>No of Days-".$numDays=$common->daysInSpan(mktime(0,0,0,5,1,2009));
*/
?>