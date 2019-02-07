@extends('master')

@section('content')
@if($amount>=200000)
    <div class="featured-w3l">
                <div class="container">
                    <h3 class="tittle1">calculate money</h3>
                    <div class="feature-grids">
                        <div class="col-md-4 fer-grid">
                            <div class="icons">
                                <i class="glyphicon glyphicon-home" aria-hidden="true"></i>
                            </div>
                                <h4>{{$amount*.25}}taka per year</h4>
                                <p>If you spend 25%</p>
                        </div>
                        <div class="col-md-4 fer-grid">
                            <div class="icons">
                                <i class="glyphicon glyphicon-signal" aria-hidden="true"></i>
                            </div>
                           <h4>{{$amount*.30}} taka per year</h4>
                                <p>If you spend 30%</p>
                        </div>
                        <div class="col-md-4 fer-grid">
                            <div class="icons">
                                <i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
                            </div>
                                <h4>{{$amount*.35}} taka per year</h4>
                                <p>If you spend 35%</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="feature-grids">
                        <div class="col-md-4 fer-grid">
                            <div class="icons">
                                <i class="glyphicon glyphicon-globe" aria-hidden="true"></i>
                            </div>
                               <h4>{{$amount*.40}} taka per year</h4>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore oluptate velit es pariatur.Quis autem vel eum iure reprehenderit qui.</p>
                        </div>
                        <div class="col-md-4 fer-grid">
                            <div class="icons">
                                <i class="glyphicon glyphicon-signal" aria-hidden="true"></i>
                            </div>
                            <h4>{{$amount*.45}} taka per year</h4>
                                <p>If you spend 45%</p>
                        </div>
                        <div class="col-md-4 fer-grid">
                            <div class="icons">
                                <i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
                            </div>
                               <h4>{{$amount*.50}} taka per year</h4>
                                <p>If you spend 50%</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            @endif
@endsection