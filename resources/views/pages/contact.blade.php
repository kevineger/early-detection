@extends('app')

@section('head')

    <script src="https://maps.googleapis.com/maps/api/js"></script>

@endsection

@section('content')
    <h1>Contact Us</h1>
    <div class="row">
        <div class="contact-info-container">
            <div class="col-lg-7">
                <div id="map-canvas"></div>
                <h2>BC Cancer Agency</h2>

                <h3>Center For the Southern Interior</h3>

                <p>399 Royal Ave</p>

                <p>Kelowna, BC V1Y 5L3</p>
                <br>
            </div>
            <div class="col-lg-5">
                {!! Form::open() !!}
                <div class="group">
                    <input class="material" name="name" type="text" required>
                    <span class="bar"></span>
                    <label class="material">Name</label>
                </div>

                <div class="group">
                    <input class="material" name="email" type="text" required>
                    <span class="bar"></span>
                    <label class="material">e-mail</label>
                </div>

                <div class="group">
                    <textarea class="material" name="message" type="text" rows="7" required></textarea>
                    <span class="bar"></span>
                    <label class="material">Message</label>
                </div>

                @if ($errors->any())
                    <ul class="alert alert-danger" style="list-style-type: none">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <div class="btn-group">
                    {!! Form::button('Send', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <hr/>
    <p class="subtitle">If you have any questions, comments or concerns regarding the <strong>Early Detection</strong>
        group, please feel free to leave us a message using the forms above.</p>
    <p class="subtitle">If you require immediate assistance, please call <strong>(250) 712-3966</strong> ext. <strong>6808</strong>
    </p>

@endsection

@section('footer')

    <script type="text/javascript">
        google.maps.event.addDomListener(window, 'load', initialize);
        var map = new google.maps.Map();
        function initialize() {
            var mapCanvas = document.getElementById('map-canvas');
            var myLatlng = new google.maps.LatLng(49.87441, -119.49424);
            var mapOptions = {
                center: myLatlng,
                zoom: 16,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scrollwheel: false
            };
            var map = new google.maps.Map(mapCanvas, mapOptions);
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: 'BCCA-CSI'
            });
            // Dynamically resize
            google.maps.event.trigger(map, 'resize');
        }
    </script>

@endsection