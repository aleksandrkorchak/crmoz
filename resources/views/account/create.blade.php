@extends('layout.app')

@section('content')
    <create-account
        :errors="{{ json_encode($errors->getMessages(), JSON_UNESCAPED_UNICODE) }}"
        :old="{{ json_encode(old(), JSON_UNESCAPED_UNICODE) }}"
    >
    </create-account>
@endsection
