@extends('tpl-page')

@include('wiki.header')

@section('content')

    <div class="page-container">
        <div class="row wiki-box">

            @php
                $mediaStore = config('mediastore.name');
            @endphp

            @foreach($projects as $project)
                <div class="col-sm-3">
                    <a class="wiki-doc-container">
                        <img class="wiki-doc-img" src="{{$mediaStore.'/'.$project->thumb}}">
                        <div class="wiki-doc-detail-content">
                            <h4 class="wiki-doc-title">{{$project->name}}</h4>
                            <p class="wiki-doc-count">文档总数：{{$project->doc_count}}</p>
                            <p class="wiki-doc-desc">{{$project->description}}</p>
                        </div>
                    </a>
                </div>

            @endforeach
        </div>
    </div>
@endsection
