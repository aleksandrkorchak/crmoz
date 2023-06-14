@extends('layout.app')

@section('content')
    <show-deals :deals="{{ $deals }}"></show-deals>
@endsection
