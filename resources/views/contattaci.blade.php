<x-layout>
    {{-- <h1>(Route::CurrentRouteName())</h1> --}}
    <x-navbar />

    <div class="row justify-content-center mt-5">
        <div class="class col-12 col-md-6">
            <form class="p-5 bg-primary shadow rounded" method="POST" action="{{ route('contact.submit') }}">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">inserisci nome</label>
                    <input type="text" class="form-control" id="username" name="username">
                    <label for="mail" class="form-label">inserisci email</label>
                    <input type="mail" class="form-control" id="mail" name="mail">
                    <div class="mb-3">
                        <textarea name="message" id="message" class="form-control" cols="30" rows="10"></textarea>
                        <label for="message" class="form-label">scrivici</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
    </div>
</x-layout>
