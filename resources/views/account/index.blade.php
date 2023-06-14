@extends('layout.app')

@section('content')
    <show-accounts :accounts="{{ $accounts }}"></show-accounts>
@endsection
