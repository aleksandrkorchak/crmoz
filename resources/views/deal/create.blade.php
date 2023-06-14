@extends('layout.app')

@section('content')
    <create-deal
        :accounts="{{ $accounts }}"
        :stages="{{ $stages }}"
        :errors="{{ json_encode($errors->getMessages(), JSON_UNESCAPED_UNICODE) }}"
        :old="{{ json_encode(old(), JSON_UNESCAPED_UNICODE) }}"
    >
    </create-deal>
@endsection
