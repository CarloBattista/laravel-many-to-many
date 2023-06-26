@extends('admin.dashboard')

@section('titlePage')
  Carlo Battista - Edit
@endsection

@section('content')
<nav class="navbar navbar-expand-md navbar-light shadow-sm">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <div class="logo_laravel">
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_2" data-name="Layer 2" viewBox="0 0 1726.28 343.87" style="width: 150px">
                    <defs>
                      <style>
                        .cls-1 {
                          fill: #ef3a2d;
                        }
                  
                        .cls-2 {
                          fill: #efefef;
                        }
                      </style>
                    </defs>
                    <g id="Layer_1-2" data-name="Layer 1">
                      <g>
                        <g>
                          <path class="cls-1" d="m11.66,62.54c7.77-13.62,18.38-24.23,31.83-31.83,13.45-7.6,28.53-11.41,45.24-11.41,19.55,0,36.68,5.01,51.39,15.04,14.7,10.03,24.98,23.9,30.83,41.61h-40.36c-4.01-8.35-9.65-14.62-16.92-18.8-7.27-4.17-15.67-6.27-25.19-6.27-10.19,0-19.26,2.38-27.2,7.14-7.94,4.76-14.12,11.49-18.55,20.18-4.43,8.69-6.64,18.89-6.64,30.58s2.21,21.68,6.64,30.46c4.43,8.77,10.61,15.54,18.55,20.3,7.94,4.76,17,7.14,27.2,7.14,9.52,0,17.92-2.13,25.19-6.39,7.27-4.26,12.91-10.57,16.92-18.92h40.36c-5.85,17.88-16.09,31.79-30.71,41.74-14.62,9.94-31.79,14.91-51.51,14.91-16.71,0-31.79-3.8-45.24-11.41-13.45-7.6-24.06-18.17-31.83-31.71C3.89,141.37,0,126,0,108.79s3.89-32.62,11.66-46.25Z"/>
                          <path class="cls-1" d="m200.4,89.24c5.6-10.86,13.2-19.21,22.81-25.07,9.61-5.85,20.34-8.77,32.21-8.77,10.36,0,19.43,2.09,27.2,6.27,7.77,4.18,13.99,9.44,18.67,15.79v-19.8h35.34v138.87h-35.34v-20.3c-4.51,6.52-10.74,11.91-18.67,16.17-7.94,4.26-17.09,6.39-27.45,6.39-11.7,0-22.35-3.01-31.96-9.02-9.61-6.02-17.21-14.5-22.81-25.44-5.6-10.94-8.4-23.52-8.4-37.72s2.8-26.48,8.4-37.35Zm95.88,15.92c-3.34-6.1-7.86-10.78-13.54-14.04-5.68-3.26-11.78-4.89-18.3-4.89s-12.53,1.59-18.05,4.76c-5.51,3.18-9.99,7.81-13.41,13.91-3.43,6.1-5.14,13.33-5.14,21.68s1.71,15.67,5.14,21.93c3.42,6.27,7.94,11.07,13.54,14.41,5.6,3.34,11.57,5.01,17.92,5.01s12.62-1.63,18.3-4.89c5.68-3.26,10.19-7.94,13.54-14.04,3.34-6.1,5.01-13.41,5.01-21.93s-1.67-15.83-5.01-21.93Z"/>
                          <path class="cls-1" d="m423.74,61.91c7.27-4.17,15.58-6.27,24.94-6.27v36.85h-9.27c-11.03,0-19.34,2.59-24.94,7.77-5.6,5.18-8.4,14.21-8.4,27.07v69.18h-35.09V57.65h35.09v21.56c4.51-7.35,10.4-13.12,17.67-17.3Z"/>
                          <path class="cls-1" d="m507.33,11.03v185.49h-35.09V11.03h35.09Z"/>
                          <path class="cls-1" d="m567.49,189.88c-10.7-5.93-19.09-14.33-25.19-25.19-6.1-10.86-9.15-23.39-9.15-37.6s3.13-26.73,9.4-37.6c6.27-10.86,14.83-19.26,25.69-25.19,10.86-5.93,22.97-8.9,36.35-8.9s25.48,2.97,36.35,8.9c10.86,5.93,19.43,14.33,25.69,25.19,6.27,10.86,9.4,23.4,9.4,37.6s-3.22,26.74-9.65,37.6c-6.44,10.86-15.13,19.26-26.07,25.19-10.95,5.93-23.19,8.9-36.72,8.9s-25.4-2.96-36.1-8.9Zm54.02-26.32c5.6-3.09,10.07-7.73,13.41-13.91,3.34-6.18,5.01-13.7,5.01-22.56,0-13.2-3.47-23.35-10.4-30.46-6.94-7.1-15.42-10.65-25.44-10.65s-18.42,3.55-25.19,10.65c-6.77,7.1-10.15,17.26-10.15,30.46s3.3,23.35,9.9,30.46c6.6,7.1,14.91,10.65,24.94,10.65,6.35,0,12.32-1.54,17.92-4.64Z"/>
                          <path class="cls-1" d="m885.07,121.57c6.35,8.02,9.52,17.21,9.52,27.57,0,9.36-2.3,17.59-6.89,24.69-4.6,7.1-11.24,12.66-19.93,16.67-8.69,4.01-18.97,6.02-30.83,6.02h-75.45V21.56h72.19c11.86,0,22.1,1.92,30.71,5.77,8.6,3.85,15.12,9.19,19.55,16.04,4.43,6.85,6.64,14.62,6.64,23.31,0,10.2-2.72,18.72-8.15,25.57-5.43,6.85-12.66,11.7-21.68,14.54,9.86,1.84,17.96,6.77,24.31,14.79Zm-88.48-27.82h32.08c8.35,0,14.79-1.88,19.3-5.64,4.51-3.76,6.77-9.15,6.77-16.17s-2.26-12.45-6.77-16.29c-4.51-3.84-10.95-5.76-19.3-5.76h-32.08v43.87Zm55.27,68.18c4.76-4.01,7.14-9.69,7.14-17.05s-2.51-13.41-7.52-17.67c-5.01-4.26-11.78-6.39-20.3-6.39h-34.59v47.12h35.34c8.52,0,15.17-2.01,19.93-6.02Z"/>
                          <path class="cls-1" d="m922.04,89.24c5.6-10.86,13.2-19.21,22.81-25.07,9.61-5.85,20.34-8.77,32.21-8.77,10.36,0,19.43,2.09,27.2,6.27,7.77,4.18,13.99,9.44,18.67,15.79v-19.8h35.34v138.87h-35.34v-20.3c-4.51,6.52-10.74,11.91-18.67,16.17-7.94,4.26-17.09,6.39-27.45,6.39-11.7,0-22.35-3.01-31.96-9.02-9.61-6.02-17.21-14.5-22.81-25.44-5.6-10.94-8.4-23.52-8.4-37.72s2.8-26.48,8.4-37.35Zm95.88,15.92c-3.34-6.1-7.86-10.78-13.54-14.04-5.68-3.26-11.78-4.89-18.3-4.89s-12.53,1.59-18.05,4.76c-5.51,3.18-9.99,7.81-13.41,13.91-3.43,6.1-5.14,13.33-5.14,21.68s1.71,15.67,5.14,21.93c3.42,6.27,7.94,11.07,13.54,14.41,5.6,3.34,11.57,5.01,17.92,5.01s12.62-1.63,18.3-4.89c5.68-3.26,10.19-7.94,13.54-14.04,3.34-6.1,5.01-13.41,5.01-21.93s-1.67-15.83-5.01-21.93Z"/>
                          <path class="cls-1" d="m1133.48,86.48v67.18c0,4.68,1.13,8.06,3.38,10.15,2.26,2.09,6.06,3.13,11.41,3.13h16.29v29.58h-22.06c-29.58,0-44.37-14.37-44.37-43.11v-66.93h-16.54v-28.83h16.54V23.31h35.34v34.34h31.08v28.83h-31.08Z"/>
                          <path class="cls-1" d="m1230.73,86.48v67.18c0,4.68,1.13,8.06,3.38,10.15,2.26,2.09,6.06,3.13,11.41,3.13h16.29v29.58h-22.06c-29.58,0-44.37-14.37-44.37-43.11v-66.93h-16.54v-28.83h16.54V23.31h35.34v34.34h31.08v28.83h-31.08Z"/>
                          <path class="cls-1" d="m1289.51,35.22c-4.1-3.92-6.14-8.81-6.14-14.66s2.04-10.74,6.14-14.66c4.09-3.92,9.23-5.89,15.42-5.89s11.32,1.97,15.42,5.89c4.09,3.93,6.14,8.82,6.14,14.66s-2.05,10.74-6.14,14.66c-4.1,3.93-9.24,5.89-15.42,5.89s-11.32-1.96-15.42-5.89Zm32.71,22.43v138.87h-35.09V57.65h35.09Z"/>
                          <path class="cls-1" d="m1379.37,192.63c-9.02-4.09-16.17-9.65-21.43-16.67s-8.15-14.79-8.65-23.31h35.34c.67,5.35,3.3,9.78,7.9,13.29,4.59,3.51,10.32,5.26,17.17,5.26s11.91-1.34,15.67-4.01c3.76-2.67,5.64-6.1,5.64-10.28,0-4.51-2.3-7.9-6.89-10.15-4.6-2.26-11.91-4.72-21.93-7.39-10.36-2.51-18.84-5.1-25.44-7.77-6.6-2.67-12.28-6.77-17.04-12.28-4.76-5.51-7.14-12.95-7.14-22.31,0-7.68,2.21-14.7,6.64-21.06,4.43-6.35,10.78-11.36,19.05-15.04,8.27-3.67,18-5.51,29.2-5.51,16.54,0,29.74,4.14,39.6,12.41,9.86,8.27,15.29,19.43,16.29,33.46h-33.59c-.5-5.51-2.8-9.9-6.89-13.16-4.1-3.26-9.57-4.89-16.42-4.89-6.35,0-11.24,1.17-14.66,3.51-3.43,2.34-5.14,5.6-5.14,9.78,0,4.68,2.34,8.23,7.02,10.65,4.68,2.42,11.95,4.89,21.81,7.39,10.03,2.51,18.3,5.1,24.82,7.77,6.52,2.68,12.16,6.81,16.92,12.41,4.76,5.6,7.23,13,7.39,22.18,0,8.02-2.22,15.21-6.64,21.56-4.43,6.35-10.78,11.32-19.05,14.92-8.27,3.59-17.92,5.39-28.95,5.39s-21.56-2.05-30.58-6.14Z"/>
                          <path class="cls-1" d="m1534.27,86.48v67.18c0,4.68,1.13,8.06,3.38,10.15,2.26,2.09,6.06,3.13,11.41,3.13h16.29v29.58h-22.06c-29.58,0-44.37-14.37-44.37-43.11v-66.93h-16.54v-28.83h16.54V23.31h35.34v34.34h31.08v28.83h-31.08Z"/>
                          <path class="cls-1" d="m1590.04,89.24c5.6-10.86,13.2-19.21,22.81-25.07,9.61-5.85,20.34-8.77,32.21-8.77,10.36,0,19.43,2.09,27.2,6.27,7.77,4.18,13.99,9.44,18.67,15.79v-19.8h35.34v138.87h-35.34v-20.3c-4.51,6.52-10.74,11.91-18.67,16.17-7.94,4.26-17.09,6.39-27.45,6.39-11.7,0-22.35-3.01-31.96-9.02-9.61-6.02-17.21-14.5-22.81-25.44-5.6-10.94-8.4-23.52-8.4-37.72s2.8-26.48,8.4-37.35Zm95.88,15.92c-3.34-6.1-7.86-10.78-13.54-14.04-5.68-3.26-11.78-4.89-18.3-4.89s-12.53,1.59-18.05,4.76c-5.51,3.18-9.99,7.81-13.41,13.91-3.43,6.1-5.14,13.33-5.14,21.68s1.71,15.67,5.14,21.93c3.42,6.27,7.94,11.07,13.54,14.41,5.6,3.34,11.57,5.01,17.92,5.01s12.62-1.63,18.3-4.89c5.68-3.26,10.19-7.94,13.54-14.04,3.34-6.1,5.01-13.41,5.01-21.93s-1.67-15.83-5.01-21.93Z"/>
                        </g>
                        <g>
                          <path class="cls-2" d="m63.75,290.24c-5.95,5.75-15.03,8.62-27.23,8.62h-20.1v43.65H2.78v-104.55h33.75c11.8,0,20.78,2.85,26.93,8.55s9.23,13.05,9.23,22.05-2.98,15.93-8.93,21.67Zm-10.42-7.57c3.6-3.3,5.4-8,5.4-14.1,0-12.9-7.4-19.35-22.2-19.35h-20.1v38.4h20.1c7.6,0,13.2-1.65,16.8-4.95Z"/>
                          <path class="cls-2" d="m104.55,338.62c-6.25-3.5-11.15-8.47-14.7-14.92-3.55-6.45-5.32-13.92-5.32-22.42s1.82-15.83,5.47-22.28c3.65-6.45,8.62-11.4,14.93-14.85,6.3-3.45,13.35-5.17,21.15-5.17s14.85,1.72,21.15,5.17c6.3,3.45,11.27,8.38,14.93,14.78,3.65,6.4,5.47,13.85,5.47,22.35s-1.88,15.97-5.62,22.42-8.83,11.43-15.22,14.92c-6.4,3.5-13.5,5.25-21.3,5.25s-14.68-1.75-20.92-5.25Zm34.73-10.2c4.3-2.3,7.77-5.75,10.42-10.35,2.65-4.6,3.98-10.2,3.98-16.8s-1.3-12.2-3.9-16.8c-2.6-4.6-6-8.03-10.2-10.28s-8.75-3.38-13.65-3.38-9.58,1.12-13.73,3.38c-4.15,2.25-7.48,5.68-9.98,10.28-2.5,4.6-3.75,10.2-3.75,16.8s1.22,12.35,3.68,16.95c2.45,4.6,5.72,8.02,9.82,10.27,4.1,2.25,8.6,3.38,13.5,3.38s9.5-1.15,13.8-3.45Z"/>
                          <path class="cls-2" d="m209.55,262.72c4.45-2.6,9.87-3.9,16.27-3.9v14.1h-3.6c-15.3,0-22.95,8.3-22.95,24.9v44.7h-13.65v-82.2h13.65v13.35c2.4-4.7,5.82-8.35,10.27-10.95Z"/>
                          <path class="cls-2" d="m258.22,271.57v48.45c0,4,.85,6.83,2.55,8.47,1.7,1.65,4.65,2.48,8.85,2.48h10.05v11.55h-12.3c-7.6,0-13.3-1.75-17.1-5.25-3.8-3.5-5.7-9.25-5.7-17.25v-48.45h-10.65v-11.25h10.65v-20.7h13.65v20.7h21.45v11.25h-21.45Z"/>
                          <path class="cls-2" d="m329.62,271.57h-17.25v70.95h-13.65v-70.95h-10.65v-11.25h10.65v-5.85c0-9.2,2.37-15.92,7.12-20.17,4.75-4.25,12.38-6.38,22.88-6.38v11.4c-6,0-10.23,1.18-12.68,3.53-2.45,2.35-3.67,6.22-3.67,11.62v5.85h17.25v11.25Z"/>
                          <path class="cls-2" d="m360.45,338.62c-6.25-3.5-11.15-8.47-14.7-14.92-3.55-6.45-5.32-13.92-5.32-22.42s1.82-15.83,5.47-22.28c3.65-6.45,8.62-11.4,14.93-14.85,6.3-3.45,13.35-5.17,21.15-5.17s14.85,1.72,21.15,5.17c6.3,3.45,11.27,8.38,14.93,14.78,3.65,6.4,5.47,13.85,5.47,22.35s-1.88,15.97-5.62,22.42-8.83,11.43-15.22,14.92c-6.4,3.5-13.5,5.25-21.3,5.25s-14.68-1.75-20.92-5.25Zm34.73-10.2c4.3-2.3,7.77-5.75,10.42-10.35,2.65-4.6,3.98-10.2,3.98-16.8s-1.3-12.2-3.9-16.8c-2.6-4.6-6-8.03-10.2-10.28s-8.75-3.38-13.65-3.38-9.58,1.12-13.73,3.38c-4.15,2.25-7.48,5.68-9.98,10.28-2.5,4.6-3.75,10.2-3.75,16.8s1.22,12.35,3.68,16.95c2.45,4.6,5.72,8.02,9.82,10.27,4.1,2.25,8.6,3.38,13.5,3.38s9.5-1.15,13.8-3.45Z"/>
                          <path class="cls-2" d="m455.17,231.52v111h-13.65v-111h13.65Z"/>
                          <path class="cls-2" d="m478.87,244.27c-1.8-1.8-2.7-4-2.7-6.6s.9-4.8,2.7-6.6,4-2.7,6.6-2.7,4.62.9,6.38,2.7c1.75,1.8,2.62,4,2.62,6.6s-.88,4.8-2.62,6.6c-1.75,1.8-3.88,2.7-6.38,2.7s-4.8-.9-6.6-2.7Zm13.2,16.05v82.2h-13.65v-82.2h13.65Z"/>
                          <path class="cls-2" d="m530.24,338.62c-6.25-3.5-11.15-8.47-14.7-14.92-3.55-6.45-5.32-13.92-5.32-22.42s1.82-15.83,5.47-22.28c3.65-6.45,8.62-11.4,14.93-14.85,6.3-3.45,13.35-5.17,21.15-5.17s14.85,1.72,21.15,5.17c6.3,3.45,11.27,8.38,14.93,14.78,3.65,6.4,5.47,13.85,5.47,22.35s-1.88,15.97-5.62,22.42-8.83,11.43-15.22,14.92c-6.4,3.5-13.5,5.25-21.3,5.25s-14.68-1.75-20.92-5.25Zm34.73-10.2c4.3-2.3,7.77-5.75,10.42-10.35,2.65-4.6,3.98-10.2,3.98-16.8s-1.3-12.2-3.9-16.8c-2.6-4.6-6-8.03-10.2-10.28s-8.75-3.38-13.65-3.38-9.58,1.12-13.73,3.38c-4.15,2.25-7.48,5.68-9.98,10.28-2.5,4.6-3.75,10.2-3.75,16.8s1.22,12.35,3.68,16.95c2.45,4.6,5.72,8.02,9.82,10.27,4.1,2.25,8.6,3.38,13.5,3.38s9.5-1.15,13.8-3.45Z"/>
                        </g>
                      </g>
                    </g>
                  </svg>
            </div>
            {{-- config('app.name', 'Laravel') --}}
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/') }}">{{ __('Home') }}</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.projects.index') }}">Projects</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('admin.projects.index') }}">{{__('Dashboard')}}</a>
                        <a class="dropdown-item" href="{{ url('admin/profile') }}">{{__('Profile')}}</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-5">
  <h2>Edit Project</h2>
  <div class="container-fluid mt-4">
    <form action="{{ route('admin.projects.update', $project)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Change title project" name="title_project" max="255" value="{{ $project->title_project }}">
            <label for="floatingInput">Title Project</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" readonly class="form-control-plaintext" id="floatingPlaintextInput" placeholder="Slug" name="slug" value="">
          <label for="floatingPlaintextInput">Slug automatic compilation</label>
        </div>
        <div class="form-floating mb-3">
          <textarea class="form-control" placeholder="Change description project" id="floatingTextarea2" name="description_project" style="height: 100px">{{ $project->description_project }}</textarea>
          <label for="floatingTextarea2">Description Project</label>
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Insert image file</label>
          <input class="form-control" type="file" id="formFile" name="project_image">
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Change client name" name="client" value="{{ $project->client }}">
            <label for="floatingInput">Client Name</label>
        </div>
        <div class="section d-flex gap-3">
          {{-- <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="type_id">
            <option value="">Select a type</option>
            @foreach ($types as $typeEl)
              <option value="{{ $typeEl->id }}" {{ old( 'type_id', $project->type_id ) == $typeEl->id ? 'selected' : '' }} >{{ $typeEl->name_type }}</option>
            @endforeach
          </select> --}}
          {{-- Per il momento non funziona la select, aggiungere delle technologie tramite phpmyadmin --}}
          {{-- <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="technology_id">
              <option value="">Select a technology</option>
              @foreach ($technology as $techEl)
                <option value="{{ $techEl->id }}" {{ old( 'technology_id', $project->technology_id ) == $typeEl->id ? 'selected' : '' }}>{{ $techEl->name_technology }}</option>
              @endforeach
          </select> --}}
        </div>
        @foreach ($technologies as $elem)
          <div class="form-check mb-3">
            @if ( $errors->any() )
              <input class="form-check-input" type="checkbox" name="technologies[]" value="{{ $elem->id }}" id="project-checkbox-{{ $elem->id }}" {{ in_array( $elem->id, old( 'technologies', [] ) ) ? 'checked' : '' }}>
              <label class="form-check-label" for="project-checkbox-{{ $elem->id }}">{{ $elem->name_technology }}</label>
            @else
              <input class="form-check-input" type="checkbox" name="technologies[]" value="{{ $elem->id }}" id="project-checkbox-{{ $elem->id }}" {{ ( $project->technologies->contains($elem) ) ? 'checked' : '' }}>
              <label class="form-check-label" for="project-checkbox-{{ $elem->id }}">{{ $elem->name_technology }}</label>
            @endif
          </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Edit project</button>
    </form>
  </div>
</div>

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function() {
    let formControl = document.getElementById('floatingInput');
        let formControlPlaintext = document.getElementById('floatingPlaintextInput');

        // Aggiungo i "-" tra le parole
        function generateSlug(value) {
          return value.trim().toLowerCase().replace(/\s+/g, '-');
        }

        formControl.addEventListener('input', function() {
          let inputValue = formControl.value;
          let slug = generateSlug(inputValue);
          formControlPlaintext.value = slug;
        });

        // Genera lo slug iniziale al caricamento della pagina
        let initialInputValue = formControl.value;
        let initialSlug = generateSlug(initialInputValue);
        formControlPlaintext.value = initialSlug;
    });
</script>
@endsection
