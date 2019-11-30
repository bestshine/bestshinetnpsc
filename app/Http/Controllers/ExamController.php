<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ExamFormRequest;
use App\Http\Requests\ExamUpdateFormRequest;
use App\Repositories\Exam\ExamInterface as ExamInterface;
use App\Repositories\Common\CommonInterface as CommonInterface;
use App\Models\Exam;

class ExamController extends Controller
{

    /**
     * ExamInterface instance
     *
     * @var Interface instance
     * @access protected
     */    
    protected $exam; 

    /**
     * CommonInterface instance
     *
     * @var Interface instance
     * @access protected
     */    
    protected $common;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ExamInterface $exam, CommonInterface $common)
    {
        $this->middleware('admin', ['only' => ['index','create','postExam']]);
        $this->middleware('user', ['only' => ['takeExam']]);
        $this->exam = $exam;
        $this->common = $common;
    }

    /**
     * Display exam details.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $exams = $this->exam->getExams();
        return view('exam.index',compact('exams'));         
    }  

    /**
     * Display exam create form.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $states = $this->common->getAllStates();
        $boards = $this->common->getAllBoards(); 
        $mediums = $this->common->getAllMediums();             
        $mainModules = $this->exam->getActivatedMainModules();
        return view('exam.create',compact('states','boards','mediums','mainModules')); 
    }  

    /**
     * Ajax sub modules by main modules.
     *
     * @param Request $request
     * @return array $subModules
     */
    public function ajaxSubModulesByMainModules(Request $request)
    {   
        $value = $request->all();
        $subModules = $this->exam->ajaxSubModulesByMainModules($value);
        return $subModules;
    }        

    /**
     * Store exam form data.
     *
     * @param ExamFormRequest $request
     * @return Redirect
     */
    public function postExam(ExamFormRequest $request)
    {   
        $value = $request->all();
        $data = $this->exam->store($value);
        return redirect()->route('examIndex')->with('postExamSuccess', $data);       
    }  

    /**
     * Edit exam record.
     *
     * @param string $slug
     * @return \Illuminate\Http\Response
     */
    public function editExam($slug)
    {   
        $result = $this->checkExamModelExistBySlug($slug);
        if($result){
            $exam = $this->exam->edit($slug);
            $subModule = $this->exam->getSubModuleByID($exam->sub_module_id);         
            return view('exam.edit',compact('exam','subModule'));
        }else{
            return redirect()->route('showMessages', ['msg' => '404']);
        }
    } 

    /**
     * Update exam record.
     *
     * @param ExamUpdateFormRequest $request
     * @param string $slug
     * @return Redirect
     */
    public function updateExam(ExamUpdateFormRequest $request, $slug)
    {   
        $value = $request->all();
        $data = $this->exam->update($value,$slug);
        return redirect()->route('examIndex')->with('updateExamSuccess', $data);
    }  

    /**
     * Activate exam record.
     *
     * @param string $slug
     * @return Redirect
     */
    public function activateExam($slug)
    {   
        $data = $this->exam->activate($slug);
        return redirect()->back()->with('activateExamSuccess', $data);
    } 

    /**
     * Deactivate exam record.
     *
     * @param string $slug
     * @return Redirect
     */
    public function deactivateExam($slug)
    {   
        $data = $this->exam->deactivate($slug);
        return redirect()->back()->with('deactivateExamSuccess', $data);
    }           

    /**
     * Delete exam record.
     *
     * @param string $slug
     * @return Redirect
     */
    public function deleteExam($slug)
    {   
        $data = $this->exam->delete($slug);
        if($data == "success"){
            return redirect()->back()->with('deleteExamSuccess', "Exam type has been deleted successfully");
        }else{
            return redirect()->back()->with('deleteExamAlert', "Can't delete parent exam type");
        }
    } 

    /**
     * check exam model exist by slug.
     *
     * @param string $slug
     * @return boolean
     */
    protected function checkExamModelExistBySlug($slug)
    {    
        $exam = Exam::where('slug',$slug)->first();
        return (isset($exam)) ? true : false ;
    }        
}
