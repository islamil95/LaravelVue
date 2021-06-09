@extends('layouts.app')

@section('content')
    @extends('layouts.headerMenu')
    <div class="container">
        <div class="row m-0 my-3">
            <b>Добро
                пожаловать @if(!empty($ContentDom)) @foreach ($ContentDom as $val) {{$val['Name']." ".$val['Secondname']}} @endforeach  @endif </b>
        </div>
        <form  method="POST" class="w-100">
        <div class="row my-3" >
            <div class="col-12 col-md-4">
                <label for="surname">Фамилия:</label>
                <input id="surname" name="surname" class="form-control" value="{{$ContentDom["PersoneData"]["Surname"]}}">
            </div>
            <div class="col-12 col-md-4">
                <label for="name">Имя:</label>
                <input id="name" name="name" class="form-control"  value="{{$ContentDom["PersoneData"]["Name"]}}">
            </div>
            <div class="col-12 col-md-4">
            <label for="secondname">Отчество:</label>
            <input id="secondname" name="secondname" class="form-control"  value="{{$ContentDom["PersoneData"]["Secondname"]}}">
            </div>
        </div>
            <div class="row my-3" >
            <div class="col-12 col-md-4">
                <label for="surname">Фамилия:</label>
                <input id="surname" name="surname" class="form-control" value="{{$ContentDom["PersoneData"]["Surname"]}}">
            </div>
            <div class="col-12 col-md-4">
                <label for="name">Имя:</label>
                <input id="name" name="name" class="form-control"  value="{{$ContentDom["PersoneData"]["Name"]}}">
            </div>
            <div class="col-12 col-md-4">
            <label for="secondname">Отчество:</label>
            <input id="secondname" name="secondname" class="form-control"  value="{{$ContentDom["PersoneData"]["Secondname"]}}">
            </div>
        </div>
        </form>
    </div>
@endsection
