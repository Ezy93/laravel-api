@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-wrap gap-5">
                @foreach ($categories as $category)

                    <div class="badge rounded-pills" style="background-color: {{$category->color}}">
                        {{$category->name}}
                    </div>

                @endforeach

            </div>
        </div>
    </div>
@endsection
