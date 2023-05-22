@extends('layouts.admin')

@section('content')
<div class="d-flex justify-content-center">
    <table class="table-info table-bordered border-info w-75">
        <thead>
            <tr>
                <th scope="col" class="p-2">#</th>
                <th scope="col" class="p-2">Titolo</th>
                <th scope="col" class="p-2">Slug</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($works as $work)
            
            <tr>
                <th class="p-3">{{$work->id}}</th>
                <td class="p-3">{{$work->title}}</td>
                <td class="p-3">{{$work->slug}}</td>
            </tr>
            
            @endforeach
            
        </tbody>
    </table>
</div>

@endsection