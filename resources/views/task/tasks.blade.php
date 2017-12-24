<!DOCTYPE html>
<html>
    <head>
        <title>Tasks</title>
    
    </head>

    <body>
        <ul>
            @foreach($tasks as $task)
            <li><a href="/task/{{$task->id}}">{{ $task->body }}</a></li> {{--  The {{ means to echo in PHP Laravel  --}}

            @endforeach
        </ul>
    
    
    
    </body>

</html>

