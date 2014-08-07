<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>Select - onchange AJAX example</title>
  </head>

  <body>
    <label for="meetingPlace">Meeting place: </label>
    <select id="meetingPlace">
      <option value="">Please select</option>
      <option value="buckingham-palace">Buckingham Palace</option>
      <option value="white-house">The White House</option>
      <option value="mount-everest">Mount Everest</option>
    </select>
    <div id="results"></div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
      function makeAjaxRequest(opts){
        $.ajax({
          type: "POST",
          data: { opts: opts },
          url: "process_ajax.php",
          success: function(res) {
            $("#results").html("<p>$_POST contained: " + res + "</p>");
          }
        });
      }

      $("#meetingPlace").on("change", function(){
        var selected = $(this).val();
        makeAjaxRequest(selected);
      });
    </script>
  </body>
</html>