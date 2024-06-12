<?php

return response()
    ->view('hello', $data, 200)
    ->header('Content-Type', $type);

?>