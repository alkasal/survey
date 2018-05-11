
  /* Js for survey form */

   /* Validate email address */
   function ValidateEmail(mail) {
     if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
      {
        return true;
      } else {
        return false;
      }    
    } 


    /* Hide alert after a interval */

    function hideAlert(cls){

       setTimeout(function(){ $('.'+cls).hide(); },3000);

    }

    /* This function call when form submit by user */
    function submitData(){     

       var check =true;     
      
      /* serialize form data */
      var survey_data = $('#surveyform').serializeArray();

     // console.log(survey_data); return false;
      $.each(survey_data,function(key,input){  

           if($.trim(input.name)=='email'){  
              if(ValidateEmail(input.value)==false){
                /* Show alert for error case */
                    
                $('.alert-danger').text('').text('Please enter valid email').show();                
                hideAlert('alert-danger');
                check = false;
                return false;                
              }
           }     

           if(input.name!='' && $.trim(input.value)==''){   
             /* Show alert for error case */             
              $('.alert-danger').text('Please fill in all the fields').show(); 
              hideAlert('alert-danger');
              check = false;
              return false;
              
           }         
      });

      if(check==false){
        return false;
      }


      /* Ajax request to store data in data.log file */
      $.ajax({
          url: 'ajax_survey.php',
          data: survey_data,     
          type: 'POST',
          success: function(data){
                var res = JSON.parse(data);
               if(res.response==1){
                     /* Show alert for success and empty the form */
                      $('.alert-danger').text('').hide();
                      $('#email,#goal1,#goal2,#goal3').val(''); 
                      $('.alert-success').text('').text('Thanks for your answers.').show(); 

                      hideAlert('alert-success');
                      
                      return false;
                } else {
                    /* Show alert for error and empty the form */
                      $('.alert-success').text('').hide();
                      $('#email,#goal1,#goal2,#goal3').val(''); 
                      $('.alert-danger').text('Something went wrong here.').show(); 

                      hideAlert('alert-danger');

                      return false;
                }
          }
      });

    }
    