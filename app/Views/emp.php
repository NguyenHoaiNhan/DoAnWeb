<!DOCTYPE html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    </head>
    <body>
        <input type="number" id="id_start" placeholder="start"/>
        <input type="number" id="id_limit" placeholder="limit"/>
      <button id="btn"> Press </button>
      <h1>Result</h1>
      <p id="tx1"></p>
      <p id="tx2"></p>
      <script type="text/javascript">
         $("#btn").click(function(){
            var start = $("#id_start").val();
            var limit = $("#id_limit").val();
            var path = "<?php echo base_url()?>/app/Controllers/Scroll_pagination/fetch";
            alert(start + " " + limit + " => " + path);
            
            $.ajax({
                // url: "<?php echo base_url()?>/app/Controllers/Scroll_pagination/fetch",
                url: '/scroll/fetch',
                method: "POST",
                data: {start: start, limit: limit},
                dataType: 'json',
                success: function(data){
                    console.log(data);
                    data.forEach(function(obj){
                        console.log(obj.id);
                        console.log(obj.name);
                        console.log(obj.email);
                    });
                }
            });
         });
      </script>
    </body>
</html>