@extends('app')

@section('title', 'Profil')

@section('content')

<section class="organization-structure">
    <div class="container">
        <!-- Root -->
        <div class="level root">
            <div class="box">CV. SDN</div>
        </div>
        <!-- Director -->
        <div class="level">
            <div class="box">Direktur</div>
        </div>
        <!-- Komisaris dan CEO -->
        <div class="level">
            <div class="box">Komisaris</div>
            <div class="box">CEO</div>
        </div>
        <!-- Divisions -->
        <div class="level">
            <div class="box">Divisi Publisher</div>
            <div class="box">Divisi Journal</div>
            <div class="box">Application & Data Center</div>
            <div class="box">IT Development</div>
        </div>
    </div>
</section>
@endsection
