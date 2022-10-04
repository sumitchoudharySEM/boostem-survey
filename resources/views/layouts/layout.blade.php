<!DOCTYPE html>
<html lang="en">
<head>
    @stack('title')
    @include('layouts.partials.meta')
    @include('layouts.partials.style')
    @include('layouts.partials.script')
    @stack('child-style')
    @stack('child-script')
</head>
<body>
    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,96L34.3,117.3C68.6,139,137,181,206,186.7C274.3,192,343,160,411,133.3C480,107,549,85,617,117.3C685.7,149,754,235,823,229.3C891.4,224,960,128,1029,106.7C1097.1,85,1166,139,1234,133.3C1302.9,128,1371,64,1406,32L1440,0L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg> --}}
    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,128L60,112C120,96,240,64,360,80C480,96,600,160,720,197.3C840,235,960,245,1080,224C1200,203,1320,149,1380,122.7L1440,96L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg> --}}
    @yield('content')
    @stack('writen-script')
</body>
</html>