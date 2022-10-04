{{-- pushing the title of the page....................... --}}
@push('title')
    <title>User survey | Boostem</title>
@endpush
{{-- /pushing the title of the page....................... --}}


{{-- pushing the style components of the page...................... --}}
@push('child-style')
@endpush
{{-- /pushing the style components of the page...................... --}}


{{-- pushing the child-script components of the page...................... --}}
@push('child-script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
@endpush
{{-- /pushing the child-script components of the page...................... --}}


{{-- creating section and yielding content.......................... --}}
@extends('layouts/layout')
@section('content')
    @include('layouts/partials/survey_discription')
    <div class="user-survey">
        <div class="container">
            <div class="text-material">
                <h3>boostem is good</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quis dolor quasi. Quo fuga neque, hic tempora asperiores aspernatur odio sunt, eaque eum iusto maiores placeat explicabo, at maxime repellendus!</p>
                <br>
                <p>Lorem ipsum dolor sit.</p>
                <p>Lorem ipsum dolor sit.</p>
                <p>Lorem ipsum dolor sit.</p>
                <p>Lorem ipsum dolor sit.</p>
            </div>
            <div class="bottom-svg">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,96L34.3,85.3C68.6,75,137,53,206,48C274.3,43,343,53,411,90.7C480,128,549,192,617,224C685.7,256,754,256,823,218.7C891.4,181,960,107,1029,112C1097.1,117,1166,203,1234,240C1302.9,277,1371,267,1406,261.3L1440,256L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
            </div>
            <div class="frame">
                <div ng-app ng-init="checked = false">
                    <form class="form-signin" action="" method="post">

                        <label for="name">Name</label>
                        <input class="form-styling" type="text" name="name" placeholder="" />

                        <label for="email">Email</label>
                        <input class="form-styling" type="email" name="email" placeholder="" />

                        <label for="collage">Collage</label>
                        <input class="form-styling" type="text" name="collage" placeholder="" />
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores culpa quia ratione
                            soluta, possimus harum.</p>
                        <input type="checkbox" class="check" id="checkbox" />
                        <label for="checkbox"><span class="ui">
                            </span></label>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores culpa quia ratione
                            soluta, possimus harum.</p>
                        <input type="checkbox" class="check" id="checkbox2" />
                        <label for="checkbox2"><span class="ui">
                            </span></label>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. iores culpa quia ratione
                            soluta, possimus harum.</p>
                        <input type="checkbox" class="check" id="checkbox3" />
                        <label for="checkbox3"><span class="ui">
                            </span></label>

                        <div class="btn-animate">
                            <a class="btn-signin">Submit</a>
                        </div>
                    </form>
                </div>
            </div>

            <a id="refresh" value="Refresh" onClick="history.go()">
                <svg class="refreshicon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="25px"
                    viewBox="0 0 322.447 322.447" style="enable-background:new 0 0 322.447 322.447;" xml:space="preserve">
                    <path
                        d="M321.832,230.327c-2.133-6.565-9.184-10.154-15.75-8.025l-16.254,5.281C299.785,206.991,305,184.347,305,161.224
                          c0-84.089-68.41-152.5-152.5-152.5C68.411,8.724,0,77.135,0,161.224s68.411,152.5,152.5,152.5c6.903,0,12.5-5.597,12.5-12.5
                          c0-6.902-5.597-12.5-12.5-12.5c-70.304,0-127.5-57.195-127.5-127.5c0-70.304,57.196-127.5,127.5-127.5
                          c70.305,0,127.5,57.196,127.5,127.5c0,19.372-4.371,38.337-12.723,55.568l-5.553-17.096c-2.133-6.564-9.186-10.156-15.75-8.025
                          c-6.566,2.134-10.16,9.186-8.027,15.751l14.74,45.368c1.715,5.283,6.615,8.642,11.885,8.642c1.279,0,2.582-0.198,3.865-0.614
                          l45.369-14.738C320.371,243.946,323.965,236.895,321.832,230.327z" />
                </svg>
            </a>
        </div>
    </div>
@endsection
{{-- /creating section and yielding content.......................... --}}


{{-- pushing the writen-script components of the page...................... --}}
@push('writen-script')
@endpush
{{-- /pushing the writen-script components of the page...................... --}}
