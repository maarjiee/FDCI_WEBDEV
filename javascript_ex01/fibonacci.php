<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<body>

    <h3>Fibonacci Sequence</h3>
        <form id = "myForm" action = "#" >  
            <input type="number" id="limitNum" min="0">
       		<button type = "submit" onclick="fibonacci()" value="Enter" class="btn btn-primary">Go</button>
            <p id="displayFib"> </p>
        </form>


    <script>
        function fibonacci(){
            //Clearing display fields
            document.getElementById('displayFib').innerHTML = "";
            // declaration of the variables  
            enteredNum = document.getElementById('limitNum').value;
            var firstNum = 0.
            var secondNum = 1
            var next_num, i;  
            
            if(!enteredNum || enteredNum < 0){
						return ;
			}
             
            for ( i = 1; i <= enteredNum ; i++)  
            {
                document.getElementById('displayFib').innerHTML +=  firstNum + " <br> " ; // print the firstNum  
                nextNum = firstNum + secondNum; // sum of firstNum and secondNum into the nextNum   
                firstNum = secondNum; // assign the secondNum value into secondNum  
                secondNum = nextNum; // assign the nextNum into secondNum  
            }   
            //Clearing the input fields
            document.getElementById('limitNum').value = "";
        }
    </script>
</body>
</html>