<x-layout>


{{-- <style>
        contact {
            font-family: Arial, sans-serif;
            background-color: #cfad3d;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;  

            border-radius: 5px;  

        }
        h1 {
            text-align: center;
            color: #333;
        }
        p {
            line-height: 1.5;
        }
    </style> --}}

    <div class="container">
        <h1>ciao {{ $username }}Grazie per esserti iscritto!</h1>
        <p>Siamo felici che tu ti sia unito a noi.
            <p>{{ $usermail }}</p>
            <p>{{ $usermessage }}</p>
        <br>
    </div>
</x-layout>
