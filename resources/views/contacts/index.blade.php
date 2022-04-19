<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .table {
            width: 800px;
            border: 1px solid #000;
        }
        .table tbody tr td{
            border-bottom: 1px solid #000; 
        }

        .button {

        }
        .buttonEdit{
                text-decoration: none;
                padding: 2px;
                margin: 5px;
                border-radius: 2px;
                background-color:aquamarine;
                color: #000; 
        }
        .buttonDelete{
            text-decoration: none;
            padding: 2px;
            margin: 5px;
            border-radius: 3px;
            background-color:brown;
            color: #000; 
        }

    </style>
</head>

<body class="antialiased">
    <h2>Index</h2>
    <span>
        <a href="/contacts/create">
            create
        </a>
    </span>
    <div class="container">
        <div class="main-container">
            <div class="container">
                <div class="table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Contact</th>
                                <th scope="col">email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody id="mytable">
                            @foreach ($data as $item)
                            <tr>
                                <td scope="row">{{$item->id}}</td>
                                <td scope="row">{{$item->name}}</td>
                                <td scope="row">{{$item->contact}}</td>
                                <td scope="row">{{$item->email}}</td>
                                <td scope="row">
                                    <span>
                                        <a href="{{URL::to('contacts/' . $item->id . '/edit')}}" role="button" class="buttonEdit">edit</a>
                                    </span>
                                    <span>
                                        <a href="{{URL::to('contacts/' . $item->id . '/edit')}}" role="button" class="buttonDelete">delete</a>
                                    </span>
                                </td>
                            </tr>
                            @endforeach

                            <div>
                                {{$data->links()}}
                            </div>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
