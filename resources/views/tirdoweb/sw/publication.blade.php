@extends('tirdoweb.sw.base_layout')
        <!-- /HEADER -->

        <!-- contents -->
@section('content')
        <!-- contents -->
<div class="container px-0">
    <div class="col-12 special-page">
        <div class="col-12 p-4">
            <div class="row">
                <div class="col-12 px-xs-0">
                    <nav aria-label="breadcrumb" class="mb-0">
                        <ol class="breadcrumb px-0">
                                                        <li class="breadcrumb-item "><a href="{{ route('home', ['language' => $current_language]) }}"><span class="fas fa-home"></span></a></li>
                          <li class="breadcrumb-item list-inline-item font-weight-bold">Hati za TIRDO</li>
                          <li class="breadcrumb-item list-inline-item active">Machapisho</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">

                <div class="col-md-9 bg-white py-3 page-content">
                    <h1 class="article-h2">Machapisho</h1>
                    @foreach ($publication_items as $file)
                        <ul class="list-unstyled text-dark">
                            <li>
                                <a href="{{ asset('storage/'.$file->file) }}" target="_blank" class="link-no-underline">
                                    <span class="icon"><i class="fas fa-file-pdf"></i></span>
                                    <span class="text text-dark">
                                        {{ $file->name }}<br>
                                        <small class="text-muted">
                                            {{ $file->date }}
                                        </small>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <strong>{{ $error }}</strong>
                                @endforeach
                            </div>
                        @endif
                    @endforeach


                   <div class="row justify-content-center mt-2">
                    <a href="{% url 'mypublish:all_publish' language=current_language %}" class="link-no-underline"> <i>Tazama Zote <i class="far fa-arrow-alt-circle-right"></i></i></a>
                </div>
                </div>

                @include('tirdoweb.sw.newsection')

                </div>
            </div>
        </div>

    </div>

<!-- /contents -->
@endsection
