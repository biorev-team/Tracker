<Doctype! html>
    <head>
        <title>Tracker</title> 
         <!-- Fonts -->
         <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
           
    </head>

    <body >
        <div>
        @foreach($homes as $home)
            {{$home->title}};
        @endforeach
         </div>
    
         <div>
        @foreach($lots as $home)
            {{$home->id}};
        @endforeach
         </div>
    </body>





</html>