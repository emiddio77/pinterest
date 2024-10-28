<x-layout>

    <x-navbar />
   <h1>FOTOS si è bloccato ad 1.30 perchè non crea la cartella public in storage

   </h1>
   {{-- <table  class="table table-bordered" >

   <tr>
    <th scope="col">id</th>
    <th scope="col">name</th>
    <th scope="col">description</th>
    <th scope="col">didascalia</th>
  </tr>
</table> --}}
   @foreach ($photos as $photo)
   {{-- <table  class="table table-bordered" >
    <tbody>
      <tr  >
        <th scope="row">{{ $photo->id }}</th>
        <td>{{ $photo->name }}</td>
        <td>{{ $photo->description }}</td>
        <td>{{ $photo->didascalia}}</td>
      </tr>

    </tbody>
  </table> --}}
  <div class="container justify-content-center">
  <div class="row">
    <div class="col-12">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $photo->name }}</h5>
              <h5 class="card-title">{{ $photo->description }}</h5>
              <h5 class="card-title">{{ $photo->didascalia}}</h5>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div>
  </div>
</div>

  @endforeach
    </x-layout>
