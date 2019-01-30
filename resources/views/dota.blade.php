@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">            
          

    <form action="{{ Route('dota.store') }}" method="POST" class="form-horizontal">
      {{ csrf_field() }}

      
      <div class="form-group">
        <label for="dota" class="col-sm-3 control-label"><h3>Откуда</h3></label>

        <div class="col-sm-8 pb-1">
          <input type="text" name="home" id="dota-home" class="form-control" placeholder="{{ session('homea')}}"value="Дом">
        
      </div>
         <div class="col-sm-8 pb-1">
          <input type="text" name="street" id="dota-street" class="form-control" placeholder="{{ session('streeta')}}" value="Улица">
        </div>
      
         <div class="col-sm-8 pb-1">
          <input type="text" name="city" id="dota-city" class="form-control" placeholder="{{ session('sitya')}}" value="Город">
        </div>
      
         <div class="col-sm-8 ">
          <input type="text" name="country" id="dota-country" class="form-control" placeholder="{{ session('countrya')}}" value="Страна">
        </div></br>
     
    
     
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
          <button type="submit" class="btn btn-default">
            <i class="fa fa-plus"></i> Добавить точку А
          </button>
        </div>
      </div>
      </div>
     
    </form>
     
     
               
            </div>
        </div>
    </div>
    </div>
</div>
@endsection