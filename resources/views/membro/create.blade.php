@extends("app")

@section("body")

    <form id="form" method="post" action="{{route('membro.store')}}">

        @csrf

        @include("membro.form") 
    </form>

@endsection