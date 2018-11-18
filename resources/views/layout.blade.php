<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        input{
            margin: 4px;
        }
        
        .is-complete {
            text-decoration: line-through;
            
        }
        
        .text-red {
            color: red;
        }
        
        .input-red {
            border: 1px solid red;
        }
    
    </style>
    
</head>
<body>
   
   <div class="container">
       @yield('content')
   </div>
    
</body>
</html>