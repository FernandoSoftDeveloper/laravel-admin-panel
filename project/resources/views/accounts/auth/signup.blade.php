@extends('././base/base')

@section('content')
    
    <main>

        <div class="container py-5 text-center">
            <h1>Login Account</h1>
            <p class="py-3">
                Enter your personal information.
            </p>
        </div>

        <div class="container py-5">

            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">

                    <form method="">

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="email" name="name" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Error message here!</div>
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="email" class="form-control" id="username" name="username" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Error message here!</div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Error message here!</div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                        
                        <button type="submit" class="btn btn-dark">Create</button>
                    </form>
                
                </div>
                <div class="col-4"></div>
            </div>

        </div>

    </main>

@endsection


