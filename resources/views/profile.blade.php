@extends('layouts.app')

@section('title', 'Profile')

@section('contents')

<h1 class="mb-0">Profile</h1>
<hr>

<form action="" enctype="multipart/form-data" id="profile_setup_frm" method="post">
    <div class="row">
        <div class="col-md-12 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Setting</h4>
                </div>
                <div class="row" id="res"></div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="" class="labels">Name</label>
                        <input type="text" name="name" id="" class="form-control" value="{{ auth()->user()->name  }}" placeholder="first name">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="labels">Email</label>
                        <input type="text" name="email" id="" class="form-control" value="{{ auth()->user()->email  }}" placeholder="first name">
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="" class="labels">Phone</label>
                        <input type="text" name="phone" id="" class="form-control" value="{{ auth()->user()->phone  }}" placeholder="first name">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="labels">Address</label>
                        <input type="text" name="address" id="" class="form-control" value="{{ auth()->user()->address  }}" placeholder="first name">
                    </div>
                </div>

                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-buton" id="btn" type="submit">Save Profile</button>
                </div>

            </div>
        </div>
    </div>

</form>


@endsection