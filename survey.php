<!DOCTYPE html>
<html lang="en">
<head>
  <title>Survey Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/survey-style-sheet.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/survey.js"></script>  
</head>
<body>

<div class="container">

    <div class="form-goal">  
         
         <div class="alert alert-success" style="display: none;"></div>
         <div class="alert alert-danger" style="display: none;"></div>

      <form class="form-horizontal" action="javascript:void(0)" id="surveyform">
          <div class="form-group">
            <label class="control-label col-sm-2 text-left" for="email">Your name:</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" placeholder="Please leave your name here" name="email">
            </div>
          </div>

        <h2>What are your 3 major life goals?</h2>
          <div class="form-group">
            <label class="control-label col-sm-2" for="goal">Goal #1:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="goal1" placeholder="Put your Goal #1 here" name="goal1">
            </div>
          </div>
        
          <div class="form-group">
            <label class="control-label col-sm-2" for="goal">Goal #2:</label>
            <div class="col-sm-10">          
              <input type="text" class="form-control" id="goal2" placeholder="Put your Goal #2 here" name="goal2">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2" for="goal">Goal #3:</label>
            <div class="col-sm-10">          
              <input type="text" class="form-control" id="goal3" placeholder="Put your Goal #3 here" name="goal3">
            </div>
          </div>

          <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default" onclick="return submitData()">Submit</button>
            </div>
          </div>

      </form>

  </div>

</div>

</body>
</html>
