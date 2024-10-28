<x-layout>

<x-navbar />
<div class="container ">
    <div class="row mt-5">
        <div class="col-12 md-6 justify-caontent-center">
            <form class="rounded-3 shadow bg-secondary-subtle p-3"  method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data" >
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">inserisci nome</label>
                <input type="text" class="form-control" id="name" name="name">
                <label for="description" class="form-label">inserisci descrizione</label>
                <input type="text" class="form-control" id="description" name="description">
                <label for="didascalia" class="form-label">didascalia</label>
                <input type="description" class="form-control" id="didascalia" name="didascalia">
                <label for="img" class="form-label">immagine</label>
                <input type="file" class="form-control" id="img" name="img">

            </div>
            <button type="submit" class="btn btn-danger">Submit</button>
              </form>
        </div>
    </div>
</div>
</x-layout>
