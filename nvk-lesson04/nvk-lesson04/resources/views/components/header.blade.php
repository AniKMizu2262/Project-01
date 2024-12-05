<div>
   <h1>Đây là heder </h1>
   <h2> project </h2>
   <h3> Welcome to, {{ $name }} </h3>
   <h3> Fruits gom: </h3>
   <ul>
      @foreach ($qua as $item)
         <li>{{ $item }}</li>
      @endforeach
   </ul>
</div>

