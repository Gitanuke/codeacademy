<?php
// Declare the interface 'iTemplate'
interface iTemplate{
    public function setVariable($name, $var);
    public function getHtml($template);
}
class Template implements iTemplate //is anksto nurodoma kokie kintamieji bus
{
    private $vars = array();

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
       var_dump ($this->vars);
    }

    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }

        return $template;
    }
}

$a = new Template ();
$a ->setVariable ('a', 5);