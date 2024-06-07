@extends('layouts.main')

@section('content')
<section class="breadcrumb-wrapper">
    <div class="container">
        <div class="top">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb"><li class="breadcrumb-item"><a href="/">Beranda</a></li><li class="breadcrumb-item active" aria-current="page">Spare Parts</li></ol>            </nav>
        </div>
        <div class="bottom">
            <div class="pages-title">Purnajual</div>
        </div>
    </div>
</section>

<div class="separator-header"></div>
<div class="container">
    <div class="title mb-5">
        <div class="border-bottom-after">
            <h2>LAYANAN</h2>
            <h2 class="f-48 light line-1">Purnajual</h2>
        </div>
    </div>
    {!!$purnajual->content!!}
</div>

@endsection
