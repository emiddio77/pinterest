
<x-layout>

    <x-navbar />

    <h1>pagina chi siamo </h1>
    <div class="container-fluid bg-background">

    <div class="row justify-content-cetenter align-items-center height-custom">
        @foreach ($friends as $friend )

            <div class="card mx-auto" style="width: 18rem;">
                <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"> {{ $friend['name'] }}</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="{{ route('details',['name' => $friend['name']])}}" class="btn btn-primary">Go somewhere</a>

              </div>

        </div>
        @endforeach
    </div>

    </div>

</x-layout>
