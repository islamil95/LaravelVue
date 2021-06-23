@extends('layouts.app')

@section('style')
    body{
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    }
    @endsection
@section('content')
    <div class="container border mt-3" id="TestBigBlock">
        <div class="row m-0 my-3 w-100">
            <div class="col-12 col-md-10 ">
                <h2><b>Тестирование</b></h2>
            </div>
            <div class="col-12 col-md-2 text-right">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Завершить</button>
            </div>
        </div>
        <div class="row m-0 my-3 w-100">
            <div class="col-12" style="font-size: 20;">
                <b>ФИО:</b><span id="fio"> Тестовый слушатель </span>
            </div>
        </div>
        <div class="row m-0 my-3 w-100">
            <div class="col-12" style="font-size: 20;">
                <b>Программа:</b><span id="ProgrammName"> Основы вожатской деятельности</span>
            </div>
        </div>
        <div class="row m-0 my-3 w-100 border-bottom pb-4">
            <div class="col-12 text-center" style="font-size: 20;    align-items: center;  display: flex; justify-content: center;">
                <span class="mr-3">Время завершения теста: </span><b><span style="font-size: 30;" id="time">29:40</span></b>
            </div>
        </div>
        <div class="row m-0 my-3 w-100">
            <div class="col-12" style="font-size: 20;">
                <nav aria-label="...">
                    <ul class="pagination pagination-sm" id="PaginationNumberBlock">
                         @for($i=1; $i<=10;$i++)
                            <li class="PaginationQuestionsBlock  page-item @if($i==1) active @endif"><a tabindex="1" class="PaginationQuestions page-link" quid="149" href="#">{{$i}}</a></li>
                             @endfor
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row m-0 my-3 w-100" id="RowBlockQuestions">
            <div class="row w-100 m-0 BlockQuestionsBig  d-flex " quid="149" pagequestion="1">
                <div class="row w-100 m-0 mt-3 mb-5 BlockQuestions">
                    <div class="col-12">Первый вопрос</div>
                </div>
                <div class="row w-100 m-0 BlockAnswers"><div class="row m-0 w-100 d-flex align-items-center my-2">
                        <div class=" col-1  text-center">
                            <input typeanswers="2" id="48" name="149" type="checkbox" class="Answers w-100" onkeypress="return event.charCode == 44 || event.charCode >= 48 &amp;&amp; event.charCode <= 57 || event.charCode == 45" quid="149" style=" width: 62px; height: 33px;  cursor: pointer;">
                        </div>
                        <div class="col-11">
                            <label class="w-100" for="149" style="cursor: pointer;">1</label>
                        </div>
                    </div><div class="row m-0 w-100 d-flex align-items-center my-2">
                        <div class=" col-1  text-center">
                            <input typeanswers="2" id="49" name="149" type="checkbox" class="Answers w-100" onkeypress="return event.charCode == 44 || event.charCode >= 48 &amp;&amp; event.charCode <= 57 || event.charCode == 45" quid="149" style=" width: 62px; height: 33px;  cursor: pointer;">
                        </div>
                        <div class="col-11">
                            <label class="w-100" for="149" style="cursor: pointer;">2</label>
                        </div>
                    </div><div class="row m-0 w-100 d-flex align-items-center my-2">
                        <div class=" col-1  text-center">
                            <input typeanswers="2" id="50" name="149" type="checkbox" class="Answers w-100" onkeypress="return event.charCode == 44 || event.charCode >= 48 &amp;&amp; event.charCode <= 57 || event.charCode == 45" quid="149" style=" width: 62px; height: 33px;  cursor: pointer;">
                        </div>
                        <div class="col-11">
                            <label class="w-100" for="149" style="cursor: pointer;">3</label>
                        </div>
                    </div><div class="row m-0 w-100 d-flex align-items-center my-2">
                        <div class=" col-1  text-center">
                            <input typeanswers="2" id="51" name="149" type="checkbox" class="Answers w-100" onkeypress="return event.charCode == 44 || event.charCode >= 48 &amp;&amp; event.charCode <= 57 || event.charCode == 45" quid="149" style=" width: 62px; height: 33px;  cursor: pointer;">
                        </div>
                        <div class="col-11">
                            <label class="w-100" for="149" style="cursor: pointer;">4</label>
                        </div>
                    </div><div class="row m-0 w-100 d-flex align-items-center my-2">
                        <div class=" col-1  text-center">
                            <input typeanswers="2" id="52" name="149" type="checkbox" class="Answers w-100" onkeypress="return event.charCode == 44 || event.charCode >= 48 &amp;&amp; event.charCode <= 57 || event.charCode == 45" quid="149" style=" width: 62px; height: 33px;  cursor: pointer;">
                        </div>
                        <div class="col-11">
                            <label class="w-100" for="149" style="cursor: pointer;">5</label>
                        </div>
                    </div><div class="row m-0 w-100 d-flex align-items-center my-2">
                        <div class=" col-1  text-center">
                            <input typeanswers="2" id="53" name="149" type="checkbox" class="Answers w-100" onkeypress="return event.charCode == 44 || event.charCode >= 48 &amp;&amp; event.charCode <= 57 || event.charCode == 45" quid="149" style=" width: 62px; height: 33px;  cursor: pointer;">
                        </div>
                        <div class="col-11">
                            <label class="w-100" for="149" style="cursor: pointer;">6</label>
                        </div>
                    </div></div>
            </div>


            <div class="row w-100 m-0 BlockQuestionsBig  d-none " quid="151" pagequestion="3">
                <div class="row w-100 m-0 mt-3 mb-5 BlockQuestions">
                    <div class="col-12">Третий вопрос</div>
                </div>
                <div class="row w-100 m-0 BlockAnswers"><div class="row m-0 w-100 d-flex align-items-center my-2">
                        <div class=" col-1  text-center">
                            <input typeanswers="1" id="55" name="151" type="radio" class="Answers w-100" onkeypress="return event.charCode == 44 || event.charCode >= 48 &amp;&amp; event.charCode <= 57 || event.charCode == 45" quid="151" style=" width: 62px; height: 33px;  cursor: pointer;">
                        </div>
                        <div class="col-11">
                            <label class="w-100" for="151" style="cursor: pointer;">1</label>
                        </div>
                    </div><div class="row m-0 w-100 d-flex align-items-center my-2">
                        <div class=" col-1  text-center">
                            <input typeanswers="1" id="56" name="151" type="radio" class="Answers w-100" onkeypress="return event.charCode == 44 || event.charCode >= 48 &amp;&amp; event.charCode <= 57 || event.charCode == 45" quid="151" style=" width: 62px; height: 33px;  cursor: pointer;">
                        </div>
                        <div class="col-11">
                            <label class="w-100" for="151" style="cursor: pointer;">2</label>
                        </div>
                    </div><div class="row m-0 w-100 d-flex align-items-center my-2">
                        <div class=" col-1  text-center">
                            <input typeanswers="1" id="57" name="151" type="radio" class="Answers w-100" onkeypress="return event.charCode == 44 || event.charCode >= 48 &amp;&amp; event.charCode <= 57 || event.charCode == 45" quid="151" style=" width: 62px; height: 33px;  cursor: pointer;">
                        </div>
                        <div class="col-11">
                            <label class="w-100" for="151" style="cursor: pointer;">3</label>
                        </div>
                    </div></div>
            </div>

            <div class="row w-100 m-0 BlockQuestionsBig  d-none " quid="152" pagequestion="4">
                <div class="row w-100 m-0 mt-3 mb-5 BlockQuestions">
                    <div class="col-12">Четвертый вопрос</div>
                </div>
                <div class="row w-100 m-0 BlockAnswers"><div class="row m-0 w-100 d-flex align-items-center my-2">
                        <div class=" col-12  text-center">
                            <input typeanswers="3" id="54" name="152" type="text" class="Answers w-100" onkeypress="return event.charCode == 44 || event.charCode >= 48 &amp;&amp; event.charCode <= 57 || event.charCode == 45" quid="152" style=" width: 62px; height: 33px;  cursor: pointer;">
                        </div>
                        <div class="col-11">
                            <label class="w-100" for="152" style="cursor: pointer;"></label>
                        </div>
                    </div></div>
            </div>




        </div>
        <div class="row m-0 my-3 w-100">
            <div class="col-12" style="font-size: 20;">
                <button pagequestion="1" quid="1" type="button" class="btn btn-primary px-5 py-2 SaveAnswersButton">Ответить</button>
            </div>
        </div>

    </div>
@endsection
