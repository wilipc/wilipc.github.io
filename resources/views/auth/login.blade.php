@section('title', 'Login')
<x-guest-layout>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-6 bg-white">
            <div class="mov-center">
            <img src="{{asset('/img/logo02.png')}}" alt="" style="width:150px;">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2">

                <div class="p-2 mod-inv">

                    <div class="flex items-center">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            <img src="{{asset ('/img/post.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="p-12 pad-1 pt-1 pb-1">
                    <div class="p-12 pad-2 pt-1">
                        <div class="flex items-center justify-center ">
                            <img src="{{asset ('/img/loguser.png')}}" alt="">
                        </div>
                        <div class="ml-1">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                <x-jet-validation-errors class="mb-4" />
                                @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="input-group mb-3 mt-1 bg-primary rounded-pill border-3">
                                        <input type="text" class="form-control radiusinic"  placeholder="Correo Electrónico" aria-label="Recipient's username" aria-describedby="basic-addon2" name="email" required autocomplete="current-email" >
                                        <div class="radiusfin bluecol " style="width:50px">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="35" fill="currentColor" class="bi bi-person-fill margin-svg oragecol" viewBox="0 0 16 16">
                                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        </svg>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3 mt-1 bg-primary rounded-pill border-3">
                                        <input type="password" class="form-control radiusinic"  placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon2" name="password" required autocomplete="current-password" >
                                        <div class="radiusfin bluecol " style="width:50px">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="30" fill="currentColor" class="bi bi-shield-lock-fill margin-svg  oragecol " viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="block mt-4">
                                        <label class="flex items-center">
                                            <input type="checkbox" class="form-checkbox" name="remember">
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center justify-center mt-4 text-center">
                                        <button type="submit" class="col-12 btn text-light rounded-pill border-3" style="background-color:#060852; background:#060852;">
                                        {{ __('Ingresar') }}
                                        </button>
                                    </div>
                                    <br>
                                    <div class="row text-center">
                                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                    </div>
                                    <h3 class="text-warning">ó</h3>
                                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                    </div>
                                </div>
                                <button onclick="window.location.href='{{ url('auth/google') }}'" class="input-group flex items-center rounded-pill border-primary border-3 btn justify-center mt-4 text-center" type="">
                                    <div class=" radiusfin ">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" height="30px">
                                            <path style="fill:#167EE6;" d="M492.668,211.489l-208.84-0.01c-9.222,0-16.697,7.474-16.697,16.696v66.715c0,9.22,7.475,16.696,16.696,16.696h117.606c-12.878,33.421-36.914,61.41-67.58,79.194L384,477.589c80.442-46.523,128-128.152,128-219.53c0-13.011-0.959-22.312-2.877-32.785C507.665,217.317,500.757,211.489,492.668,211.489z"/>
                                            <path style="fill:#12B347;" d="M256,411.826c-57.554,0-107.798-31.446-134.783-77.979l-86.806,50.034C78.586,460.443,161.34,512,256,512c46.437,0,90.254-12.503,128-34.292v-0.119l-50.147-86.81C310.915,404.083,284.371,411.826,256,411.826z"/>
                                            <path style="fill:#0F993E;" d="M384,477.708v-0.119l-50.147-86.81c-22.938,13.303-49.48,21.047-77.853,21.047V512C302.437,512,346.256,499.497,384,477.708z"/>
                                            <path style="fill:#FFD500;" d="M100.174,256c0-28.369,7.742-54.91,21.043-77.847l-86.806-50.034C12.502,165.746,0,209.444,0,256s12.502,90.254,34.411,127.881l86.806-50.034C107.916,310.91,100.174,284.369,100.174,256z"/>
                                            <path style="fill:#FF4B26;" d="M256,100.174c37.531,0,72.005,13.336,98.932,35.519c6.643,5.472,16.298,5.077,22.383-1.008l47.27-47.27c6.904-6.904,6.412-18.205-0.963-24.603C378.507,23.673,319.807,0,256,0C161.34,0,78.586,51.557,34.411,128.119l86.806,50.034C148.202,131.62,198.446,100.174,256,100.174z"/>
                                            <path style="fill:#D93F21;" d="M354.932,135.693c6.643,5.472,16.299,5.077,22.383-1.008l47.27-47.27c6.903-6.904,6.411-18.205-0.963-24.603C378.507,23.672,319.807,0,256,0v100.174C293.53,100.174,328.005,113.51,354.932,135.693z"/>
                                        </svg>
                                    </div>
                                    <span class="pl-4 ">Ingrese por su cuenta google</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-guest-layout>
