@extends('layouts.app')

@section('content')
<div class="container">
         <div class="row justify-content-center">  
   
     <form action="{{ Route('dotb.store') }}" method="POST" class="form-horizontal">
      {{ csrf_field() }}

    
      <div class="form-group">
        <label for="dotb" class="col-sm-3 control-label"><h3>Куда</h3></label>

        <div class="col-sm-8 pb-1">
          <input type="text" name="home" id="dotb-home" class="form-control" value="Дом">
        </div>
      
         <div class="col-sm-8 pb-1">
          <input type="text" name="street" id="dotb-street" class="form-control" value="Улица">
        </div>
     
         <div class="col-sm-8 pb-1">
          <input type="text" name="city" id="dotb-city" class="form-control" value="Город">
        </div>
      
         <div class="col-sm-8 ">
          <input type="text" name="country" id="dotb-country" class="form-control" value="Страна">
        </div></br>
      

      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
          <button type="submit" class="btn btn-default">
            <i class="fa fa-plus"></i> Добавить точку Б
          </button>
        </div>
      </div>
    </form>
                    
</div>
@endsection