<html>
    <head>
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
            $(document).ready(function()
            {
                $("#output").keyup(function()
                {
                    var sname=$('#output').val();
                    $.ajax({
                    type:"GET",
                    url:"searchSociety.php",
                    data:{'sname':sname},
                    beforeSend:function(){
                        console.log("Before send");
                    },
                    success:function(response)
                    {
                        var response=response;
                        console.log("success");
                        $("#snameData").html(response);
                    }
                    });
                });
            });
        </script>
        <script>
            function preventBack()
            {
                window.history.forward();
                window.onbeforeunload=function(){
                    alert("You won't be able get back");
                };
            }
            setTimeout("preventBack()",0);
            window.onunload()=function (){null;};
        </script>
        <style>
            body{
                background-image:url("Building.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                font-family: "Saira Extra Condensed", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            }
            
          
        .search-form {
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          margin: 20px;
        }

        .search-bar {
          display: flex;
          align-items: center;
          border: 1px solid #dfe1e5;
          border-radius: 24px;
          box-shadow: none;
          height: 44px;
          overflow: hidden;
          padding: 0 16px;
          transition: box-shadow .28s cubic-bezier(.4,0,.2,1);
          max-width: 584px;
          width: 100%;
          background-color: white;
        }

        .search-bar:hover,
        .search-bar:focus-within {
          box-shadow: 0 1px 6px rgba(32,33,36,.28);
          border-color: #bdc1c6;
        }

        .search-bar input[type="text"] {
          background-color: transparent;
          border: none;
          font-size: 16px;
          outline: none;
          width: 100%;
          margin: 0 4px;
        }

        .search-icon {
          display: flex;
          justify-content: center;
          align-items: center;
          color: #5f6368;
          padding: 8px;
          font-size: 16px;
        }


       
          
          
        </style>
        
    </head>
    <body>
    <center>
        <form class="search-form" method="GET">
            <div class="search-bar">
                <input type="text" id="output" class="hide" placeholder="Search Society Name..">
            </div>
            <br><br>
            <div id='snameData'>
                
            </div>
            
         </form>
        
    </center>
    </body>
</html>