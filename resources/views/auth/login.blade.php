<x-layout>

    <p>register</p>

    <section class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
              @if($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{$error}}</li>
                  @endforeach
                </ul>
              </div>
              @endif

                <form action="{{ route('login') }}" method="POST" >
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{old('email')}}">

                      </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password">
                    </div>

    <div>

      <button type="submit" class="btn btn-primary">accedi</button>
      <p class="small mt-2">Non sei registrato? <a href="{{route('register')}}">clicca qui</a></p>
    </div>
                  </form>
            </div>
        </div>
    </section>
    </x-layout>
