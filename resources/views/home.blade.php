@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">            
                <div class="label"><h1>Здравствуйте, {{ Auth::user()->name}}.</br>Давайте создадим путь!</h1>
                	<H2> <a href="/dota">ПРИСТУПИТЬ!</a></H2>
               </div> 

<!--
            <form action="{{ url('home') }}" method="POST" class="form-horizontal">
      {{ csrf_field() }}

      
      <div class="form-group">
        <label for="dao" class="col-sm-3 control-label"><h3>Придумайте ключ</h3></label>

        <div class="col-sm-8 pb-1">
          <input type="text" name="key" id="dao-key" class="form-control">
        
      </div>
    
     
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
          <button type="submit" class="btn btn-default">
            <i class="fa fa-plus"></i> Погнали!
          </button>
        </div>
      </div>
      </div> </form>-->
            </div>
            
        </div>

@endsection
