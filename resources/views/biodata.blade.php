@extends('master')

@section('nama_title',$nama)
@section('nama_heading',$nama)
@section('bio',$bio)
@section('hobi')
@forelse ($hobby as $item)
    <li>
        {{$item}}
    </li>
@empty
    Tidak mempunyai hobby
@endforelse
@endsection