@extends('include.base')

@section('title','laravel')

@section('main')

	@guest
		<router-view></router-view>
	@endguest
@endsection