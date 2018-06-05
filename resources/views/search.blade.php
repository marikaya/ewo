@extends('layouts.app')

@section('content')
    <entry-lister>
        <h3>{{Session::get('keyword')}}</h3>

        <text-editor></text-editor>
    </entry-lister>
@endsection
