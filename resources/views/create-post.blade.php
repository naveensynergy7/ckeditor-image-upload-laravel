<!doctype html>
<html lang="en">

<head>
    <title> Create Post - CKEditor 4 Example </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<meta name="csrf-token" content="{{ csrf_token() }}" />
    {{-- CKEditor 4 CDN --}}
    <script src="/ckeditor/ckeditor.js"></script>
<style>
    #cke_18,#cke_27,#cke_28,#cke_31,#cke_38,#cke_39,#cke_64,#cke_71,#cke_75,#cke_78,#cke_80,#cke_83,#cke_88,#cke_91,.cke_toolbar_separator,[title~=Advanced]{
        display: none !important;
    }
    .cke_toolbar_break{
        display: inline-block !important;
    }
    .cke_toolgroup a.cke_button:last-child:after, .cke_toolgroup a.cke_button.cke_button_disabled:hover:last-child:after{
        border: none !important;
    }
</style>
</head>

<body>
    <div class="">
        <div class="row">
            <div class="col-xl-12 text-right">
                <a href="{{ route('posts') }}" class="btn btn-danger"> Back </a>
            </div>
        </div>

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xl-12 col-12 m-auto">

                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{ Session::get('success') }}
                        </div>
                    @elseif(Session::has('failed'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{ Session::get('failed') }}
                        </div>
                    @endif

                    <div class="card shadow">
                        <div class="card-body">
                            <div class="form-group">
                                <label> Title </label>
                                <input type="text" class="form-control" name="title" placeholder="Enter the Title">
                            </div>
                            <div class="form-group">
                                <label> Body </label>
                                <textarea class="form-control" id="description" placeholder="Enter the Description"
                                    name="description"></textarea>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success"> Save </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        CKEDITOR.replace('description', {
            filebrowserUploadUrl: "{{ route('posts.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
    
        })
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>