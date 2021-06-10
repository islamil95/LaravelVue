@extends('layouts.app')

@section('style')
    @media (min-width: 768px) {
        .container {
             max-width: 800px;
        }
    }
@endsection
@section('content')
    @extends('layouts.headerMenu')
    <div class="container">
        <div class="row m-0 my-3">
            <b>Добро пожаловать @if(!empty($ContentDom)) @foreach ($ContentDom as $val) {{$val['Name']." ".$val['Secondname']}} @endforeach  @endif </b>
        </div>
        <form  method="POST" action="PersoneData" class="w-100">
            @csrf
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
                <label for="datemycreate">Дата рождения:</label>
                <input id="datemycreate" name="datemycreate" class="form-control" value="{{$ContentDom["PersoneData"]["datemycreate"]}}">
            </div>
            <div class="col-12 col-md-4">
                <label for="areas">Район:</label>
                <input id="areas" name="areas" class="form-control"  value="{{$ContentDom["PersoneData"]["Name"]}}">
            </div>
            <div class="col-12 col-md-4">
            <label for="schools">Образовательная организация:</label>
            <input id="schools" name="schools" class="form-control"  value="{{$ContentDom["schools"]["name"]}}">
            </div>
        </div>
            <div class="row my-3" >
            <div class="col-12 col-md-4">
                <label for="email">Email:</label>
                <input id="email" name="email" class="form-control" value="{{$ContentDom["PersoneData"]["email"]}}">
            </div>
            <div class="col-12 col-md-4 d-flex align-items-end my-5 m-md-0">
            <input id="savedate" name="savedate" class="form-control btn btn-outline-primary"   type='submit' value="Сохранить изменения">
            </div>
        </div>
        </form>
    </div>
@endsection
