@extends('user.layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            @include('user.sveden.partials.sidebar')

            <!-- Main content -->
            <main class="col-md-8 ms-sm-auto col-lg-9 px-md-4">
                <div id="content-area">
                    <h1>Main Content Area</h1>
                    <p>This is the main content inside the container, with the sidebar located to the left.</p>
                    <p>Resize the window to see the responsive behavior of the layout.</p>
                </div>

            </main>
        </div>
    </div>

@endsection

<style>

    #content-area{
        background-color: #ffffff;
        padding: 15px;
        border-radius: 8px;
    }

</style>
