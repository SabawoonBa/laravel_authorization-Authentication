<div id="kt_app_toolbar" class="app-toolbar pt-7 pt-lg-10">
    <!--begin::Toolbar wrapper-->
    <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7">
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-700 fw-bold lh-1 mx-n1">
                    <a href="{{ url('/') }}" class="text-hover-primary">
                        <i class="ki-outline ki-home text-gray-700 fs-6"></i>
                    </a>
                </li>
                <!--end::Item-->

                <!-- Dynamic Breadcrumb Items based on the current route -->
                @php
                    $breadcrumbs = explode('/', request()->path());
                    $urlSoFar = '';
                @endphp

                @foreach($breadcrumbs as $breadcrumb)
                    @php
                        $urlSoFar .= '/' . $breadcrumb;
                    @endphp
                    <li class="breadcrumb-item">
                        <i class="ki-outline ki-right fs-7 text-gray-700"></i>
                    </li>
                    <li class="breadcrumb-item text-gray-700 fw-bold lh-1 mx-n1">
                        <a href="{{ url($urlSoFar) }}" class="text-hover-primary">{{ ucfirst($breadcrumb) }}</a>
                    </li>
                @endforeach
                <!--end::Dynamic Breadcrumb Items -->

            </ul>
            <!--end::Breadcrumb-->

            <!--begin::Title-->
            <h1 class="page-heading py-3 d-flex flex-column justify-content-center text-gray-900 fw-bolder fs-3 m-0">
                @php
                    $breadcrumbs = explode('/', request()->path());
                    $title = '';

                    foreach ($breadcrumbs as $breadcrumb) {
                        $title .= ucfirst($breadcrumb) . ' - ';
                    }

                    // Remove the trailing ' - ' from the title
                    $title = rtrim($title, ' - ');
                @endphp
                {{ $title }}
            </h1>
            <!--end::Title-->
        </div>
        <!--end::Page title-->
    </div>
    <!--end::Toolbar wrapper-->
</div>
