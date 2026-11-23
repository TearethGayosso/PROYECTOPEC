<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de</title>
</head>
<body>
   <h1>Acerca de </h1>
   <a href="{{ route ('inicio') }}"></a><br>
   <a href="{{ route ('contenido') }}"></a><br>
   <a href="{{ route('inicio') }}" 
                   class="{{ request()->routeIs('inicio') ? 'text-yellow-400 font-bold border-b-2 border-yellow-400' : 'hover:text-gray-300' }}">Inicio
   
</body>
</html>