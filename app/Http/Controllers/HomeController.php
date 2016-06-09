<?php

namespace Hanya\Http\Controllers;

use Hanya\About;
use Hanya\Course;
use Hanya\Culture;
use Hanya\Http\Requests;
use Hanya\Job;
use Hanya\Teacher;
use Hanya\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * 显示汉雅主页
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * 显示关于汉雅页面
     * 
     * @return mixed
     */
    public function showAbout()
    {
        $about = About::first()->body;

        return view('about.show',compact('about'));
    }

    /**
     * 显示招贤纳士页面
     *
     * @return mixed
     */
    public function showJob()
    {
        $job = Job::first()->body;

        return view('job.show',compact('job'));
    }

    /**
     * 显示香道文化页面
     *
     * @return mixed
     */
    public function showCulture()
    {
        $cultures = Culture::orederBy('created_at','desc')->paginate(30);

        return view('culture.index',compact('cultures'));
    }

    /**
     * 显示一条香道文化详情页面
     *
     * @param Culture $culture
     * @return mixed
     */
    public function showCultureDetail(Culture $culture)
    {
        return view('culture.show',compact('culture'));
    }

    /**
     * 显示课程通知页面
     *
     * @return mixed
     */
    public function showCourse()
    {
        $courses = Course::orderBy('created_at','desc')->paginate(30);

        return view('course.index',compact('courses'));
    }

    /**
     * 显示一条课程通知详情页面
     *
     * @param Course $course
     * @return mixed
     */
    public function showCourseDetail(Course $course)
    {
        return view('course.show',compact('course'));
    }

    /**
     * 显示师资力量页面
     *
     * @return mixed
     */
    public function showTeacher()
    {
        $teachers = Teacher::orderBy('is_good')->paginate(9);

        return view('teacher.index',compact('teachers'));
    }

    /**
     * 显示一条师资力量详情页面
     *
     * @param Teacher $teacher
     * @return mixed
     */
    public function showTeacherDetail(Teacher $teacher)
    {
        return view('teacher.show',compact('teacher'));
    }

    /**
     * 显示培训动态页面
     *
     * @return mixed
     */
    public function showTrain()
    {
        $trains = Train::orderBy('created_at','desc')->paginate(30);

        return view('train.index',compact('trains'));
    }

    /**
     * 显示一条培训动态详情页面
     *
     * @param Train $train
     * @return mixed
     */
    public function showTrainDetail(Train $train)
    {
        return view('train.show',compact('train'));
    }
}
