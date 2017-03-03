@extends('template')
@section('content')
<div class="col-sm-6">
<table class="table table-bordered">

    <tr>
    
    <td width='120'>No Rekening</td>
     <td> {{ $nasabah->no_rekening }} </td>
        
        <td rowspan="3">
            <img src="{{ asset('foto/'.$nasabah->foto) }}" width="200" >
        </td>
        
    </tr>

     <tr>
    
    <td>Nama </td>
     <td> {{ $nasabah->nama_lengkap }} </td>
        
    
    </tr>
    
     <tr>
    
    <td>Alamat</td>
     <td> {{ $nasabah->alamat }} </td>
        
    
    </tr>
    
    <tr>
    
    <td>Saldo</td>
     <td colspan="2"> {{ $nasabah->saldo }} </td>
        
    
    </tr>
    
    
    
</table>
    </div>
    
<div class="col-sm-6">
    
    {!! Form::open(array('url'=>'nasabah/transaksi'))!!}
    {!! Form::hidden('nasabah_id',$nasabah->id) !!}
    
    <table class="table table-bordered">

    <tr>
    <td colspan='2'>Transaksi</td>        
    </tr>

     <tr>
    <td>Total Transaksi </td>
     <td>{!! Form::text('total',null,['class'=>'form-control']) !!}</td>
    </tr>
    
     <tr>   
    <td>Jenis Transaksi</td>
     <td>{!! Form::select('jenis_transaksi',array('kredit'=>'KREDIT','debet'=>'DEBET'),'',['class'=>'form-control']) !!}</td>
    </tr>
        
    <tr>
    <td colspan='2'>{!! Form::submit('simpan',['class'=>'btn btn-danger btn-sm']) !!}</td>        
    </tr>
        
</table>
    
    <?php
        if(Session::has('message'))
        {
            echo "<p>".Session::get('message')."</p>";
        }
    ?>
    
    
    
{!! Form::close() !!}
    
</div>

<div class="col-sm-12">
    
    <table class="table table-bordered">
    
    <tr>
        
        <th>Tanggal</th>
        <th>Jenis Transaksi</th>
        <th>Jumlah</th>
        <th>Operator</th>
        
        
        </tr>
        @foreach($transaksi as $t)
        
        <tr>
            <td>  {{ tgl_indo($t->created_at) }}  </td>
            <td>  {{ $t->jenis_transaksi }}  </td>
            <td>  {{ $t->total }}   </td>
            <td>  {{ $t->name }}  </td>
            
        </tr>
        
        @endforeach
    </table>
</div>
    
    

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@stop