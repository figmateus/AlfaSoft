<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
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
                                    <label for="nome">Name:</label><br/>
                                    <input class="field" type="text" value="{{$data->name}}" name="name" id="name"/>
                                </div>
                                <div class="col">
                                    <label for="contacts">Contact:</label><br/>
                                    <input class="field" type="number" value="{{$data->contact}}" name="contact" id="contact"/>
                                </div>
                                <div class="col">
                                    <label for="email">E-mail:</label><br/>
                                    <input class="field" type="email" value="{{$data->email}}" name="email" id="email"/>
                                </div>
                                <div class="col">
                                    <button type="submit">Edit</button>
                                    <a  href="{{route('Contacts.index')}}"><button>back<button/></a>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
