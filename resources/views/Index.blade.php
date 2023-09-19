@extends('Navbar')

@section('contant')
<!-- home page ............................................................................. -->
<link rel="stylesheet" href="app.css">

<section class="home" id="home">
    <div class='home-title'>
        <div class='the-best'>
            <div></div>
            <span>
                Best Website For Your Future Life
            </span>
        </div>
        <div class='home-text'>
            <span class='span-text1'>Chose</span>
            <span class='span-text2'> The Best Hotel</span>
            <span class='span-text3'>For Your wedding</span>
        </div>
        <div class='desc'>
            In This website You can Find The Best Place For Your wedding ceremony.
        </div>
    </div>
</section>

<!-- search page ............................................................................... -->

<div class='search' id='search'>
    <div class='left-h'>
        <div class="search-box">
            <h3>Search Your Favirate Hall</h3>
            <div class="input-group ps-5">
                <div class="search-item" id="navbar-search-autocomplete" class="form-outline">
                    <input type="search" id="form1" class="form-control" placeholder="search a city"/>
                    <button type="button" class="btn btn-primary mt-4">Search</button>
                </div>
            </div>
        </div>
    </div>
    <div class='right-h'>
        <div class='img'>
            <img src="{{URL('images/hotel1.jpg')}}" alt="Hotel1 Image">
            <img src="{{URL('images/hotel2.jpg')}}" alt='Hotel2 Image' />
            <img src="{{URL('images/hotel3.jpg')}}" alt='Hotel3 Image' />
            <img src="{{URL('images/hotel4.jpg')}}" alt='Hotel4 Image' />
            <img src="{{URL('images/hotel5.jpg')}}" alt='Hotel5 Image' />
            <img src="{{URL('images/hotel6.jpg')}}" alt='Hotel6 Image' />
            <img src="{{URL('images/hotel7.jpg')}}" alt='Hotel7 Image' />
            <img src="{{URL('images/hotel8.jpg')}}" alt='Hotel8 Image' />
            <img src="{{URL('images/hotel9.jpg')}}" alt='Hotel9 Image' />
        </div>
    </div>
</div>

<!-- contact page ................................................................................... -->

<div class='contact' id="contact">
    <div class='left'>
        <img src="{{URL('images/map.png')}}" />
    </div>
    <div class='right'>
        <form>
            <div class="form-control p-4">
                <label class="form-label" for="name-input">Your Name</label>
                <input class="form-control" type='text'></input>
                <label class="form-label mt-3" for="email-input">Email</label>
                <input class="form-control" type='text'></input>
                <label class="form-label mt-3" for="message-area">Message</label>
                <textarea class="form-control" name="message" id="mess" cols="60" rows="5"></textarea>
                <button class="btn btn-primary btn-lg mt-3">Send</button>
            </div>
        </form>
    </div>
</div>
@endsection