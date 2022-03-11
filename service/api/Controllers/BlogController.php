<?php 

use App\Database\DB;
use App\Http\Response;

class BlogController { 
   
    public function index() { 
        $blog = DB::query('SELECT a.*, c.cat_name, c.cat_url  
                           FROM articles AS a
                            LEFT JOIN categories AS c
                           ON a.cat_id = c.cat_id');
        
        if(count($blog) > 0) {
            return Response::success($blog, "Get Blogs Successfully.", 200);
        } else {
            return Response::error("Something went wrong please try again!", 400);
        }
        
    }

    public function show() {
        $id = $_GET['id'] ?? null;
        $url = $_GET['url'] ?? null;
        
        if($id && $url) {
            $params = array(
                'article_id' => (int)$id,
                'article_url' => (string)$url
            );

            $blog = DB::query('SELECT * FROM articles 
                              where article_id = :article_id 
                              AND article_url = :article_url', $params);
            if(count($blog) > 0) {
                return Response::success($blog[0],"Get Blogs Successfully.", 200);
            } else {
                return Response::error("Something went wrong please try again!", 400);
            }
            
        } else {
            return Response::error('Bad Request!', 400);
        }
    }
}