@extends('website.layouts.template')
@section('content')
    @include('website.partials.home_page_section_1')
    @include('website.partials.home_page_section_2')
    @include('website.partials.home_page_section_3')
    @include('website.partials.home_page_section_4')
    <div class="text-center mb-100">
    	<a href="{{ route('instant_quote') }}" class="boxed_btn">{!! homepage('order_page_link_text') !!}</a>
    </div>
@endsection
