@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center justify-center h-screen bg-gray-200">
        <link rel="stylesheet" href="{{ asset('styles.css') }}">

        <div class="text-center mb-4"> 
            @auth
                <p class="text-3xl">Welkom, {{ auth()->user()->name }}!</p>
            @else
                <p class="text-3xl">Welkom!</p>
            @endauth
        </div>

        <div class="kenteken-container">
            <div class="kenteken">
                <div class="inset">
                    <div class="blue"></div>
                    <input type="text" placeholder="XX-XX-XX" maxlength="8" oninput="formatLicensePlate(this)" />
                    <button class="go-button" onclick="handleGoClick()">GO!</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function formatLicensePlate(input) {
            // Remove non-alphanumeric characters
            let formattedText = input.value.replace(/[^A-Za-z0-9]/g, '');

            // Insert hyphens at the specified positions
            if (formattedText.length > 2) {
                formattedText = formattedText.slice(0, 2) + '-' + formattedText.slice(2);
            }
            if (formattedText.length > 5) {
                formattedText = formattedText.slice(0, 5) + '-' + formattedText.slice(5);
            }

            // Update the input value
            input.value = formattedText.toUpperCase();
        }

        function handleGoClick() {
            // Handle the Go button click event
            alert("Go button clicked!");
            // You can add more functionality here as needed
        }
    </script>
@endsection
