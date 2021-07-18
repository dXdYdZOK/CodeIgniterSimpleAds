<?php

namespace App\Controllers;

class Ads extends BaseController
{
	private $categoriesModel;
	//Текущий список категорий для отображения
	private $categories;
	public function initController($request, $response, $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.: $this->session = \Config\Services::session();
		//Создаем объект модели категорий и сохраняем его в пеперенную объекта контроллера
		$this->categoriesModel=new \App\Models\CategoriesModel();
		$this->categories=$this->categoriesModel->find();
	}
	
	private function display($template,$data)
	{
		echo view('header',['categories'=>$this->categories,'category_id'=>$data['category_id']]);
		echo view($template,$data);
		echo view('footer');
	}
	
    public function index($category_id=false)
    {
		//Создаем объект модели
        $adsModel = new \App\Models\AdsModel();
		//Если задана категория, то добавляем ее в условия
		if($category_id!==false)
			$adsModel->where('category_id',$category_id);
		//Получаем список объявлений
		$ads=$adsModel->findAll();
		//Отправляем объявления в вид и отображаем страницу
		$this->display('ads/list',['ads'=>$ads,'category_id'=>$category_id]);
    }
	
	public function add($category_id)
	{
		//Если отображаем страницу для добавления объявления и ещё не выполнено сохранение
		if($this->request->getMethod()!=="post")
		{
			$this->display('ads/add',['category_id'=>$category_id]);
			return true;
		}
		//Сюда попадаем, если уже нажали кнопку "Сохранить"
		$model = new \App\Models\AdsModel();
		$saveData=$this->request->getPost();
		//Добавляем в данные для сохранения идентификатор категории
		//if($category_id!==false)
			$saveData['category_id']=$category_id;
		//echo view('header',['categories'=>$this->categories]);
		if($model->save($saveData)===false)
			//Если сохранение прошло не удалось, то отображаем ошибки
			$this->display('ads/add',['errors'=>$model->errors(),'category_id'=>$category_id,'data'=>$saveData]);
        else
			//Если сохранено успешно, то отображаем сообщение об успешном сохранении
			$this->display('ads/add_success',['category_id'=>$category_id]);
		//echo view('footer');
	}
}