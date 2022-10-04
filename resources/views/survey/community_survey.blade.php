{{-- pushing the title of the page....................... --}}
@push('title')
    <title>Community Survey | Boostem</title>
@endpush
{{-- /pushing the title of the page....................... --}}


{{-- pushing the style components of the page...................... --}}
@push('child-style')
@endpush
{{-- /pushing the style components of the page...................... --}}


{{-- pushing the child-script components of the page...................... --}}
@push('child-script')
@endpush
{{-- /pushing the child-script components of the page...................... --}}


{{-- creating section and yielding content.......................... --}}
@extends('layouts/layout')
@section('content')
community survey
@endsection
{{-- /creating section and yielding content.......................... --}}


{{-- pushing the writen-script components of the page...................... --}}
@push('writen-script')
@endpush
{{-- /pushing the writen-script components of the page...................... --}}