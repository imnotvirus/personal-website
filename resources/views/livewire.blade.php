@extends('layouts.app')
@section('header')
@endsection
@section('content')
    <h1>livewire</h1>
    <div class="container">
        <div class="row">
            <livewire:contact.contact-create />
        </div>
    </div>
@endsection
