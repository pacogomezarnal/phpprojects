<html>
	<head>
		<title>FORMULARIO
		</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <style>
          #draggable { width: 150px; height: 150px; padding: 0.5em; }
          #izda {float:left;background-color:#aaaaaa;width:50%;}
           #drcha {float:left;background-color:#cccccc;width:50%;}
          </style>
          <script>
          $(function() {
            $( "#draggable" ).draggable();
          });
       </script>
	</head>
	<body>
	    <div id="izda">
            <div id="draggable" class="ui-widget-content">
              <p>Drag me around</p>
            </div>
        </div>
        <div id="drcha">
        </div>
	</body>
</html>