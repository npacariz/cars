<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <title>Cars</title>
</head>
<body> 


   
   
    
    <div class="container">
            
        <div class="jumbotron">
                <nav class="navbar navbar-light bg-light">
                    <a href='/about' class="btn btn-outline-success" type="button">About</a>
                    <a href='/cars' class="btn btn-outline-success" type="button">Cars</a>
                </nav>
                
                <h1>Car APP</h1>   

                @yield('content')
        </div>
    </div>
    
</body>
</html>