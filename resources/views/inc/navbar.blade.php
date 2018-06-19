<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            ATCO
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/posts">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                            <a class="nav-link" href="/services">Services</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="/posts">Blog</a>
                    </li>
                    </ul>
                    {{--  <ul class="nav navbar-nav nav-link navbar-right">
                        <li> <a href="/ymmce/create">Create Post</a></li>
                    </ul>  --}}

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
            
            </ul>
        </div>
    </div>
</nav>
