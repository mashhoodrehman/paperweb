<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index($slug){
      $xml = simplexml_load_string(file_get_contents(storage_path('xml/datatable.xml')));
      $ord = $xml->xpath("//datatable[@codename='{$slug}']")[0];
      $tablemodel = $ord['model'];
      if(isset($dataparse['path'])){
      $namespaceModel = '\\App\\' . $ord['path']  .  $tablemodel;
      }
      else{
      $namespaceModel = '\\App\\' .  $tablemodel;
      }
      $config = $ord->config[0];
      $columns = $ord->body[0];
      $headers = $ord->header[0];
      $datatable = view('admin.includes.datatable' , compact('columns'  , 'config' , 'slug'))->render();
      $data['headers'] = $headers;
      $data['datatable'] = $datatable;
      $data['slug'] = $slug;
        // $codes = $ord->servertime;
        // foreach ($codes as $key => $value) {
        //     $name = (string) $value['name'];
        //     $code = (string) $value;
        //     $keys[$name] = eval($code);
        // }
        // $json = $namespaceModel::all();
    
        // $table =  \DataTables::of($json);
      return view('admin.crud.index' , $data);
    }


   

    public function dashboard(){
        return view('admin.dashboard');
    }


    public function create($slug){
        $xml = simplexml_load_string(file_get_contents(storage_path('xml/create.xml')));
        $ord = $xml->xpath("//create[@codename='{$slug}']")[0];
        $label = $ord->label[0];
        $inputs = $ord->inputs[0];
        $labeldesc = $ord->labeldesc[0];
        $encytype = $ord['encytype'];

        // if(isset($ord->relations)){
        //     $relations = $ord->relations[0];
        //     foreach ($relations as $key => $value) {
        //         $model = $value->model;
        //         $NamespacedModel = '\\App\\'  .  $model;
        //         $where = [];
        //         if(isset($value->queries)){
        //             foreach ($value->queries as $query) {
        //                 $col = (string) $query;
        //                 $op = (string) $query['op'];
        //                 $valuee = (string) $query['value'];
        //             $where[] = [$col , $op , $valuee];
        //             }
        //         }
        //         $data[(string)$value->variable] =  $NamespacedModel::where($where)->get();
        //     }
        // }
        // $primary = $ord->primary;
        // $push = $ord->push;
        return view('admin.crud.create' , compact('label' , 'inputs' , 'labeldesc' , 'route' , 'encytype' , 'primary' , 'data' , 'push' , 'slug'));
    }

    public function getDataTable($slug){
      $xml = simplexml_load_string(file_get_contents(storage_path('xml/datatable.xml')));
       $ord = $xml->xpath("//datatable[@codename='{$slug}']")[0];
      $tablemodel = $ord['model'];
      if(isset($dataparse['path'])){
      $namespaceModel = '\\App\\' . $ord['path']  .  $tablemodel;
      }
      else{
      $namespaceModel = '\\App\\' .  $tablemodel;
      }
        $json = $namespaceModel::all();
        $table =  \DataTables::of($json);
          $editcolumns =  $ord->code;
          foreach ($editcolumns as $key => $value) {
            $viewname = (string) $value['name'];
            $code = view('admin.includes.datatablecode' , compact('viewname' , 'slug'))->render();
            $columnname = (string) $value['action'];
            $table->addcolumn($columnname , function($json) use ($code) {
                 return $code;
            });
          }
        return $table->make(true);
    }

    public function store(Request $request){
      $slug_xml = $request->slug_xml;
      $xml = simplexml_load_string(file_get_contents(storage_path('xml/create.xml')));
      $ord = $xml->xpath("//create[@codename='{$slug_xml}']")[0];
       $tablemodel = $ord['model'];
      if(isset($dataparse['path'])){
      $namespaceModel = '\\App\\' . $ord['path']  .  $tablemodel;
      }
      else{
      $namespaceModel = '\\App\\' .  $tablemodel;
      }
      $model = new $namespaceModel;
      if(isset($ord['validation'])){
        $validationrule = (string) $ord['validation'];
      $validation = \Validator::make($request->all() ,   $namespaceModel::${$validationrule});
      if ($validation->fails()) {
            return redirect()
            ->back()
                        ->withErrors($validation)
                        ->withInput();
        }
      }
      $inputs = $ord->inputs[0];
      
      foreach ($inputs as $key => $value) {
        if($value->column){
            if($value->input['type'] == "text"){
            $model->{$value->column} = $request->{$value->input['name']};
            }
            if($value->input['type'] == "password"){
              $method = (string) $value->input['method'];
             $model->{$value->column} = $method($request->{$value->input['name']}); 
            }
            if($value->input['type'] == "file"){
                if(isset($value->size)){
                    $size['width'] = $value->size['width'];
                    $size['height'] = $value->size['height'];
                }
                else{
                $size['width'] = 300;
                $size['height'] = 200;
                }
                if($request->{$value->input['name'] }){
                $file = $request->{$value->input['name'] };
                $path = sendImage($request->{$value->input['name']} , $size);
                $model->{$value->column} = $path;
                }
            }
          }
        }
        $model->save();

        return redirect()->back();
      }

      public function edit($slug , $id){
        $xml = simplexml_load_string(file_get_contents(storage_path('xml/create.xml')));
        $ord = $xml->xpath("//create[@codename='{$slug}']")[0];
        $label = $ord->labup[0];
        $inputs = $ord->inputs[0];
        $labeldesc = $ord->labupdesc[0];
        $encytype = $ord['encytype'];
         $tablemodel = $ord['model'];
      if(isset($dataparse['path'])){
      $namespaceModel = '\\App\\' . $ord['path']  .  $tablemodel;
      }
      else{
      $namespaceModel = '\\App\\' .  $tablemodel;
      }
        $primary = (string) $ord->primary;
        $oldValue = $namespaceModel::where($primary , '=' , $id)->first();
        // if(isset($ord->optionalque)){
        //    $oldValue->withoutGlobalScopes();
        // }
        // $oldValue = $oldValue->first();
        // if(isset($ord->relations)){
        //     $relations = $ord->relations[0];
        //     foreach ($relations as $key => $value) {
        //         $model = $value->model;
        //         $NamespacedModel = '\\App\\'  .  $model;
        //         $where = [];
        //         if(isset($value->queries)){
        //             foreach ($value->queries as $query) {
        //                 $col = (string) $query;
        //                 $op = (string) $query['op'];
        //                 $valuee = (string) $query['value'];
        //             $where[] = [$col , $op , $valuee];
        //             }
        //         }
        //         $data[(string)$value->variable] =  $NamespacedModel::where($where)->get();
        //     }
        // }
        // $primary = $ord->primary;
        // $push = $ord->push;
        return view('admin.crud.edit' , compact('label' , 'oldValue'  , 'inputs' , 'labeldesc' , 'route' , 'encytype' , 'primary' , 'data' , 'push' , 'slug'));
    }

      public function update(Request $request){
      $slug_xml = $request->slug_xml;
      $xml = simplexml_load_string(file_get_contents(storage_path('xml/create.xml')));
      $ord = $xml->xpath("//create[@codename='{$slug_xml}']")[0];
       $tablemodel = $ord['model'];
      if(isset($dataparse['path'])){
      $namespaceModel = '\\App\\' . $ord['path']  .  $tablemodel;
      }
      else{
      $namespaceModel = '\\App\\' .  $tablemodel;
      }
      $model = new $namespaceModel;
      if(isset($ord['validation'])){
        $validationrule = (string) $ord['validation'];
      $validation = \Validator::make($request->all() ,   $namespaceModel::${$validationrule});
      if ($validation->fails()) {
            return redirect()
            ->back()
                        ->withErrors($validation)
                        ->withInput();
        }
      }
      $inputs = $ord->inputs[0];
      
      foreach ($inputs as $key => $value) {
        if($value->column){
            if($value->input['type'] == "text"){
            $model->{$value->column} = $request->{$value->input['name']};
            }
            if($value->input['type'] == "password"){
              $method = (string) $value->input['method'];
             $model->{$value->column} = $method($request->{$value->input['name']}); 
            }
            if($value->input['type'] == "file"){
                if(isset($value->size)){
                    $size['width'] = $value->size['width'];
                    $size['height'] = $value->size['height'];
                }
                else{
                $size['width'] = 300;
                $size['height'] = 200;
                }
                if($request->{$value->input['name'] }){
                $file = $request->{$value->input['name'] };
                $path = sendImage($request->{$value->input['name']} , $size);
                $model->{$value->column} = $path;
                }
            }
          }
        }
        $model->save();

        return redirect()->back();
      }

}
