<?php

namespace app\controllers;

use app\models\Post;
use Yii;
use app\models\Category;
use yii\data\Pagination;
use yii\web\Controller;
use app\models\ContactForm;
use app\models\Review;
use yii\data\ActiveDataProvider;
use yii\db\ActiveQuery;
use app\widgets\Alert;

class SiteController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
                'layout' => 'clean'
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex ()
    {
        $model = new ContactForm();
        $message = 'Спасибо за ваше сообщение';

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            Yii::$app->getSession()->setFlash('info', $message);

            return $this->refresh();
        }

        return $this->render('index', compact('model', 'message'));
    }

    public function actionAbout()
    {
        $model = new ContactForm();
        $message = 'Спасибо за ваше сообщение';

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            Yii::$app->getSession()->setFlash('info', $message);

            return $this->refresh();
        }

        return $this->render('about', compact('model', 'message'));
    }

    public function actionProjects()
    {
        return $this->render('projects');
    }

    public function actionBlog ()
    {
        $model = new ContactForm();
        $message = 'Спасибо за ваше сообщение';
        $categories = Category::find()->all();
        $query = Post::find()->OrderBy(['id' => SORT_DESC]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            Yii::$app->getSession()->setFlash('info', $message);

            return $this->refresh();
        }

        return $this->render('blog', ['posts' => $posts, 'pages' => $pages, 'categories' => $categories, 'model' => $model, 'message' => $message]);
    }

    public function actionPostSearch()
    {
        $searchModel = $_GET['search'];
        $query = Post::find()->where(['like', 'text', $searchModel])->OrderBy(['id' => SORT_DESC]);
        $categories = Category::find()->all();
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 6]);
        $model = new ContactForm();
        $message = 'Спасибо за ваше сообщение';
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            Yii::$app->getSession()->setFlash('info', $message);

            return $this->refresh();
        }

        return $this->render('postSearch', compact( 'posts', 'pages', 'categories', 'searchModel', 'model', 'message'));
    }

    public function actionCategory($id)
    {
        $model = new ContactForm();
        $message = 'Спасибо за ваше сообщение';
        $categories = Category::find()->all();
        $query = Post::find()->where(['category_id' => $id])->OrderBy(['id' => SORT_DESC]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            Yii::$app->getSession()->setFlash('info', $message);

            return $this->refresh();
        }

        return $this->render('category', compact('posts', 'pages', 'categories', 'model', 'message'));
    }

    public function actionPost($id)
    {
        $model = new ContactForm();
        $message = 'Спасибо за ваше сообщение';
        $categories = Category::find()->all();
        $post = Post::findOne(['id' => $id]);

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            Yii::$app->getSession()->setFlash('info', $message);

            return $this->refresh();
        }

        return $this->render('post', ['post' => $post, 'categories' => $categories, 'model' => $model, 'message' => $message]);
    }

    public function actionReview()
    {
        $model = new ContactForm();
        $message = 'Спасибо за ваше сообщение';
        $q = Review::find()->OrderBy(['id' => SORT_DESC]);
        $pages = new Pagination(['totalCount' => $q->count(), 'pageSize' => 3]);
        $reviews = $q->offset($pages->offset)->limit($pages->limit)->all();

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            Yii::$app->getSession()->setFlash('info', $message);

            return $this->refresh();
        }

        return $this->render('review', compact('reviews', 'pages', 'model', 'message'));
    }

    public function actionCreate()
    {
        $model = new Review();
        $message = 'Спасибо за ваш отзыв';

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('reviewSubmitted');
            Yii::$app->getSession()->setFlash('info', $message);

            return $this->redirect(['review', 'id' => $model->id]);
        }

        return $this->render('create', compact('model', 'message'));
    }


    public function actionContact()
    {
        $model = new ContactForm();
        $message = 'Спасибо за ваше сообщение';

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            Yii::$app->getSession()->setFlash('info', $message);

            return $this->refresh();
        }

        return $this->render('contact', compact('model', 'message'));
    }
}
