<?php

namespace Core;

class Mail {

    private $_header;
    private $_message;
    private $_subject;
    private $_senderName;
    private $_senderEmail;
    private $_contentType;
    private $_reply;
    private $_charset;
    
    public function __construct($charset = 'UTF-8') {
        $this->_header   = array();
        $this->_header[] = "MIME-Version: 1.0";
        $this->_header[] = "X-Mailer: PHP/".phpversion();
        $this->_contentType = 'text/html';
        $this->_reply = '<no-reply>';
        $this->_charset = $charset;
    }
    
    public function setSender($name, $email) {
        $this->_senderName = $name;
        $this->_senderEmail = $email;
    }
    
    public function setCharset($charset) {
        $this->_charset = $charset;
    }
    
    public function setContentType($contentType = 'text/html') {
        $this->_contentType = $contentType;
    }
    
    public function setBCC($name, $email) {
        $this->_header[] = "Bcc: {$name} <{$email}>";
    }
    
    public function setCC($name, $email) {
        $this->_header[] = "Cc: {$name} <{$email}>";
    }
    
    public function setSubject($subject) {
        $this->_header[] = "Subject: {$subject}";
        $this->_subject = "{$subject}";
    }
    
    public function setMessage($message) {
        $this->_message = $message;
    }
    
    public function send($emails) {
        $this->_header[] = "From: {$this->_senderName} <{$this->_senderEmail}>";
        $this->_header[] = "Content-type: {$this->_contentType}; charset={$this->_charset}";
        $this->_header[] = "Reply-To: {$this->_reply}";
        
        if(empty($this->_senderEmail)) {
            throw new \Exception('No sender set');
        }

        if( count((array)$emails) === 0) {
            throw new \Exception("No recipient set");
        }
        
        foreach((array)$emails as $email) {    
            if(!mail($email, $this->_subject, $this->_message, implode("\r\n", $this->_header))) {
                throw new \Exception("Send Failed");
            }
        }
    }
    
    public function setReply($name, $email) {
        $this->_header[] = "Reply-To: {$name} <{$email}>";
    }
}