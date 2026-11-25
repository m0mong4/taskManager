<?php

class errorController{
    public function error(): void{
        http_response_code(404);
        require __DIR__ . '/../views/404.php';
    }
}
?>