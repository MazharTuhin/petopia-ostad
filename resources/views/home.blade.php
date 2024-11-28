@extends('layouts.app')
@section('title', 'Home')

@section('section')
    @include('components.navbar')
    @include('components.hero-area')
    @include('components.explore-section')
    @include('components.how-to-section')
    @include('components.about-community-section')
    @include('components.donate-section')
    @include('components.newsletter-section')

<script>

    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    // add event listeners
    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });

</script>


@endsection
