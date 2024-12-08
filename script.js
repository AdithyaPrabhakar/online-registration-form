$(document).ready(function() {
    $('#registration-form').submit(function(e) {
      e.preventDefault();
  
      console.log("Form data to be sent:", $(this).serialize()); // Debugging: Log the form data
  
      $.ajax({
        url: 'submit.php',
        type: 'POST',
        data: $(this).serialize(),
        success: function(response) {
          console.log("Server response:", response); // Debugging: Log server response
          $('#result').html(response);
          $('#registration-form')[0].reset();
        },
        error: function(xhr, status, error) {
          console.error("AJAX Error:", status, error);
          $('#result').html('<p style="color:red;">There was an error submitting your data. Try again later.</p>');
        }
      });
    });
  });
  