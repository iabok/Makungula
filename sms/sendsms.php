					
 <?php
	$sms_object = new SendSMS("256793519519", "Abok Isaac", "This is a test Message. The api is finally working");
	$send_message = $sms_object->sendSMS();
	if($send_message === true){
		echo "Message sent";
	}
	else{
	
		echo"Message Not Sent";
	
	}
	
    class SendSMS{
        public function __construct($telephoneNumbers, $sender, $message){
            $this->messageToSend = $message;
            $this->phoneNumbers = $telephoneNumbers;
            $this->senderName = $sender;
//            $this->sendSMS($this->phoneNumbers, $this->senderName, $this->messageToSend);
        }

        /**
         * @param phoneNumbers
         * @param senderName
         * @param messageToSend
         */
        public function sendSMS(){
            $phoneNumbers = urlencode($this->phoneNumbers);
            $senderName = ucwords(urlencode($this->senderName));
            $messageToSend = urlencode($this->messageToSend);
            //Attempt to send Message
            try{
                $sendMessageUrl = "http://smsplus1.routesms.com:80/bulksms/bulksms?username=aisba&password=km7s1f&type=0&dlr=1&destination=".$phoneNumbers."&source=".$senderName."&message=".$messageToSend;
                $parse_url = file($sendMessageUrl);
                $sent = strpos($parse_url[0], "1701");
                if($sent !== false){
                    return true;
                }else{
                    return ($parse_url[0]);
                }
            }catch (Exception $e){
                echo 'Error encountered: ', $e->getMessage(), " at Line: ", $e->getLine();
            }
        }

        /**
         * @param phoneNumbers
         */
        public function addCountryCode($phoneNumbers){
            $numbers = "256".$phoneNumbers;
            return $numbers;
        }
     
    }
	
					
?>