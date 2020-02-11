@extends('layout')
@section('page_css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="{{asset('css/users.css')}}">
@endsection
@section('middle_content')
<table id="users" class="display">
        <thead>
        <tr>
            <th>#</th>
            <th>{{__('Name')}}</th>
            <th>{{__('E-mail')}}</th>
            <th>{{__('Actions')}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $user->name}}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{route('edit_user',$user->id)}}"> <i class="material-icons">edit</i></a>
                    <a href="" class="delete" data-user="{{$user->id}}">
                        <i class="material-icons">clear</i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@section('page_js')
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script src="{{asset('js/users.js')}}" type="text/javascript"></script>
@endsection
@endsection
