<?php

error_reporting(0);
include ("function.php");
echo "\e            GOJEK VERSION 1.8.3              \n";
echo "\e BISMILLAHIRRAHMANIRRAHIM  JANGAN LUPA FOLLO INSTAGRAM @HILMAWANABDR\n";
echo "\n";
nope:
echo "\e[?] MASUKIN NOMOR HP FRESH : ";
$nope = trim(fgets(STDIN));
$cek = cekno($nope);
if ($cek == false)
    {
    echo "\e[x] NOMOR LU GA FRESH\n";
			goto nope;
    }
  else
    {
echo "\e[!] TUNGGU SEBENTAR\n";
sleep(5);
$register = register($nope);
if ($register == false)
    {
    echo "\e[x] GA FRESH ANJIR!\n";
    }
  else
    {
    otp:
    echo "\e[!] MASUKIN SMS YA NJIR  (OTP) : ";
    $otp = trim(fgets(STDIN));
    $verif = verif($otp, $register);
    if ($verif == false)
        {
        echo "\e[x] Kode Verifikasi Salah\n";
        goto otp;
        }
      else
        {
	echo "\e[!] Trying to redeem Voucher : COBAGORIDEPAY !\n";
        $claim = claim1($verif);
        if ($claim == false){
            echo "\e[!] Failed to Claim Voucher, Try to Claim Manually\n";
			      sleep(3);
            echo "\e[!] Trying to redeem Voucher : COBAGOFOOD090320A !\n";
			      goto ride;
            }else{
                echo "\e[+] ".$claim."\n";
				    sleep(3);
                echo "\e[!] Trying to redeem Voucher : COBAGOCARPAY !\n";
                sleep(3);
                goto ride;
            }
            ride:
            $claim = ride($verif);
            if ($claim == false){
            echo "\e[!] Failed to Claim Voucher, Try to Claim Manually\n";
			      sleep(3);
            echo "\e[!] Trying to redeem Voucher :COBAINGORIDE !\n";
            sleep(3);
            }else{
                echo "\e[+] ".$claim."\n";
				    sleep(3);
                echo "\e[!] Trying to redeem Voucher : COBAGOFOOD090320A !\n";
                sleep(3);
                goto pengen;
            }
            pengen:
            $claim = cekvocer($verif);
            if ($claim == false ) {
            echo "\e[!] Failed to Claim Voucher, Try to Claim Manually\n";
           }
		  else
			{
			echo $claim . "\n";
			}
		}
	}
}
?>
