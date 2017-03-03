@extends('template')
@section('content')
{!! Html::ul($errors->all()) !!}
{!! Form::open(array('url'=>'nasabah','files'=>'true')) !!}
<table class="table table->bordered">
    
    @include('nasabah.form')
    
    
    <tr> <td colspan="2"> 
        
            {!! Form::submit('simpan data',['class'=>'btn btn-danger btn-sm']) !!}
            {!! link_to('nasabah','Kembali',['class'=>'btn btn-danger btn-sm']) !!}
        
        </td> </tr>
    
</table>
{!! Form::close() !!}
@stop