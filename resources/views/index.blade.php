@extends('templates.master')

@section('header')

    <header class="masthead" style="background-image: url({!! asset('assets/img/home-bg.jpg') !!})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                <h1>Info Beasiswa</h1>
                <span class="subheading">Informasi Beasiswa IPB</span>
                </div>
            </div>
            </div>
        </div>
    </header>
    
@endsection()

@section('content')

          <div class="post-preview">
            <a href="description">
              <h2 class="post-title">
                Man must explore, and this is exploration at its greatest
              </h2>
              <h3 class="post-subtitle">
                Problems look mighty small from 150 miles up
              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on September 24, 2018</p>
          </div>
          <hr>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>

@endsection()