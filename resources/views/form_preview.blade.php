@extends('layouts.main')

@section('content')
    <style>
        label {
            color: white;
        }

        form div {
            text-align: left;
        }
    </style>
    <!-- About-->
    <section class="about-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-white mb-4">Tabang Form</h2>
                    <p class="text-white-50">
                        &quot;Hangga&apos;t maari ibigay ang impormasyong hinihingi. Sinisigurado namin na lahat ng
                        impormasyong ibibigay ay para lamang sa paghatid ng tulong at hindi ipamimigay o ipapamahagi
                        sa mga pribadong indibidwal o korporasyon.&quot;
                    </p>
                </div>
                <div class="col-lg-12 mx-auto">
                    <form class="row mb-5">
                        <div class="col-md-5 mt-2">
                            <label>Buong Pangalan</label>
                            <input name="fullname" value="{{ $data->fullname }}" class="form-control">
                        </div>
                        <div class="col-md-4 mt-2">
                            <label>Kasarian</label>
                            <select name="gender" class="form-control">
                                <option value="Female" {{ $data->gender != 'Female' ?'': 'selected' }}>Female</option>
                                <option value="Male" {{ $data->gender != 'Male' ?'': 'selected' }}>Male</option>
                            </select>
                        </div>
                        <div class="col-md-3 mt-2">
                            <label>Araw ng kapanganakan</label>
                            <input type="date" value="{{ $data->birth_date }}" name="birth_date" class="form-control">
                        </div>
                        <div class="col-md-4 mt-2">
                            <label>E-mail / Facebook</label>
                            <input name="email" class="form-control" value="{{ $data->email }}">
                        </div>
                        <div class="col-md-4 mt-2">
                            <label>Numerong pwedeng tawagan</label>
                            <input name="contact_no" class="form-control" value="{{ $data->contact_no }}">
                        </div>
                        <div class="col-md-4 mt-2">
                            <label>Ibang Numerong pwedeng tawagan</label>
                            <input name="contact_no_other" class="form-control" value="{{ $data->contact_no_other }}">
                        </div>
                        <div class="col-md-3 mt-2">
                            <label>Porbinsya</label>
                            <select name="province" class="form-control">
                                <option value="marinduque" {{ $data->province != 'marinduque' ?'': 'selected' }}>
                                    Marinduque
                                </option>
                                <option value="marikina" {{ $data->province != 'marikina' ?'': 'selected' }}>Marikina
                                </option>
                                <option
                                    value="cagayan province" {{ $data->province != 'cagayan province' ?'': 'selected' }}>
                                    Cagayan Province
                                </option>
                                <option
                                    value="isabela province" {{ $data->province != 'isabela province' ?'': 'selected' }}>
                                    Isabela Province
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4 mt-2">
                            <label>Tulong na kailangan</label>
                            <select name="assistance" class="form-control">
                                <option
                                    value="medical assistance" {{ $data->assistance != 'medical assistance' ?'': 'selected' }}>
                                    Medical Assitance
                                </option>
                                <option value="relief goods" {{ $data->assistance != 'relief goods' ?'': 'selected' }}>
                                    Relief Goods
                                </option>
                                <option value="emergency" {{ $data->assistance != 'emergency' ?'': 'selected' }}>
                                    Emergency
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4 mt-2">
                            <label>Baranggay / Zone</label>
                            <input name="zone" class="form-control" value="{{ $data->zone }}">
                        </div>
                        <div class="col-md-12 mt-2">
                            <label>Address</label>
                            <input name="address" class="form-control" value="{{ $data->address }}">
                        </div>
                        <div class="col-md-4 mt-2">
                            <label>Baranggay Captain Name</label>
                            <input name="brgy_cpt_name" class="form-control" value="{{ $data->brgy_cpt_name }}">
                        </div>
                        <div class="col-md-4 mt-2">
                            <label>Pangalan ng Mayor</label>
                            <input name="name_of_mayor" class="form-control" value="{{ $data->name_of_mayor }}">
                        </div>
                        <div class="col-md-12 mt-2">
                            <label>Salaysay</label>
                            <textarea name="salaysay" class="form-control" rows="8" cols="5">{{ $data->salaysay }}
                            </textarea>
                            <div class="form-group col-md-2">
                                <input class="form-control" name="actual_langitude" hidden>
                            </div>
                            <div class="form-group col-md-2">
                                <input class="form-control" name="actual_longitude" hidden>
                            </div>
                        </div>
                        <div class="col-md-12 row mt-4">
                            @if($data->image1)
                            <div class="form-group col-md-4">
                                <div class="form-group">
                                    <label>Image 1</label>
                                    <a href="{{ asset('complains-images/'. $data->image1) }}"
                                       target="_blank"
                                       class="bnt btn-link">View
                                        Link</a>
                                </div>
                            </div>
                            @endif
                            @if($data->image2)
                            <div class="form-group col-md-4">
                                <div class="form-group">
                                    <label>Image 2</label>
                                    <a href="{{ asset('complains-images/'. $data->image2) }}"
                                       target="_blank"
                                       class="bnt btn-link">View Link</a>
                                </div>
                            </div>
                            @endif
                            @if($data->image3)
                            <div class="form-group col-md-4">
                                <div class="form-group">
                                    <label>Image 3</label>
                                    <a href="{{ asset('complains-images/'. $data->image3) }}"
                                       target="_blank"
                                       class="bnt btn-link">View Link</a>
                                </div>
                            </div>
                            @endif
                        </div>
                        <button class="btn btn-block btn-info">
                            <i class="fa fa-print" onclick="window.print()"></i>
                            Print
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Map Section ======= -->
    <section class="map">
        <div id='map' style='width: 100%; height: 300px;'></div>
    </section><!-- End Map Section -->
@endsection

@section('scripts')
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet'/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(function () {
            mapboxgl.accessToken = 'pk.eyJ1IjoicmVuaWVyLXRyZW51ZWxhIiwiYSI6ImNrZHhya2l3aTE3OG0ycnBpOWxlYjV3czUifQ.4hVvT7_fiVshoSa9P3uAew';

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            }

            $('#cb-btn').on('click', function () {
                $('.loading').removeAttr('hidden', 'hidden');
            });

            function showPosition(position) {
                $('[name="actual_langitude"]').val({{ $data->actual_langitude }});
                $('[name="actual_longitude"]').val({{ $data->actual_longitude }});

                $('#cb-btn').removeAttr('disabled');

                $('.loading').attr('hidden', 'hidden');

                var map = new mapboxgl.Map({
                    container: 'map',
                    center: [position.coords.longitude, position.coords.latitude],
                    zoom: 15,
                    style: 'mapbox://styles/mapbox/satellite-streets-v10'
                });

                var marker = new mapboxgl.Marker()
                    .setLngLat([position.coords.longitude, position.coords.latitude])
                    .addTo(map);
            }

            function showError(error) {
                switch (error.code) {
                    case error.PERMISSION_DENIED:
                        swal.fire({
                            title: 'GPS Required (GPS ay kailangan)',
                            icon: 'info',
                            html:
                                'Please enable the GPS locator to continue<br>' +
                                '<i>Maari lamang buksan ang GPS upang magpatuloy</i>',
                            focusConfirm: false,
                            confirmButtonText:
                                'GPS has been enabled!<br><i>Bukas na ang GPS!</i>',
                            confirmButtonAriaLabel: 'Thumbs up, great!',
                        }).then((result) => {
                            /* Read more about isConfirmed, isDenied below */
                            {{--if (result.isConfirmed) {--}}
                            {{--    window.location = "{{ route('landing') }}"--}}
                            {{--}--}}
                        });
                        break;
                    case error.POSITION_UNAVAILABLE:
                        alert("Location information is unavailable.");
                        break;
                    case error.TIMEOUT:
                        alert("The request to get user location timed out.");
                        break;
                    case error.UNKNOWN_ERROR:
                        alert("An unknown error occurred.");
                        break;
                }
            }
        });
    </script>
@endsection
