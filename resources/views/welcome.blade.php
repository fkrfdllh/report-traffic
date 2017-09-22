@extends('layouts.app')

@section('title') Report Traffic X Company @endsection

@section('header')
    
    <center><h3>Traffic Report</h3></center>
    <center><h4>X Company</h4></center>

    <br>
    <br>
    <br>

    <div class="container">
      <!-- <form method="post" action=""> -->
          <div class="row" style="max-width: 100%">
              <div class="col" style="float: right; margin-right: -90px">
                  <button type="button" class="btn btn-primary">Filter</button>
              </div>
              <div class="col-md-2" style="float: right; margin-right: -45px">
                  <select class="form-control">
                    <option selected="" disabled="true">Pick One</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">Jule</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                  </select>
              </div>
              <div class="col-md-2" style="float: right; margin-right: -60px">
                  <h4>Choose Month</h4>
              </div>
          </div>
        <!-- </form> -->
    </div>
    
@endsection

@section('content')

    <center>
        {!! $user_agent->html() !!}
    </center>

    <br>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-4 mr-auto" style="margin-left: -80px">
                {!! $url->html() !!}
            </div>

            <div class="col-md-4 mr-auto" style="margin-left: 280px">
                {!! $http_host->html() !!}
            </div>
        </div>
    </div>

@endsection

@section('footer')

  <br>
  <button type="button" class="btn btn-primary btn-lg btn-block">Send Mail</button>

@endsection