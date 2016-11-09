// Library for using cryptocurrency wallets from php
// Source: https://github.com/emercoin/bitcoinController
include("bitcoinController/bitcoin.inc.php");

// http or https
$rpcType = "http";

// as specified in your configuration file
$rpcUsername = "rpcuser";
$rpcPassword = "rpcpassword";
$rpcHost = "localhost:6662";

$bitcoinController = new BitcoinClient($rpcType, $rpcUsername, $rpcPassword, $rpcHost);
$getinfo = $bitcoinController->query("getinfo");
$getinfo = $bitcoinController->query("name_new", "aaa", "bbb", "3650");
