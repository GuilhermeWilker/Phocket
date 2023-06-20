<?php

namespace app\config\classes;

class Engine
{
    private ?string $layout;
    private string $content;
    private array $data;

    private function load()
    {
        return !empty($this->content) ? $this->content : '';
    }

    private function extends(string $view, array $data = [])
    {
        $this->layout = $view;
        $this->data = $data;
    }

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

        if (!empty($this->layout)) {
            $this->content = $content;
            $data = array_merge($this->data, $data);
            $layout = $this->layout;

            $this->layout = null;

            return $this->render($layout, $this->data);
        }

        return $content;
    }
}
