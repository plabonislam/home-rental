



@extends('master')

@section('content')

    <div class="featured-w3l">
                <div class="container">
                    <h3 class="tittle1">calculate money</h3>
                    <form class="form-inline" action="/calculate" method="POST">
{{csrf_field()}}

<input type="number" name="amount" id="amount" class="form-control" placeholder="enter annual income" required >


  <button type="submit" class="btn btn-primary"  class="form-control">Submit</button>

</form>
                    <div class="feature-grids">
                        <div class="col-md-4 fer-grid">
                            <div class="icons">
                                <i class="glyphicon glyphicon-home" aria-hidden="true"></i>
                            </div>
                               
                                <p>If you want to spend 25%</p>
                        </div>
                        <div class="col-md-4 fer-grid">
                            <div class="icons">
                                <i class="glyphicon glyphicon-signal" aria-hidden="true"></i>
                            </div>
                           
                                <p>If you want to spend 30%</p>
                        </div>
                        <div class="col-md-4 fer-grid">
                            <div class="icons">
                                <i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
                            </div>
                               
                                <p>If you want to spend 35%</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="feature-grids">
                        <div class="col-md-4 fer-grid">
                            <div class="icons">
                                <i class="glyphicon glyphicon-globe" aria-hidden="true"></i>
                            </div>
                               
                                <p>If you want to spend 40%</p>
                        </div>
                        <div class="col-md-4 fer-grid">
                            <div class="icons">
                                <i class="glyphicon glyphicon-signal" aria-hidden="true"></i>
                            </div>
                           
                                <p>If you want to spend 45%</p>
                        </div>
                        <div class="col-md-4 fer-grid">
                            <div class="icons">
                                <i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
                            </div>
                               
                                <p>If you want to spend 50%</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            
@endsection