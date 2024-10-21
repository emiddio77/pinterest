
<x-layout>

<x-navbar />
<h1>HOMEPAGE </h1>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
</x-layout>
