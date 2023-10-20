<?php 
class Form {
    private $action;
    private $title;
    private $method;
    private $fields;

    public function __construct($action, $title, $method)
    {
        $this->action = $action;
        $this->title = $title;
        $this->method = $method;
        $this->fields = [];
        
    }

    public function add(Field $field) {
        $this->fields[] = $field;
    }

    public function render() {
        echo "<form ";
        echo " action=\"$this->action\" ";
        echo " method=\"$this->method\">\n";
        echo "<h2>$this->title</h2>";
        foreach($this->fields as $field) {
            $field->render();
        }
        echo "\t <br><input type=\"submit\" value=\"enviar\">\n";
        echo "\t</form>\n";
    }
}