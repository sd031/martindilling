@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-12 headerimg">
        <div class="head">
            <div class="meta">
                <span class="title">{{ $post->title }}</span>
                <span class="date hidden-xs">{{ $post->publish_at }}</span>
                <span class="type hidden-xs">{{-- $post->user->getFullName() --}}</span>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 text">
        <section class="entry-content">
            {{ $post->body }}
        </section>
    </div>
</div>

@stop