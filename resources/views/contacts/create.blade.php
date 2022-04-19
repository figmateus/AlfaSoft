<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            .form {
                width: 500px;
                height: 500px;
            }

            .form .col {
                margin: 10px;
            }

            .form .field{
                padding: 5px;
                width: 300px;
            }



        </style>
    </head>
    <body class="antialiased">
        <h2>Create</h2>
        <div class="container">
            <div class="main-container">
                <div class="container">
                    <div class="table">
                        <form class="table" method="POST" action="{{ route('Contacts.store') }}" autocomplete="off">
                            @csrf
                            <div class="form">
                                <div class="col">
                                    <label for="nome">Name:</label><br/>
                                    <input class="field" type="text" name="name" id="name"/>
                                </div>
                                <div class="col">
                                    <label for="contacts">Contact:</label><br/>
                                    <input class="field" type="number" name="contacts" id="contacts"/>
                                </div>
                                <div class="col">
                                    <label for="email">E-mail:</label><br/>
                                    <input class="field" type="email" name="email" id="email"/>
                                </div>
                                <div class="col">
                                    <button type="submit">Create</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
