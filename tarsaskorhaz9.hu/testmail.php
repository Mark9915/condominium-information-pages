<?php 
  echo "mailtest";
  $dest = "loranth.imre@gmail.com"; 
  $fromaddy = "mailtest@tarsaskorhaz9.hu"; 
  mail("<$dest>","Test from php mail","Test","From:<$fromaddy>","-f$fromaddy"); 
?>