@extends('admin.dashboard')
@section('admin')
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        @include('profile.partials.path')
        <!--end::Toolbar-->

        <!-- begin::ProfileOverview -->
        @include('profile.partials.profile_details')
        <!-- end::ProfileOverview -->


        <!-- begin::Edit -->
        @include('profile.partials.update-profile-information-form')
        <!-- end::Edit -->

        <!-- begin::Sign In Methods -->
        @include('profile.partials.sign-in-methods')
        <!-- end::Sign In Methods -->

        <!-- begin::Delete User -->
        @include('profile.partials.delete-user-form')
        <!-- end::Delete User -->

        @include('admin.components.footer')

    </div>
    <!--end::Content wrapper-->
</div>

@endsection

