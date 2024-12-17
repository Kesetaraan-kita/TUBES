@extends('layouts.app') 

@section('content')
<style>
    body {
        background-color: #fdfdfd;
    }
    .banner {
        background-image: url('{{ asset('images/banner.jpg') }}'); /* Sesuaikan dengan lokasi gambar */
        background-size: cover;
        background-position: center;
        color: #fff;
        text-align: center;
        padding: 50px 20px;
    }
    .banner h1 {
        font-size: 2.5rem;
        font-weight: bold;
    }
    .events-list {
        margin-top: 30px;
    }
    .event-card {
        border: 1px solid #ddd;
        border-radius: 10px;
        margin-bottom: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 15px;
    }
    .event-card img {
        max-width: 100%;
        border-radius: 10px;
    }
    .featured-image {
        text-align: center;
        margin: 20px 0;
    }
    .featured-image img {
        max-width: 70%;
        border-radius: 10px;
    }
    .footer {
        background-color: #d32f2f;
        color: #fff;
        text-align: center;
        padding: 10px;
        margin-top: 40px;
    }
    .footer a {
        color: #fff;
        margin: 0 10px;
    }
</style>

<div class="banner">
    <h1>Inspirasikah Kami?</h1>
    <p>Ikuti beragam acara yang kami sediakan khusus Anda!</p>
</div>

<div class="featured-image">
    <img src="{{ asset('images/featured.jpg') }}" alt="Featured" /> <!-- Sesuaikan dengan lokasi gambar -->
</div>

<div class="container events-list">
    <h3 class="mb-4">Upcoming Events:</h3>

    <div class="event-card">
        <div class="row">
            <div class="col-md-3">
                <img src="{{ asset('images/event1.jpg') }}" alt="Event 1">
            </div>
            <div class="col-md-9">
                <h5>How to Become a Great Public Speaker, Aliyah</h5>
                <p><strong>Date:</strong> 20 August 2024</p>
                <p><strong>Location:</strong> St. Ave / Zoom</p>
            </div>
        </div>
    </div>

    <div class="event-card">
        <div class="row">
            <div class="col-md-3">
                <img src="{{ asset('images/event2.jpg') }}" alt="Event 2">
            </div>
            <div class="col-md-9">
                <h5>Mental Health is Important, Lef ey</h5>
                <p><strong>Date:</strong> 20 August 2024</p>
                <p><strong>Location:</strong> St. Ave / Zoom</p>
            </div>
        </div>
    </div>

    <div class="event-card">
        <div class="row">
            <div class="col-md-3">
                <img src="{{ asset('images/event3.jpg') }}" alt="Event 3">
            </div>
            <div class="col-md-9">
                <h5>Introvert but Innovative, Mikel Jekson</h5>
                <p><strong>Date:</strong> 20 August 2024</p>
                <p><strong>Location:</strong> St. Ave / Zoom</p>
            </div>
        </div>
    </div>
</div>


@endsection