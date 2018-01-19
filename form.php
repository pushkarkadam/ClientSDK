<?php
Config::initialise("sandbox", "bf05dc59f637a712c900716c868ca7f9f231b3a7", "f4a3c72bb6bbccb3f612c30ac9496fbb16d2caec");

$svc = new Charges();
$res = $svc->create(100, "AUD")
    ->withToken($token)
    ->call();
?>