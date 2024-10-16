
<x-layout>

    <x-navbar/>
    <h1>dettaglio    </h1>
    <div class="card" style="width: 18rem;">
        <img src="https://picsum.photos/200" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">dettagli</h5>
          <p class="card-text">{{ $friend['name'] }} </p>
          <a href="{{ route('about-us') }}" class="btn btn-primary">Torna a chi siamo</a>
        </div>
      </div>
    </x-layout>
