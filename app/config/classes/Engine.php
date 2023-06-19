<?php

namespace app\config\classes;

class Engine
{
    public function render(string $view, array $data)
    {
        /*
        Iniciando o sistema de template, onde será renderizado
        todas as páginas que estão dentro de: /resources/views*

        Onde também tenho acesso das funções no template dentro dessa classe.
             usando $this->nomeFunção
        */

        $view = dirname(__FILE__, 2)."/resources/views/{$view}.php";

        if (!file_exists($view)) {
            throw new \Exception("View {$view} not found..");
        }

        ob_start();

        extract($data);

        require $view;
        $content = ob_get_contents();

        ob_end_clean();

        return $content;
    }
}
