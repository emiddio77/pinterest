<x-layout>
    {{-- <h1>(Route::CurrentRouteName())</h1> --}}
    <x-navbar />

    <div class="row justify-content-center">
        <div class="class col-12 col-md-6">
            <form class="p-5 bg-primary shadow rounded">
                <div class="mb-3">
                    <label for="username" class="form-label">inserisci email</label>
                    <input type="text" class="form-control" id="username">
                </div>
                <div class="mb-3">
                    <textarea name="" id="message" class="form-control" cols="30" rows="10"></textarea>
                    <label for="message" class="form-label">scrivici</label>
                </div>
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
    </div>
</x-layout>
