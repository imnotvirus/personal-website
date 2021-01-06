@extends('layouts.app')
@section('header')
@endsection
@section('content')
    <h1>livewire</h1>
    <div class="container">
        <div class="row">
            <livewire:contact-create />
            <livewire:contact-create />
            <livewire:contact-create />
            <livewire:contact-create />
            <livewire:contact-create />
            <livewire:contact-create />
        </div>
    </div>

@endsection
