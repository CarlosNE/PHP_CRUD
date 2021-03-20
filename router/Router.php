<?php

class Router{
    public array $urlData = [];
    public string $action = '';
    public array $params = [];
    public function __construct()
    {
        if(isset($_GET["action"]))
        {
            $this->urlData = $this->parseURL($_GET["action"]);
            $this->action = $this->urlData["action"];
            if(isset($this->urlData["params"]))
                $this->params = $this->urlData["params"];
        }
    }

    private function parseURL($url): array
    {
        $urlParsed = explode("/",$url);
        $arregloParams["action"] = $urlParsed[0];
        $arregloParams["params"] = isset($urlParsed[1]) ? array_slice($urlParsed,1) : null;
        return $arregloParams;
    }


}