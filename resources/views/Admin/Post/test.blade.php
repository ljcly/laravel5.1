<!-- 渲染整个堆栈 -->
<head>
    <!-- Head Contents -->

    @stack('scripts')
</head>





@section('content')
    <p>This is my body content.</p>
@endsection

@component('Admin.Post.alert')

	@slot('title')
        拒绝
    @endslot

	The current UNIX timestamp is {{ date('Y-m-d') }}<br/>
	<strong>哇!</strong>出现了一些问题!
	<br/>

@endcomponent

@component('Admin.Post.alert')

	@slot('title')
        拒绝
    @endslot

	<h1>Laravel</h1>
	Hello, @{{ name }}

@endcomponent

@verbatim
	<div class="container">
		hello , {{ name }}
	</div>
@endverbatim

<br/>
<br/>
<br/>

@if (count($records) === 1)

 	我有一条记录
@elseif (count($records) > 1)
 	我有多条记录
@else 
	我没有任何记录
@endif

<br/>
<br/>
<br/>

@unless (Auth::check())
    你尚未登录。
@endunless

<!-- 堆栈 -->
@push('scripts')
    <script src="/example.js"></script>
@endpush

@inject('metrics', 'App\Http\Controllers\Controller\User')

<div>
    Monthly Revenue: {{ $metrics->monthlyRevenue() }}
</div><br/><br/><br/>

{{ __('passwords.password') }} <br/>
{{ __('test.TEST',['name'=>'liaojinchang廖金昌']) }}<br/>
{{ trans_choice('test.apples',10) }}<br/><br/><br/>

 <example>你好 vue</example>
 <br/><br/><br/>

@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>

    {{ isset($name) ? $name : 'Default' }}

    {{ $name or 'Default' }}
    <br/>
    Hello, {{$name}}
@endsection


