<?php
    /*
     * Base Controller
     * Loads the Models and Views
     */
    class Controller {
        // Load Model
        public function model($model) {
            // Require Model file
            require_once '../app/models/'.$model.'.php';
            // Instantiate Model
            return new $model();
        }

        //Load view
        public function view($view, $data = []) {
            // Check for the view file
            if(file_exists('../app/views/'. $view .'.php')) {
                require_once '../app/views/'. $view .'.php';
            } else {
                die('View does not exist');
            }
        }
    }