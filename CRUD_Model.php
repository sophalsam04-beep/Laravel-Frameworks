<?php
     //  CRUD Operation
     namespace app\Models\Controller;
     use Illuminate\Http\Request;
     use app\Models\Model;
     use app\Controller\Controller;
     use think\facade\Db;


     class PostController extends Controller{
        // Read
        public function index(){
            $controllers = Controller::latest()->panigate(10);
               return view("controllers.index", compact('controllers'));
        }
        public function create(){
            return view("controllers.create");
        }


     // STORE
      public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string'
        ]);

            Controller::create($validated);

        return redirect()->route("controllers.index")->with("succesfully", "Controller succesfully...!\n");
      }
      
      // SHOW
      public function show(Controller $controller){
            return view("controllers.show", compact('controllers'));
            
      }

      // UPDATE
      public function update(Request $request, Controller $controller){
              $validated = $request->validate([
                'title' => 'required|string|max:255',
                'body' => 'required',
              ]);

              $controllers->update($request->all());

        return redirect()->route("controllers.index")->with("succesfully ! update", "Controller updated succesfully...!\n");

      }


      //DELETE
      public function destroy(Controller $controller){
        $controller->delete();

            return redirect()->route("controllers.index")->with("Succesfully delete", "Deleted succesfully...!\n");
      }



     }








?>
