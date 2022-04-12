<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quarantine Protocols</title>
</head>
<body>
    <h3>Quarantine Protocols</h3>
        <form id = "myForm" action = "#" >  
            <input type="number" id="age" min="1">
       		<button type = "submit" onclick="quarantineProtocols()" value="Enter" class="btn btn-primary">Go</button>
            <p id="displayAge"> </p>
        </form>

    <script>
        function quarantineProtocols(){
            //Clearing the display fields
            document.getElementById('displayAge').innerHTML = "";
            var ageLimit = document.getElementById('age').value;
				if(!ageLimit || ageLimit <1){
						return ;
				}

                if(ageLimit <21 || ageLimit > 65){
                    document.getElementById('displayAge').innerHTML += "Your age is " + ageLimit + ":  Please STAY AT HOME!!";
                    
                }else if(ageLimit >21 ||ageLimit  <=65){
                    document.getElementById('displayAge').innerHTML += "Your age is " + ageLimit + ":  GO AND HAVE SOME FUN!!";
                    
                }
                //Clearing the input fields
                document.getElementById('age').value = "";
  
        }
  
    </script>
</body>
</html>