<?php

namespace Hanya\Http\Controllers;

use Hanya\About;
use Hanya\Configuration;
use Hanya\Course;
use Hanya\Culture;
use Hanya\APIResponse;
use Hanya\Http\Requests\LinkFormRequest;
use Hanya\Http\Requests\TeacherRequest;
use Hanya\Job;
use Hanya\Teacher;
use Hanya\Train;
use Illuminate\Http\Request;
use Hanya\Http\Requests\CultureCourseTrainRequest;

class ManagerController extends Controller
{
    use APIResponse;

    /**
     * 权限验证
     * 
     * ManagerController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * 显示后台首页
     * 
     * @return mixed
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * 上传图片
     * 
     * @param Request $request
     * @return array
     */
    public function uploadImage(Request $request)
    {
        $file = $request->file('image');
        $name = sha1(time().$file->getClientOriginalName()).".".$file->getClientOriginalExtension();
        $file->move('uploads', $name);
        $url = '/uploads/' . $name;
        return $this->successResponse([
            'url' => $url
        ]);

    }

    /**
     * 显示香道文化首页
     * 
     * @return mixed
     */
    public function showCulture()
    {
        $cultures = Culture::orderBy('created_at','desc')->paginate();
        $count = Culture::count();

        return view('admin.culture.home',compact('cultures','count'));
    }

    /**
     * 显示香道文化编辑页面
     * 
     * @param Culture $culture
     * @return mixed
     */
    public function showCultureEdit(Culture $culture)
    {
        return view('admin.culture.edit',compact('culture'));
    }

    /**
     * 显示香道文化添加页面
     * 
     * @return mixed
     */
    public function showCultureAdd()
    {
        return view('admin.culture.add');
    }

    /**
     * 显示香道文化详情页面
     * 
     * @param Culture $culture
     */
    public function showCultureDetail(Culture $culture)
    {
        return view('admin.culture.detail',compact('culture'));
    }

    /**
     * 添加一条香道文化的文章
     * 
     * @param CultureCourseTrainRequest $request
     * @return array
     */
    public function addCulture(CultureCourseTrainRequest $request)
    {
        return Culture::create($request->except(['_token','_method'])) ? $this->successResponse('发布成功！','manage/culture') : $this->errorResponse('发布失败！');
    }

    /**
     * 编辑一条香道文化的文章
     * 
     * @param CultureCourseTrainRequest $request
     * @param Culture $culture
     * @return array
     */
    public function editCulture(CultureCourseTrainRequest $request,Culture $culture)
    {
        return $culture->update($request->except(['_token','_method'])) ? $this->successResponse('修改成功！') : $this->errorResponse('修改失败！');
    }

    /**
     * 删除一条香道文化的文章
     * 
     * @param Culture $culture
     * @return array
     * @throws \Exception
     */
    public function deleteCulture(Culture $culture)
    {
        return $culture->delete() ? $this->successResponse(['message' => '删除成功！','num' => Culture::count()]) : $this->errorResponse('删除失败！');
    }

    /**
     * 显示课程通知页面
     *
     * @return mixed
     */
    public function showCourse()
    {
        $courses = Course::orderBy('created_at','desc')->paginate();
        $count = Course::count();
        
        return view('admin.course.home',compact('courses','count'));
    }

    /**
     * 显示课程通知添加页面
     *
     * @return mixed
     */
    public function showCourseAdd()
    {
        return view('admin.course.add');
    }

    /**
     * 显示课程通知编辑页面
     *
     * @param Course $course
     * @return mixed
     */
    public function showCourseEdit(Course $course)
    {
        return view('admin.course.edit',compact('course'));
    }

    /**
     * 显示课程通知详情页面
     *
     * @param Course $course
     * @return mixed
     */
    public function showCourseDetail(Course $course)
    {
        return view('admin.course.detail',compact('course'));
    }

    /**
     * 添加一条课程通知记录
     *
     * @param CultureCourseTrainRequest $request
     * @return array
     */
    public function addCourse(CultureCourseTrainRequest $request)
    {
        return Course::create($request->except(['_token','_method'])) ? $this->successResponse('发布成功！','manage/course') : $this->errorResponse('发布失败！');
    }

    /**
     * 修改一条课程通知记录
     *
     * @param CultureCourseTrainRequest $request
     * @param Course $course
     * @return array
     */
    public function editCourse(CultureCourseTrainRequest $request,Course $course)
    {
        return $course->update($request->except(['_token','_method'])) ? $this->successResponse('修改成功！') : $this->errorResponse('修改失败！');
    }

    /**
     * 删除一条课程通知记录
     * 
     * @param Course $course
     * @return array
     * @throws \Exception
     */
    public function deleteCourse(Course $course)
    {
        return $course->delete() ? $this->successResponse(['message' => '删除成功！','num' => Course::count()]) : $this->errorResponse('删除失败！');
    }

    /**
     * 显示师资力量页面
     *
     * @return mixed
     */
    public function showTeacher()
    {
        $teachers = Teacher::orderBy('created_at','desc')->paginate();
        $count = Teacher::count();

        return view('admin.teacher.home',compact('teachers','count'));
    }

    /**
     * 显示师资力量添加页面
     *
     * @return mixed
     */
    public function showTeacherAdd()
    {
        return view('admin.teacher.add');
    }

    /**
     * 显示师资力量编辑页面
     *
     * @param Teacher $teacher
     * @return mixed
     */
    public function showTeacherEdit(Teacher $teacher)
    {
        return view('admin.teacher.edit',compact('teacher'));
    }

    /**
     * 显示师资力量详情页面
     *
     * @param Teacher $teacher
     * @return mixed
     */
    public function showTeacherDetail(Teacher $teacher)
    {
        return view('admin.teacher.detail',compact('teacher'));
    }

    /**
     * 添加一条师资力量记录
     *
     * @param TeacherRequest $request
     * @return array
     */
    public function addTeacher(TeacherRequest $request)
    {
        return Teacher::create($request->except(['_token','_method'])) ? $this->successResponse('发布成功！','manage/teacher') : $this->errorResponse('发布失败！');
    }

    /**
     * 编辑一条师资力量记录
     *
     * @param TeacherRequest $request
     * @param Teacher $teacher
     * @return array
     */
    public function editTeacher(TeacherRequest $request,Teacher $teacher)
    {
        return $teacher->update($request->except(['_token','_method'])) ? $this->successResponse('修改成功！') : $this->errorResponse('修改失败！');
    }

    /**
     * 删除一条师资力量记录
     *
     * @param Teacher $teacher
     * @return array
     * @throws \Exception
     */
    public function deleteTeacher(Teacher $teacher)
    {
        return $teacher->delete() ? $this->successResponse(['message' => '删除成功！','url' => Teacher::count()]) : $this->errorResponse('删除失败！');
    }

    /**
     * 显示培训动态页面
     *
     * @return mixed
     */
    public function showTrain()
    {
        $trains = Train::orderBy('created_at','desc')->paginate();
        $count = Train::count();
        
        return view('admin.train.home',compact('trains','count'));
    }

    /**
     * 显示培训动态添加页面
     *
     * @return mixed
     */
    public function showTrainAdd()
    {
        return view('admin.train.add');
    }

    /**
     * 显示培训动态编辑页面
     *
     * @param Train $train
     * @return mixed
     */
    public function showTrainEdit(Train $train)
    {
        return view('admin.train.edit',compact('train'));
    }

    /**
     * 显示培训动态详情页面
     *
     * @param Train $train
     * @return mixed
     */
    public function showTrainDetail(Train $train)
    {
        return view('admin.train.detail',compact('train'));
    }

    /**
     * 添加一条培训动态记录
     *
     * @param CultureCourseTrainRequest $request
     * @return array
     */
    public function addTrain(CultureCourseTrainRequest $request)
    {
        return Train::create($request->except(['_token','_method'])) ? $this->successResponse('发布成功！','manage/train') : $this->errorResponse('发布失败！');
    }

    /**
     * 编辑一条培训动态记录
     *
     * @param CultureCourseTrainRequest $request
     * @param Train $train
     * @return array
     */
    public function editTrain(CultureCourseTrainRequest $request,Train $train)
    {
        return $train->update($request->except(['_token','_method'])) ? $this->successResponse('修改成功！') : $this->errorResponse('修改失败！');
    }

    /**
     * 删除一条培训动态记录
     *
     * @param Train $train
     * @return array
     * @throws \Exception
     */
    public function deleteTrain(Train $train)
    {
        return $train->delete() ? $this->successResponse(['message' => '删除成功！','num' => Train::count()]) : $this->errorResponse('删除失败！');
    }

    /**
     * 显示关于汉雅页面
     * 
     * @return mixed
     */
    public function showAbout()
    {
        $about = About::first();

        return view('admin.about.home',compact('about'));
    }

    /**
     * 显示关于汉雅编辑页面
     * 
     * @return mixed
     */
    public function showAboutEdit()
    {
        $about = About::first();

        return view('admin.about.edit',compact('about'));
    }

    /**
     * 编辑关于汉雅
     * 
     * @param Request $request
     * @return array
     */
    public function editAbout(Request $request)
    {
        $this->validate($request,[
            'body' => 'required'
        ]);
        $about = About::first();
        $about->body = $request->input('body');

        return $about->save() ? $this->successResponse('修改成功！') : $this->errorResponse('修改失败！');
    }

    /**
     * 显示招贤纳士页面
     * 
     * @return mixed
     */
    public function showJob()
    {
        $job = Job::first();

        return view('admin.job.home',compact('job'));
    }

    /**
     * 显示招贤纳士编辑页面
     * 
     * @return mixed
     */
    public function showJobEdit()
    {
        $job = Job::first();

        return view('admin.job.edit',compact('job'));
    }

    /**
     * 编辑招贤纳士
     * 
     * @param Request $request
     * @return array
     */
    public function editJob(Request $request)
    {
        $this->validate($request,[
            'body' => 'required'
        ]);
        $job = Job::first();
        $job->body = $request->input('body');

        return $job->save() ? $this->successResponse('修改成功！') : $this->errorResponse('修改失败！');
    }

    /**
     * 显示友情链接页面
     * 
     * @return mixed
     */
    public function showLink()
    {
        $links = Configuration::link()->captions;
        $count = count($links)-1;
        
        return view('admin.link.home',compact('links','count'));
    }

    /**
     * 显示友情链接添加页面
     * 
     * @return mixed
     */
    public function showLinkAdd()
    {
        return view('admin.link.add');
    }

    /**
     * 显示友情链接编辑页面
     * 
     * @param $id
     * @return mixed
     */
    public function showLinkEdit($id)
    {
        $link = Configuration::link()->captions[$id];

        return view('admin.link.edit',compact('link'));
    }

    /**
     * 添加一条友情链接
     * 
     * @param LinkFormRequest $request
     * @return array
     */
    public function addLink(LinkFormRequest $request)
    {
        $links = Configuration::link();
        array_push($links->captions,$request->except(['_token','_method']));
        
        return Configuration::link($links) ? $this->successResponse('添加成功！','manage/link') : $this->errorResponse('添加失败！');
    }

    /**
     * 编辑一条友情链接
     * 
     * @param LinkFormRequest $request
     * @param $id
     * @return array
     */
    public function editLink(LinkFormRequest $request,$id)
    {
        $links = Configuration::link();
        $links->captions[$id]->name = $request->input('name');
        $links->captions[$id]->link = $request->input('link');
        
        return Configuration::link($links) ? $this->successResponse('修改成功！') : $this->errorResponse('修改失败！');
    }

    /**
     * 删除一条友情链接
     * 
     * @param $id
     * @return array
     */
    public function deleteLink($id)
    {
        $links = Configuration::link();
        unset($links->captions[$id]);
        $links->captions = array_flatten($links->captions);
        $count = count($links->captions);

        return Configuration::link($links) ? $this->successResponse(['message' => '删除成功！','num' => $count]) : $this->errorResponse('删除失败！');
    }
}
