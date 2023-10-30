@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    <div class="col-md-4">

      @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal">Please Login</h1>
            <form>
=======
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
    <div class="col-md-4">  
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
            <form>    
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            <small class="d-block-text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
=======
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419

              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
=======
>>>>>>> 78abd20b2e8759cedd8a2036f19c75fe53bdd419
          </main>
    </div>
</div>
@endsection