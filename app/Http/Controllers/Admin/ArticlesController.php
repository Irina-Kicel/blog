<?php

namespace App\Http\Controllers\Admin;
//use App\Custom\Classes\Uploader;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests\AdminArticleRequest;
use App\Models\Article;
use App\Models\Category;
//use Faker\Provider\Image;
//use App\Models\Upload;
use App\Models\User;
use Illuminate\Http\Request;

use Config;
use Intervention\Image\ImageCache;


class ArticlesController extends AdminController
{
    protected $articles;
    protected $categories;


    public function __construct(Article $articles, Category $categories) {
        parent::__construct();
        $this->articles = $articles;
        $this->categories = $categories;
    }

    public function index()
    {
        $this->keywords = 'Админ панель по управлению сайтом';
        $this->title = 'Менеджер сайта Кооператив "Локомотив"';
        $articles = Article::all();

        return view('admin.articles_content')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->keywords = 'Админ панель по управлению сайтом';
        $this->title = "Добавить новый материал";


        $categories = $this->getCategories();
        return view('admin.articles_create')
            ->with('categories', $categories);
    }

    public function getArticles()
    {
        $articles = $this->articles->get();
        return $articles;
    }

    public function getCategories()
    {
        $categories = $this->categories->get();
        return $categories;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminArticleRequest $request)
    {
        $data = $request->except('_token', 'image');
        if(empty($data)){
            return ['error' => 'Нет данных'];
        }
        if($request->hasFile('image')) {
            $image = $request->file('image');
        }
       /* dump($image);*/
              if ($image->isValid()) {

                 $str = str_random(8);

                      $obj = new \stdClass;

                      $obj->mini = $str . '_mini.png';
                      $obj->max = $str . '_max.png';
                      $obj->path = $str . '.png';

                     $img = \Intervention\Image\Facades\Image::make($image);

                      $img->fit(Config::get('settings.image')['width'],
                          Config::get('settings.image')['height'])->save(public_path() . '/images/articles/' . $obj->path);

                      $img->fit(Config::get('settings.articles_img')['max']['width'],
                          Config::get('settings.articles_img')['max']['height'])->save(public_path() . '/images/articles/' . $obj->max);

                      $img->fit(Config::get('settings.articles_img')['mini']['width'],
                          Config::get('settings.articles_img')['mini']['height'])->save(public_path() . '/images/articles/' . $obj->mini);

                      $data['img'] = json_encode($obj);
                        $user = User::find(1);

                      $this->articles->fill($data);
                  $res = $user->articles()->save($this->articles);

                  dump($res);
                  }

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

  /*  public function processUpload(Request $request, Uploader $uploader, Upload $uploadModel)
    {
        $rules = [
            'maxSize' => 10 * 1024 * 1024,
            'minSize' => 10 * 1024,
            'allowedExt' => [
                'jpeg',
                'jpg',
                'png',
                'gif',
                'bmp',
                'tiff',
                'pdf'
            ],
            'allowedMime' => [
                'image/jpeg',
                'image/png',
                'image/gif',
                'image/bmp',
                'image/tiff',
                'application/pdf'
            ],
        ];

        if ($uploader->validate($request, 'file', $rules)) {
            $uploadedPath = $uploader->upload('images');

            if ($uploadedPath !== false) {
                $uploadsModel = $uploader->register($uploadModel);
                $uploadedProps = $uploader->getProps();
            }

            return $uploadedPath;
        }
        else {
            dump($uploader->getProps());
            dump($uploader->getErrors());
        }

        //return $uploader->getErrors();
    }*/
}
