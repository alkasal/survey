<?php 

/* Get Post data here */
if(!empty($_POST)){
      /* Check file exist or not */
      if(file_exists('data.log')){

          $jsonData = json_encode($_POST);          
          $myfile = fopen("data.log", "a") or die('Something went wrong here.'); 
          /* write the data inside the file */                            
          fwrite($myfile, $jsonData);                        
          fclose($myfile);

          echo json_encode(array('response'=>1)); die;

      } else {
           /* Creating file if not exist and write the data inside the file */
            $jsonData = json_encode($_POST);            
            $myfile = fopen("data.log", "w") or die('Something went wrong here.');          
            fwrite($myfile, $jsonData);                        
            fclose($myfile);

            echo json_encode(array('response'=>1)); die;
      }

} else {
   
   echo json_encode(array('response'=>0));

}

?>