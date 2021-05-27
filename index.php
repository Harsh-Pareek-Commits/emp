<?php session_start(); ?>
<?php include 'header.php'; ?>
<head>
  <style type="text/css">
    .button5 {
     width: 180px;
     height: 40px;
     margin-left: 130px;
     border-radius: 25px;
  background-color: green;
  color: white;
  border: 2px solid #555555;
}

.button5:hover {
  background-color: #555555;
  color: white;
}
  </style>
</head>
<body >


<div style="width: 500px; height: 190px; margin-left: 500px; margin-top: 200px ;border-radius: 25px;
  border: 2px solid #73AD21;
  padding: 20px; 
  ">
  
    <div >
      <h4 class="login-box-msg">Enter Employee ID</h4>

      <form id="attendance">
          <div class="form-group">
            <select class="form-control" name="status">
              <option value="in">Time In</option>
              <option value="out">Time Out</option>
            </select>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control input-lg" id="employee" name="employee" required placeholder="Employee ID...">
          </span>
          </div>
          <div class="row">
          <div class="col-xs-4">
                <button type="submit" class="button5"  name="signin"><i></i> Sign In</button>
            </div>
          </div>
      </form>
    </div>
    <div class="alert alert-success alert-dismissible mt20 text-center" style="display:none;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <span class="result"><i class="icon fa fa-check"></i> <span class="message"></span></span>
    </div>
    <div class="alert alert-danger alert-dismissible mt20 text-center" style="display:none;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <span class="result"><i class="icon fa fa-warning"></i> <span class="message"></span></span>
    </div>
      
</div>
  
<?php include 'scripts.php' ?>
<script type="text/javascript">
$(function() {
  var interval = setInterval(function() {
    var momentNow = moment();
    $('#date').html(momentNow.format('dddd').substring(0,3).toUpperCase() + ' - ' + momentNow.format('MMMM DD, YYYY'));  
    $('#time').html(momentNow.format('hh:mm:ss A'));
  }, 100);

  $('#attendance').submit(function(e){
    e.preventDefault();
    var attendance = $(this).serialize();
    $.ajax({
      type: 'POST',
      url: 'attendance.php',
      data: attendance,
      dataType: 'json',
      success: function(response){
        if(response.error){
          $('.alert').hide();
          $('.alert-danger').show();
          $('.message').html(response.message);
        }
        else{
          $('.alert').hide();
          $('.alert-success').show();
          $('.message').html(response.message);
          $('#employee').val('');
        }
      }
    });
  });
    
});
</script>
<div style=" width: 150px;height: 100px; margin-left: 1200px;margin-top: 200px">
    <div >
      <p id="date"></p>
      <p id="time" class="bold"></p>
    </div>

</body>
</html>