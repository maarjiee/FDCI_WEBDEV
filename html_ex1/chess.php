<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess board</title>
</head>
<style>
    .board{
        width: 700px;
        height: 700px;
        margin-left: auto;
        margin-right: auto;
    }
    table, tr, td{
        border: 1px solid;
    }
    .black {
        background-color: #a6a6a6;
    }
    .white{
        background-color: #f2f2f2;
    }
    td { 
        width: 1.5em; 
        height: 1.5em; 
        text-align: center; 
        font-size: 50px;
    }

</style>
<body>
    <table class="board">
    <!-- 1st row
    adding pieces -->
        <tr>
            <div>
                <td class="white">&#9820;</td>
                <td class="black">&#9822;</td>
                <td class="white">&#9821;</td>
                <td class="black">&#9819;</td>
                <td class="white">&#9818;</td>
                <td class="black">&#9821;</td>
                <td class="white">&#9822;</td>
                <td class="black">&#9820;</td>
            </div>
        </tr>
       
    <!-- 2nd row
    adding pieces -->
        <tr>
            <div>
                <td class="black">&#9821;</td>
                <td class="white">&#9821;</td>
                <td class="black">&#9821;</td>
                <td class="white">&#9821;</td>
                <td class="black">&#9821;</td>
                <td class="white">&#9821;</td>
                <td class="black">&#9821;</td>
                <td class="white">&#9821;</td>
            </div>
        </tr>
         <!-- 3rd row -->
         <tr>
             <div>
                <td class="white"></td>
                <td class="black"></td>
                <td class="white"></td>
                <td class="black"></td>
                <td class="white"></td>
                <td class="black"></td>
                <td class="white"></td>
                <td class="black"></td>
            </div>
        </tr>
        <!-- 4th row -->
        <tr>
            <div>
                <td class="black"></td>
                <td class="white"></td>
                <td class="black"></td>
                <td class="white"></td>
                <td class="black"></td>
                <td class="white"></td>
                <td class="black"></td>
                <td class="white"></td>
            </div>
        </tr>
         <!-- 5th row -->
         <tr>
            <div>
                <td class="white"></td>
                <td class="black"></td>
                <td class="white"></td>
                <td class="black"></td>
                <td class="white"></td>
                <td class="black"></td>
                <td class="white"></td>
                <td class="black"></td>
            </div>
        </tr>
        <!-- 6th row -->
        <tr>
            <div>
                <td class="black"></td>
                <td class="white"></td>
                <td class="black"></td>
                <td class="white"></td>
                <td class="black"></td>
                <td class="white"></td>
                <td class="black"></td>
                <td class="white"></td>
            </div>
        </tr>
        <!-- 7th row
        adding pieces -->
          <tr>
            <div>
                <td class="white">&#9817;</td>
                <td class="black">&#9817;</td>
                <td class="white">&#9817;</td>
                <td class="black">&#9817;</td>
                <td class="white">&#9817;</td>
                <td class="black">&#9817;</td>
                <td class="white">&#9817;</td>
                <td class="black">&#9817;</td>
            </div>
        </tr>
        <!-- 8th row
        adding pieces -->
        <tr>
            <div>
                <td class="black">&#9814;</td>
                <td class="white">&#9816;</td>
                <td class="black">&#9815;</td>
                <td class="white">&#9813;</td>
                <td class="black">&#9812;</td>
                <td class="white">&#9815;</td>
                <td class="black">&#9816;</td>
                <td class="white">&#9814;</td>
            </div>
        </tr>
           
    </table>
</body>
</html>