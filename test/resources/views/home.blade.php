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
        <form  method="POST" action="PersoneData" class="w-100" enctype = "multipart/form-data" >
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
                <input id="datemycreate" type="date" name="datemycreate" class="form-control" value="{{$ContentDom["PersoneData"]["datemycreate"]}}">
            </div>
            <div class="col-12 col-md-4">
                <label for="areas">Район:</label>
                <input id="areas" name="areas" class="form-control"  value="{{$ContentDom["PersoneData"]["Name"]}}">
            </div>
            <div class="col-12 col-md-4">
            <label for="schools">Образовательная организация:</label>
                <select class="form-control" id="schools" name="schools">
                    <option value="0">Выберите школу</option>
                    @foreach($ContentDom['PersoneData']["schools"] as $val)
                         <option @if($ContentDom["PersoneData"]['schoolid']==$val['id']) selected="selected" @endif value="{{$val['id']}}">{{$val['name']}}</option>
                        @endforeach

                </select>
            </div>
        </div>
            <div class="row my-3" >
            <div class="col-12 col-md-4">
                <label for="email">Email:</label>
                <input id="email" name="email" class="form-control" value="{{$ContentDom["PersoneData"]["email"]}}">
            </div>
                <div class="col-12 col-md-8">
                    <label for="file">Загрузить файл:</label>
                    <input id="file" type = "file"    name = "userfile" multiple class = "form-control" style="padding: 3px;  height: auto;">
                </div>
        </div>
            <div class="row my-3" >
                <div class="col-12 col-md-4 d-flex align-items-end my-5 m-md-0">
                    <input id="savedate" name="savedate" class="form-control btn btn-outline-primary "   type='submit' value="Сохранить изменения">
                </div>
            </div>
        </form>
        <div class="row m-0 my-3">
             @if($ContentDom["PersoneData"]["files"])
                @foreach($ContentDom["PersoneData"]["files"] as $items)
                   <img src="{{asset('/storage/img/'.$ContentDom["PersoneData"]["id"].'/'.$items->hash)}}" alt="{{$items->name}}">
{{--                    <a download="{{$items->name}}" href="{{asset('/storage/img/'.$ContentDom["PersoneData"]["id"].'/'.$items->hash)}}" alt="{{$items->name}}">{{$items->name}}</a>--}}
                    @endforeach
            @endif
        </div>
    </div>
@endsection
