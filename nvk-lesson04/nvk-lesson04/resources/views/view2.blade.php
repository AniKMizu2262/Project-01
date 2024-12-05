<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>if statement</title>
</head>
<body>
    <h1>If statment</h1>
    @verbatim
   <pre>
        @if (count($array)===1)
            I have 1 element !
        @elseif (count($array)>1)
            I have more element !
        @else 
            I don't have element !
        @endif
   </pre>
    @endverbatim
    <h2>Mảng @{{$arr}} :</h2>
        @if (count($array) === 1)
            I have one element!
        @elseif (count($array) > 1)
            I have multiple element!
        @else
            I don't have any element!
        @endif
</body>
</html>