<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form id ="bipin-form" action="">
      @csrf
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="pass" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

 <div class="container mt-5">
   <div class="row">
     <table class="table" id="user-table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
       
    </tbody>
  </table>
   </div>
 </div>

</body>
</html>
<script>

        $(document).ready(function() {
         

            $('#bipin-form').on('submit', function(event) {
                event.preventDefault();
            
                $.ajax({
                    url: "{{ route('form.submit') }}",
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                      console.log(response)
                      $('#user-table').html(response);
                        // if (response.success) {
                        //     alert(response.message);
                        // }
                    },
                    error: function(xhr) {
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            alert(value[0]); // Show the first error message for each field
                        });
                    }
                });
            });
        });
    </script>