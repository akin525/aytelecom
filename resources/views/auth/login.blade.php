<x-guest-layout>
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-xl-5 col-md-6">
                <div class="auth-form card">
                    <div class="card-body"> <div class="mini-logo text-center my-4">
                            <a href="{{route('login')}}"><img width="150" src="{{asset('ayy.jpeg')}}" alt=""></a>
                            <h4 class="card-title mt-5">Sign in to Aytelecom</h4>
                        </div>

                        @if (session('status'))
                            <div class="mb-4 font-medium alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <x-jet-validation-errors class="alert alert-danger" />
                        <form method="post" name="myform" class="signin_validate row g-3" action="{{ route('login') }}">
                            @csrf
                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="hello@example.com"
                                       name="email">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            <div class="col-6">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Remember
                                        me</label>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                <a href="#">Forgot Password?</a>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Sign in<span class="load loading"></span></button>
                                <script>
                                    const btns = document.querySelectorAll('button');
                                    btns.forEach((items)=>{
                                        items.addEventListener('click',(evt)=>{
                                            evt.target.classList.add('activeLoading');
                                        })
                                    })
                                </script>
                            </div>
                        </form>
                        <p class="mt-3 mb-0">Don't have an account? <a class="text-primary" href="{{route('register')}}">Sign
                                up</a></p>
                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>
</x-guest-layout>
