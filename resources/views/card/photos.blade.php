<x-layout>

    <x-navbar />
   <h1>FOTOS</h1>
   <table  class="table table-bordered" >

   <tr>
    <th scope="col">id</th>
    <th scope="col">name</th>
    <th scope="col">description</th>
    <th scope="col">didascalia</th>
  </tr>
</table>
   @foreach ($photos as $photo)
   <table  class="table table-bordered" >
    <tbody>
      <tr  >
        <th scope="row">{{ $photo->id }}</th>
        <td>{{ $photo->name }}</td>
        <td>{{ $photo->description }}</td>
        <td>{{ $photo->didascalia}}</td>
      </tr>

    </tbody>
  </table>
   @endforeach
    </x-layout>
