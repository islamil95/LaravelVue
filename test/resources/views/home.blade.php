@extends('layouts.app')

@section('headerlink')
    <script src="{{asset('storage/fancybox/JQuery.js')}}"></script>
    <link rel="stylesheet" href="{{asset('storage/fancybox/fancybox.css')}}"/>
    <script src="{{asset('storage/fancybox/fancybox.js')}}"></script>

@endsection
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
            <b>Добро
                пожаловать @if(!empty($ContentDom)) @foreach ($ContentDom as $val) {{$val['Name']." ".$val['Secondname']}} @endforeach  @endif </b>
        </div>
        <form method="POST" action="PersoneData" class="w-100" enctype="multipart/form-data">
            @csrf
            <div class="row my-3">
                <div class="col-12 col-md-4">
                    <label for="surname">Фамилия:</label>
                    <input id="surname" name="surname" class="form-control"
                           value="{{$ContentDom["PersoneData"]["Surname"]}}">
                </div>
                <div class="col-12 col-md-4">
                    <label for="name">Имя:</label>
                    <input id="name" name="name" class="form-control" value="{{$ContentDom["PersoneData"]["Name"]}}">
                </div>
                <div class="col-12 col-md-4">
                    <label for="secondname">Отчество:</label>
                    <input id="secondname" name="secondname" class="form-control"
                           value="{{$ContentDom["PersoneData"]["Secondname"]}}">
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12 col-md-4">
                    <label for="datemycreate">Дата рождения:</label>
                    <input id="datemycreate" type="date" name="datemycreate" class="form-control"
                           value="{{$ContentDom["PersoneData"]["datemycreate"]}}">
                </div>
                <div class="col-12 col-md-4">
                    <label for="areas">Район:</label>
                    <input id="areas" name="areas" class="form-control" value="{{$ContentDom["PersoneData"]["Name"]}}">
                </div>
                <div class="col-12 col-md-4">
                    <label for="schools">Образовательная организация:</label>
                    <select class="form-control" id="schools" name="schools">
                        <option value="0">Выберите школу</option>
                        @foreach($ContentDom['PersoneData']["schools"] as $val)
                            <option @if($ContentDom["PersoneData"]['schoolid']==$val['id']) selected="selected"
                                    @endif value="{{$val['id']}}">{{$val['name']}}</option>
                        @endforeach

                    </select>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12 col-md-4">
                    <label for="email">Email:</label>
                    <input id="email" name="email" class="form-control" value="{{$ContentDom["PersoneData"]["email"]}}">
                </div>
                <div class="col-12 col-md-8">
                    <label for="file">Загрузить файл:</label>
                    <input id="file" type="file" name="userfile[]" multiple class="form-control"
                           style="padding: 3px;  height: auto;">
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12 col-md-4 d-flex align-items-end my-5 m-md-0">
                    <input id="savedate" name="savedate" class="form-control btn btn-outline-primary " type='submit'
                           value="Сохранить изменения">
                </div>
            </div>
        </form>
        <div class="row m-0 my-3 w-100 ">
            @if($ContentDom["PersoneData"]["files"])
                <div class="row px-3 py-2 ">
                    <h3 class="border-bottom pb-2">Загруженные файлы:</h3>
                </div>
                <form method="POST" class="w-100" action="{{route('deletepersonefile')}}">

                    @csrf
                    <div class="row row-cols-1 row-cols-md-4">
                        @foreach($ContentDom["PersoneData"]["files"] as $items)
                            <div class="col my-3 ">
                                <div class="card   ">
                                    <a @if(in_array($items->ext,array('png','jpg','jpeg','PNG'))) data-fancybox="gallery"
                                       @else class="p-2" download='{{$items->name}}' target='_blank'
                                       @endif  href="{{asset('/storage/img/'.$ContentDom["PersoneData"]["id"].'/'.$items->hash)}}">
                                        @if(in_array($items->ext,array('png','jpg','jpeg','PNG')))
                                            <img class="w-100"
                                                 src="{{asset('/storage/img/'.$ContentDom["PersoneData"]["id"].'/'.$items->hash)}}"
                                                 alt="{{$items->name}}">
                                        @else
                                            {{$items->name}}
                                        @endif

                                    </a>
                                </div>
                                <button type="submit" name="id"  value="{{$items->id}}" class="form-control btn btn-outline-danger btn-sm">Удалить</button>
                            </div>
                            {{--                    <a download="{{$items->name}}" href="{{asset('/storage/img/'.$ContentDom["PersoneData"]["id"].'/'.$items->hash)}}" alt="{{$items->name}}">{{$items->name}}</a>--}}
                        @endforeach
                    </div>
                </form>
            @endif
        </div>

    </div>
@endsection
