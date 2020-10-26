<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>

        <div class="students_wrapper">
            @foreach ($students as $student)

                <div class="student">
                <p>Name: <span>{{$students->name}}</span></p>
                <p>Lastame: <span>{{$students->lastname}}</span></p>
                <p>Gender: <span>{{$students->gender}}</span></p>
                <p>Birthday: <span>{{$students->date_of_birth}}</span></p>
                </div>
                
            @endforeach
        </div>
        
    </body>
</html>