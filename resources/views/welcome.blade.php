<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>Directorate of Account And Treasury</title>
    <h1>Directorate of Account And Treasury<h1>
          
 <style>
            div {
   background-color: lightgrey;
  width: 1400px;
  height:500px;
  border: 15px solid green;
  padding: 50px;
  margin: auto;
}
            
  h1 {
  color: green;
  font-family: verdana;
  font-size: 200%;
  border: 2px solid black;
     padding: 20px;
}
p  {
  color: green;
  font-family: courier;
  font-size: 150%;
   border: 2px solid black;
    padding: 20px;
} 
 a {
  color: green;
  font-family: courier;
  font-size: 50%;
   border: 0.5px solid black;
    padding: 10px;
    
}
        </style>
        
    </head>
    <body>
         <div class="container-fluid p-5 bg-primary text-white text-center">
         <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
          <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
         
         </div>   

           
    </body>           
</html>
