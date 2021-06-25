<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\generatedtest;
use App\Models\Questions;
use App\Models\results;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;

class TestController extends Controller
{
    public $LocalData=null;
    public $LocalError=null;
    public function MetUsersType()
    {
        if(empty(Auth::id())){
          return redirect()->route(view('login'));
        }
    }
    public function GetQuestions($count)
    {
//        При чтении теста, прочест вопросы из базы
//       return   Questions::get()->random($count);
        foreach (Questions::get()->random($count) as $key=>$val) {
            $key++;
            $Question[$key]=$val;
        }
        return $this->LocalData["Questions"]=$Question;
//        Question::orderBy(DB::raw('RAND()'))->take(5)->get();
    }

    public function PullIdQuestions($d,$status)
    {
        $Localid='';
        foreach ($d as $item){
            $Localid.=$status;
        }
        return $Localid;
    }
    public function GetAnswers($qid)
    {
//        return Answers::whereIn('questionid',str_split($qid))->get();
        foreach (Answers::whereIn('questionid',str_split($qid))->get() as $key=>$val) {
            $key++;
            $Answers[$key]=$val;
        }
        return $this->LocalData['Answers']=$Answers;
    }

    public function MetTest()
    {
        $Met=results::where('userid',Auth::id() and 'status',1)->get();
        if($Met){
            //Тут в будущем нужно сделать проверку, если человек обновил страницу а его время теста вышло, то завершить его тест.
            $this->OpenTest($Met->genhash);
        }else{
            $this->NewTest();
        }

    }

    public function OpenTest($h)
    {
        $Questionid=$this->PullIdQuestions($this->GetDataGenerationTest($h),'questionid');
    }
    public function GetDataGenerationTest($h)
    {
        return generatedtest::where('hash',$h)->get();
    }
    public function NewTest()
    {
        $Q=$this->GetQuestions(3);
        $this->GetAnswers($this->PullIdQuestions($Q,'id'));
        $this->create($Q);
    }
    public function create($q)
    {
        try{
            DB::transaction(function () use ($q) {
                $hash=time();
                foreach ($q as $key => $val){
                    generatedtest::create([
                        'questionid'=>$val['id'],
                        'userid'=>Auth::id(),
                        'hash'=>$hash,
                    ]);
                }
            });
            DB::commit();
        }catch (Exception $exception){
            $this->LocalError='Ошибка. Неудалось сгенерировать распределение.';
            DB::rollBack();
            return false;
        }
    }
    public function Get()
    {
        $this->MetUsersType();

        if($this->LocalError==null){
            return response()->json([
                "Questions"=>$this->LocalData["Questions"],
                "Answers"=>$this->LocalData["Answers"],
            ], 200);
        }else{
            return response()->json([
                "error"=>$this->LocalError
            ], 401);
        }
    }
    public function show()
    {
        return view('Test');
    }
    public function instruction()
    {
      return view('TestInstruction');
    }
}
// $products = $art->products->skip(0)->take(10)->get(); //get first 10 rows Для пагинации
//$products = $art->products->offset(0)->limit(10)->get();  Для пагинации

//DB::table('table')->whereIn('id', $ids)
//                  ->whereNotIn('id', $not_ids)        Для условий
//                  ->where('status', 1)
//                  ->get();
