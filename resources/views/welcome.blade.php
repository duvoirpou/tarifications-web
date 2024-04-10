<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


    </head>
    <body>
        <table>
            @foreach ($datas as $item)
                <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$item->functionality->name}}</td>
                    <td>{{$item->type->name}}</td>
                </tr>
                @endforeach
        </table>
    </body>
</html>
