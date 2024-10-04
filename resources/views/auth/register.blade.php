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

                <form action="{{ route('register') }}" method="POST" >
                    @csrf
                    <div class="mb-3">
                      <label for="username" class="form-label">Username</label>
                      <input type="text" name="name" class="form-control" id="username" value="{{old('name')}}">

                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{old('email')}}">

                      </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="userPasswordConfirmation" class="form-label">conferma Password </label>
                        <input type="password"  name="password_confirmation" class="form-control" id="password_confirmation">
                      </div>
    <div>

      <button type="submit" class="btn btn-primary">registrati</button>
      <p class="small mt-2">Già registrato? <a href="{{route('login')}}">clicca qui</a></p>
    </div>
                  </form>
            </div>
        </div>
    </section>
    </x-layout>
