@extends('layouts.main')

@section('title','Crie um evento')

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu evento</h1>
    <form action="/evento" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
        </div>

        <div class="form-group">
            <label for="title">Cidade</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Nome do evento">
        </div>

        <div class="form-group">
            <label for="title">Local</label>
            <input type="text" class="form-control" id="locale" name="locale" placeholder="Nome do evento">
        </div>

        <div class="form-group">
            <label for="title">O evento é privado ?</label>
            <select type="text" class="form-control" id="private" name="private" placeholder="Nome do evento">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>

        <div class="form-group">
            <label for="title">Local</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descrição do evento">Descrição</textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar evento">
        </div>
    </form>
</div>
@endsection