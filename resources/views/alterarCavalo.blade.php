@extends('padrao')
@section('content')

<section>
<div class="container cadastroCavalo">
<form class="row g-3" method="post" action="{{route('salvar-banco-cavalo',$registrosCavalos)}}">
  @csrf
  <div class="col-md-12">
  
    <label for="inputModelo" class="form-label">Raça</label>
    <input type="text" name="raca" value="{{old('raca',$registrosCavalos->raca)}}" class="form-control" id="inputModelo" placeholder="">
    @error('raca')
    <div class="text-sm-start text-light"> Preencher o campo "Raça"</div>
    @enderror
  </div>
  
  <div class="col-12">
    <label for="inputMarca" class="form-label">Função</label>
    <input type="text" name="funcao" value="{{old('funcao',$registrosCavalos->funcao)}}" class="form-control" id="inputMarca" placeholder="">
    @error('funcao')
    <div class="text-sm-start text-light"> Preencher o campo "Função"</div>
    @enderror
  </div>
  <div class="col-12">
    <label for="inputAno" class="form-label">Idade</label>
    <input type="text" name="idade" value="{{old('idade',$registrosCavalos->idade)}}" class="form-control" id="inputAno" placeholder="">
    @error('Idade')
    <div class="text-sm-start text-light"> Preencher o campo "Idade"</div>
    @enderror
  </div>
  <div class="col-md-12">
    <label for="inputCor" class="form-label">Pelagem</label>
    <input type="text" name="pelo" value="{{old('pelo',$registrosCavalos->pelo)}}" class="form-control" id="inputCor" placeholder="">
    @error('pelo')
    <div class="text-sm-start text-light"> Preencher o campo "Pelagem"</div>
    @enderror
  </div>
 
  <div class="col-md-12">
    <label for="inputZip" class="form-label">Valor</label>
    <input type="text" name="valor" value="{{old('valor',$registrosCavalos->valor)}}" class="form-control" id="inputZip" placeholder="">
    @error('valor')
    <div class="text-sm-start text-light"> Preencher o campo "Valor"</div>
    @enderror
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</div>
</section>






@endsection