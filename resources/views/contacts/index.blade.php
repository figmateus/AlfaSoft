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

    </style>
</head>

<body class="antialiased">
    <h2>Index</h2>
    <span>
        <a href="/Contacts/create">
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
                            <tr>
                                <td scope="row">1</td>
                                <td scope="row">Teste</td>
                                <td scope="row">991399048</td>
                                <td scope="row">teste@gmail.com</td>
                                <td scope="row">
                                    <span>
                                        <a href="#" role="button" class="button">edit</a>
                                    </span>
                                    <span>
                                        <a href="#" role="button" class="button">delete</a>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">1</td>
                                <td scope="row">Teste</td>
                                <td scope="row">991399048</td>
                                <td scope="row">teste@gmail.com</td>
                                <td scope="row">
                                    <span>
                                        <a href="#" role="button" class="button">edit</a>
                                    </span>
                                    <span>
                                        <a href="#" role="button" class="button">delete</a>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">1</td>
                                <td scope="row">Teste</td>
                                <td scope="row">991399048</td>
                                <td scope="row">teste@gmail.com</td>
                                <td scope="row">
                                    <span>
                                        <a href="#" role="button" class="button">edit</a>
                                    </span>
                                    <span>
                                        <a href="#" role="button" class="button">delete</a>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
