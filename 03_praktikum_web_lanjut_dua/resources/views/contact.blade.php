@extends('layouts.template')

@section('title')
    Contact
@endsection

@section('content')
    
<body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <div class="page-h">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Contact</h3>
                </div>
            </div>
        </div>
    </div>
    <h4 class="text-center">Contact Us Through</h4>
    <table class="table">
        <thead>
            <tr>
                @foreach ($contact as $data)
                    <td>{{ $data->platform }} = </td>
                    <td><a href="{{ $data->link }}">Our {{ $data->platform }}</a><br></td>
                @endforeach
            </tr>
        </thead>
    </table>
    
    {{-- <div class="contact">
        <div class="container">
            <div class="row">
                {{-- <div class="col-md-7">
                    <div class="map-holder">
                        <div id="map_canvas" class="map-canvas" style="height: 360px;"></div>
                    </div>
                </div> --}}
                <div class="col-md-5">
                    {{-- <table class="table">
                        <thead>
                            <tr>
                                <td><h4>Contact Us Through</h4></td>
                                <td><h4>Link</h4></td>
                            </tr>
                            <tr>
                                <td>Facebook</td>
                                <td><a href="http://id-id.facebook.com">Our Facebook</a></td>
                            </tr>
                        </thead>
                    </table> --}}
                    {{-- <div class="row">
                        <form action="#" method="post">
                            <fieldset class="col-md-6">
                                <input type="text" name="name" placeholder="Name...">
                            </fieldset>
                            <fieldset class="col-md-6">
                                <input type="email" name="email" placeholder="Email...">
                            </fieldset>
                            <fieldset class="col-md-6">
                                <input type="text" name="phone" placeholder="Phone...">
                            </fieldset>
                            <fieldset class="col-md-6">
                                <input type="text" name="subject" placeholder="Subject...">
                            </fieldset>
                            <fieldset class="col-md-12">
                                <textarea name="message" id="message" rows="5" placeholder="Message..."></textarea>
                            </fieldset>
                            <fieldset class="col-md-12">
                                <button class="main-button">Send Message</button>
                            </fieldset>
                        </form>
                    </div> --}}
                </div>
            </div>
        </div>
    </div> --}}
@endsection


