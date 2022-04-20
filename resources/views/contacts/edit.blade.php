<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edit</title>

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

            .button{
                padding: 10px;
                background-color: 
            }
            .buttonDelete{
                text-decoration: none;
                padding: 10px;
                background-color:brown;
                color:#000; 
            }
            .buttonBack{
                text-decoration: none;
                padding: 10px;
                background-color:aquamarine;
                color: #000; 
            }
           

        </style>
    </head>
    <body class="antialiased">
        <h2>Create</h2>
        <div class="container">
            <div class="main-container">
                <div class="container">
                    <div class="table">
                        <form class="table" method="POST" autocomplete="off">
                            @csrf
                            {{-- {{dd($data)}} --}}
                            <div class="form">
                                <div class="col">
                                    <label class="form-label"  for="nome">Name:</label><br/>
                                    <input class="form-control" type="text" value="{{$data->name}}" name="name" id="name"/>
                                </div>
                                <div class="col">
                                    <label class="form-label"  for="contacts">Contact:</label><br/>
                                    <input class="form-control" type="number" value="{{$data->contact}}" name="contact" id="contact"/>
                                </div>
                                <div class="col">
                                    <label class="form-label"  for="email">E-mail:</label><br/>
                                    <input class="form-control" type="email" value="{{$data->email}}" name="email" id="email"/>
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary" type="submit">Edit</button>
                                    <a type="button" class="btn btn-warning" href="{{url()->previous()}}">back</a>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
