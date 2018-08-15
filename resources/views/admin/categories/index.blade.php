@extends('admin.layouts.app')
@section("content")
    <div class="block-header">
        <h2>Categories</h2>

    </div>
    <div class="row">
        @foreach($categories as $category)
            {{--<li>{{$category->title}}</li>--}}
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header bg-light-green">
                        <h2>
                            {{$category->title}}
                            <small>Description text here...</small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li>
                                <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="timer"
                                   data-loading-color="lightBlue">
                                    <i class="material-icons">loop</i>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Afficher</a></li>
                                    <li><a href="javascript:void(0);">Modifier</a></li>
                                    <li><a href="javascript:void(0);">Supprimer</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        {{$category->description}}
                    </div>
                </div>
            </div>
        @endforeach

        <a href="{{route('admin.categories.create')}}" style="cursor: pointer">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header bg-light-green">
                        <h2>
                            Add new category
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li>
                                <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="timer"
                                   data-loading-color="lightBlue">
                                    <i class="material-icons">loop</i>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <i class="material-icons">add_box</i>
                    </div>
                </div>
            </div>
        </a>
    </div>

@endsection
