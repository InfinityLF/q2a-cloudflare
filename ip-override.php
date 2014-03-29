<?php

function qa_remote_ip_address()
{
	if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) { return @$_SERVER['HTTP_CF_CONNECTING_IP']; }
	
	else { return qa_remote_ip_address_base(); }
}
