<?php 
require('Email.php');
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    public function test_email_pass()
    {
        $this->assertTrue(email_validate("anshika.up87@gmail.com"));
        
        $this->assertTrue(email_validate("a.b@g.c")); 
        
        $this->assertTrue(email_validate("123@gmail.com")); 
    }
    public function test_email_fail()
    {
        $this->assertFalse(email_validate("anshika@gmail"));
        
        $this->assertFalse(email_validate("anshikagmail"));
        
        $this->assertFalse(email_validate("anshikagmail.com"));
    
        $this->assertFalse(email_validate("anshika@gmail.com.in"));

        $this->assertFalse(email_validate("anshika_gmail"));
        
        $this->assertFalse(email_validate("anshika@gmail.com.in#"));
    
        $this->assertFalse(email_validate("anshika_agr.123@grass.co.in"));

        $this->assertFalse( email_validate("a.@g.c"));

        $this->assertFalse( email_validate("___@graas.co"));

        $this->assertFalse( email_validate("anshika_agr.123@grass.co.in"));
        
        $this->assertFalse(email_validate("_anshik.up87@gmail.com"));

        $this->assertFalse(email_validate("anshika.up87@gmail.123"));
    }
}