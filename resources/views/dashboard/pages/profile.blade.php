@extends('dashboard.layouts.main')
@section('content')

<style>
    /* Content area perfectly centered */
    .page-wrapper .content {
        display: flex;
        justify-content: center;
        width: 100%;
        padding: 30px 20px;
    }

    /* Main profile card */
    .profile-card {
        width: 100%;
        max-width: 850px;
        background: #fff;
        border-radius: 14px;
        padding: 30px;
        box-shadow: 0 4px 14px rgba(0,0,0,0.08);
    }

    /* Profile content center */
    .profile-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 20px;
    }

    /* Profile Image */
    .profile-contentimg img {
        width: 130px;
        height: 130px;
        border-radius: 50%;
        object-fit: cover;
        box-shadow: 0 0 0 3px #e5e5e5;
    }

    @media (max-width: 768px) {
        .profile-card {
            max-width: 95%;
        }
    }
    .btn-update{
        display: flex;
        justify-content: flex-end;
        margin-left: auto;
    }
</style>


<div class="page-wrapper">
    <div class="content">

        <div class="profile-card" style="margin-left: 279px;">

            <!-- Profile Header -->
            <div class="profile-content">

                {{-- Profile Image --}}
                <div class="profile-contentimg">
                    <img src="{{ asset($admin->image) }}" alt="img" id="previewImage">
                </div>

                <h2 class="mt-3 mb-0">{{ $admin->fname }}</h2>
                <small>Update your profile details</small>

            </div>

            <!-- Form -->
            <form action="{{ route('updateProfile') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label">First Name</label>
                        <input type="text" name="fname" class="form-control" value="{{ $admin->fname }}">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="lname" class="form-control" value="{{ $admin->lname }}">
                    </div>

                    <div class="col-md-6">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $admin->email }}">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control" value="{{ $admin->phone }}">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Image</label>
                        <input type="file" id="imageInput" name="image" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">
                            Password
                            <small class="d-block">(Leave blank to keep old password)</small>
                        </label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="col-12 mt-3 btn-update">
                        <button type="submit" class="btn btn-primary rounded-pill">Update Profile</button>
                    </div>

                </div>

            </form>
        </div>

    </div>
</div>


{{-- IMAGE PREVIEW SCRIPT --}}
<script>
    document.getElementById("imageInput").addEventListener("change", function(event) {
        let reader = new FileReader();

        reader.onload = function(e) {
            document.getElementById("previewImage").src = e.target.result;
        };

        reader.readAsDataURL(event.target.files[0]);
    });
</script>

@endsection
