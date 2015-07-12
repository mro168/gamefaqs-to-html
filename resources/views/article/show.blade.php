@extends('layouts.master')

@section('title')
    <?=empty($title) ? "Laravel" : $title?>
@endsection

@section('content')
    <?=$content?>
@endsection
