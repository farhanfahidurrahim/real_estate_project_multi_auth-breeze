@extends('backend.admin.dashboard')
@section('admin')
    <div class="page-content">

        {{-- <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Agent</li>
            </ol>
        </nav> --}}

        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Edit Property</h6>
                        <form method="POST" action="{{ route('property.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Property Name</label>
                                        <input type="text" name="property_name" value="{{ $data->property_name }}"
                                            class="form-control @error('property_name') is-invalid @enderror">
                                        @error('property_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Property Status</label>
                                        <select name="property_status" value="{{ old('property_status') }}"
                                            class="form-select @error('property_status') is-invalid @enderror"
                                            id="exampleFormControlSelect1">
                                            <option selected="" disabled="">Select Status</option>
                                            <option value="rent" {{ $data->property_status == 'rent' ? 'selected' : '' }}>
                                                rent</option>
                                            <option value="buy" {{ $data->property_status == 'buy' ? 'selected' : '' }}>
                                                buy</option>
                                        </select>
                                        @error('property_status')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Lowest Price</label>
                                        <input type="text" name="lowest_price" value="{{ $data->lowest_price }}"
                                            class="form-control @error('lowest_price') is-invalid @enderror">
                                        @error('lowest_price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Maximum Price</label>
                                        <input type="text" name="maximum_price" value="{{ $data->maximum_price }}"
                                            class="form-control @error('maximum_price') is-invalid @enderror">
                                        @error('maximum_price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Col -->
                            </div><!-- Row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Main Thumbnail</label>
                                        <input type="file" name="property_thumbnail"
                                            class="form-control @error('property_thumbnail') is-invalid @enderror"
                                            onChange="mainThumbUrl(this)">
                                        <img src="" id="mainThumb">
                                        @error('property_thumbnail')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Col -->
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Multiple Image</label>
                                        <input type="file" name="multi_img[]"
                                            class="form-control @error('multi_img') is-invalid @enderror" id="multiImg"
                                            multiple="">
                                        @error('multi_img')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <div class="row" id="preview_img"></div>
                                    </div>
                                </div>
                                <!-- Col -->
                            </div><!-- Row -->

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label class="form-label">Bedrooms</label>
                                        <input type="number" name="bedrooms" value="{{ $data->bedrooms }}"
                                            class="form-control @error('bedrooms') is-invalid @enderror">
                                        @error('bedrooms')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label class="form-label">Bathrooms</label>
                                        <input type="number" name="bathrooms" value="{{ $data->bathrooms }}"
                                            class="form-control @error('bathrooms') is-invalid @enderror">
                                        @error('bathrooms')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label class="form-label">Garage</label>
                                        <input type="number" name="garage" value="{{ $data->garage }}"
                                            class="form-control @error('garage') is-invalid @enderror">
                                        @error('garage')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label class="form-label">Garage Size</label>
                                        <input type="text" name="garage_size" value="{{ $data->garage_size }}"
                                            class="form-control @error('garage_size') is-invalid @enderror">
                                        @error('garage_size')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <input type="text" name="address" value="{{ $data->address }}"
                                            class="form-control @error('address') is-invalid @enderror">
                                        @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label class="form-label">City</label>
                                        <input type="text" name="city" value="{{ $data->city }}"
                                            class="form-control @error('city') is-invalid @enderror">
                                        @error('city')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label class="form-label">State</label>
                                        <input type="text" name="state" value="{{ $data->state }}"
                                            class="form-control @error('state') is-invalid @enderror">
                                        @error('state')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <label class="form-label">Post Code</label>
                                        <input type="number" name="postal_code" value="{{ $data->postal_code }}"
                                            class="form-control @error('postal_code') is-invalid @enderror">
                                        @error('postal_code')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Property Size</label>
                                        <input type="text" name="property_size" value="{{ $data->property_size }}"
                                            class="form-control @error('property_size') is-invalid @enderror">
                                        @error('property_size')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Property Video</label>
                                        <input type="text" name="property_video" value="{{ $data->property_video }}"
                                            class="form-control @error('property_video') is-invalid @enderror">
                                        @error('property_video')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Neighborhood</label>
                                        <input type="text" name="neighborhood" value="{{ $data->neighborhood }}"
                                            class="form-control @error('neighborhood') is-invalid @enderror">
                                        @error('neighborhood')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Latitude</label>
                                        <input type="text" name="latitude" value="{{ $data->latitude }}"
                                            class="form-control @error('latitude') is-invalid @enderror">
                                        @error('latitude')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <a href="https://www.latlong.net/convert-address-to-lat-long.html"
                                            target="_blank">Go here get Latitude from address</a>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Longitude</label>
                                        <input type="text" name="longitude" value="{{ $data->longitude }}"
                                            class="form-control @error('latitude') is-invalid @enderror">
                                        @error('longitude')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <a href="https://www.latlong.net/convert-address-to-lat-long.html"
                                            target="_blank">Go here get Longitude from address</a>
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Property Type</label>
                                        <select name="ptype_id"
                                            class="form-select @error('ptype_id') is-invalid @enderror"
                                            id="exampleFormControlSelect1">
                                            <option selected="" disabled="">Select Type</option>
                                            @foreach ($propertyType as $row)
                                                <option value="{{ $row->id }}" {{ $data->ptype_id == $row->id ? 'selected' : '' }}>{{ $row->type_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('ptype_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Property Amenities</label>
                                        <select name="amenities_id[]"
                                            class="js-example-basic-multiple form-select @error('amenities_id') is-invalid @enderror"
                                            multiple="multiple" data-width="100%">
                                            @foreach ($amenities as $row)
                                                <option value="{{ $row->id }}" {{ $data->amenities_id == $row->id ? 'selected' : '' }}>{{ $row->amenity_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('amenities_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Agent</label>
                                        <select name="agent_id"
                                            class="form-select @error('agent_id') is-invalid @enderror"
                                            id="exampleFormControlSelect1">
                                            <option selected="" disabled="">Select Agent</option>
                                            @foreach ($activeAgent as $row)
                                                <option value="{{ $row->id }}" {{ $data->agent_id == $row->id ? 'selected' : '' }}>{{ $row->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('agent_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label">Short Description</label>
                                        <textarea name="short_description" class="form-control @error('') is-invalid @enderror" id=""
                                            rows="3">{{ $data->short_description }}</textarea>
                                        @error('short_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label">Long Description</label>
                                        <textarea name="long_description" class="form-control @error('') is-invalid @enderror" id="tinymceExample"
                                            rows="6">{{ $data->long_description }}</textarea>
                                        @error('long_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label">Choose:</label>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="checkInline1">Feature
                                                Property</label>
                                            <input type="checkbox" name="featured" class="form-check-input"
                                                id="checkInline1" value="0">
                                            @error('featured')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="checkInline2">Hot Property</label>
                                            <input type="checkbox" name="hot" class="form-check-input"
                                                id="checkInline2" value="1">
                                            @error('hot')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <!--========== Facilities ==============-->
                            <div class="row">
                                <div class="row add_item">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="facility_name" class="form-label">Facilities </label>
                                            <select name="facility_name[]" id="facility_name" class="form-control">
                                                <option selected disabled>Select Facility</option>
                                                <option value="Hospital">Hospital</option>
                                                <option value="SuperMarket">Super Market</option>
                                                <option value="School">School</option>
                                                <option value="Entertainment">Entertainment</option>
                                                <option value="Pharmacy">Pharmacy</option>
                                                <option value="Airport">Airport</option>
                                                <option value="Railways">Railways</option>
                                                <option value="Bus Stop">Bus Stop</option>
                                                <option value="Beach">Beach</option>
                                                <option value="Mall">Mall</option>
                                                <option value="Bank">Bank</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="distance" class="form-label"> Distance </label>
                                            <input type="text" name="distance[]" id="distance" class="form-control"
                                                placeholder="Distance (Km)">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4" style="padding-top: 30px;">
                                        <a class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> Add
                                            More..</a>
                                    </div>
                                </div>
                            </div>
                            <!--========== Facilities Ajax ==============-->
                            <div style="visibility: hidden">
                                <div class="whole_extra_item_add" id="whole_extra_item_add">
                                    <div class="whole_extra_item_delete" id="whole_extra_item_delete">
                                        <div class="container mt-2">
                                            <div class="row">

                                                <div class="form-group col-md-4">
                                                    <label for="facility_name">Facilities</label>
                                                    <select name="facility_name[]" id="facility_name"
                                                        class="form-control">
                                                        <option value="">Select Facility</option>
                                                        <option value="Hospital">Hospital</option>
                                                        <option value="SuperMarket">Super Market</option>
                                                        <option value="School">School</option>
                                                        <option value="Entertainment">Entertainment</option>
                                                        <option value="Pharmacy">Pharmacy</option>
                                                        <option value="Airport">Airport</option>
                                                        <option value="Railways">Railways</option>
                                                        <option value="Bus Stop">Bus Stop</option>
                                                        <option value="Beach">Beach</option>
                                                        <option value="Mall">Mall</option>
                                                        <option value="Bank">Bank</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="distance">Distance</label>
                                                    <input type="text" name="distance[]" id="distance"
                                                        class="form-control" placeholder="Distance (Km)">
                                                </div>
                                                <div class="form-group col-md-4" style="padding-top: 20px">
                                                    <span class="btn btn-success btn-sm addeventmore"><i
                                                            class="fa fa-plus-circle">Add</i></span>
                                                    <span class="btn btn-danger btn-sm removeeventmore"><i
                                                            class="fa fa-minus-circle">Remove</i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary submit">Save...</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@section('script')
    {{-- Single Thumnail Image --}}
    <script>
        function mainThumbUrl(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#mainThumb').attr('src', e.target.result).width(80).height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <!------- Multiple Image Choose ------->
    <script>
        $(document).ready(function() {
            $('#multiImg').on('change', function() { //on file input change
                if (window.File && window.FileReader && window.FileList && window
                    .Blob) //check File API supported browser
                {
                    var data = $(this)[0].files; //this file data

                    $.each(data, function(index, file) { //loop though each file
                        if (/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file
                                .type)) { //check supported file type
                            var fRead = new FileReader(); //new filereader
                            fRead.onload = (function(file) { //trigger function on successful read
                                return function(e) {
                                    var img = $('<img/>').addClass('thumb').attr('src',
                                            e.target.result).width(100)
                                        .height(80); //create image element
                                    $('#preview_img').append(
                                        img); //append image to output element
                                };
                            })(file);
                            fRead.readAsDataURL(file); //URL representing the file's data.
                        }
                    });

                } else {
                    alert("Your browser doesn't support File API!"); //if File API is absent
                }
            });
        });
    </script>

    <!------- Facilities Ajax ------->
    <script>
        $(document).ready(function() {
            var counter = 0;
            $(document).on("click", ".addeventmore", function() {
                var whole_extra_item_add = $("#whole_extra_item_add").html();
                $(this).closest(".add_item").append(whole_extra_item_add);
                counter++;
            });
            $(document).on("click", ".removeeventmore", function(event) {
                $(this).closest("#whole_extra_item_delete").remove();
                counter -= 1
            });
        });
    </script>
@endsection
@endsection
