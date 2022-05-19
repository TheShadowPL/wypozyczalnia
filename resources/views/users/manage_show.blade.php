<x-layout>
    <div>
        <a class="btn btn-primary fs-5 me-2 py-2 px-4" role="button" href="/users/manage">Dodaj Pracownika</a>

    </div>
    <h1>Lista Pracowników</h1>


    <head>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid rgb(221, 221, 221);
                text-align: left;
                padding: 8px;
            }

        </style>
    </head>
    <body>
    <table>
        <tr>
            <th>Dane</th>
            <th>Telefon</th>
            <th>Email</th>
            <th colspan="2"></th>
        </tr>

    @foreach($users as $users)


            <tr>
                <td><a href="#">{{ $users->name }}</a></td>
                <td>{{ $users->telefon }}</td>
                <td>{{ $users->email}}</td>
                <td><a class="btn btn-primary fs-5 me-2 py-2 px-4" role="button" href="/users/manage_edit/{{ $users->id }}">Edytuj Dane</a></td>
                <td>
                    @auth
                        <form method="POST" action="/users/manage_show/{{ $users->id }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger ms-md-2" type="submit">Usuń Pracownika</button>
                        </form>
                    @endauth
                </td>
            </tr>

    @endforeach
    </table>
    </body>
    </html>



</x-layout>
