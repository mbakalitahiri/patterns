<?php

interface Observer
{
    public function update(Observable $observable);

}

abstract class Observable
{
    protected $observers = array();

    public function addObserver(Observer $observer)
    {
        array_push($this->observers, $observer);
    }

    public function notifyObservers()
    {
        for ($i = 0; $i < count($this->observers); $i++) {
            $this->observers[$i]->update($this);
        }
    }
}

abstract class AbstractWidget implements Observer
{
    protected $internalData = array();

    public function update(Observable $observable)
    {
        // TODO: Implement update() method.
        $this->internalData = $observable->getData();
    }

    abstract function render();
}

class Widget extends AbstractWidget
{
    public function render()
    {
        // TODO: Implement render() method.
        echo "<h1>{$this->internalData['name']} {$this->internalData['surname']}</h1>";
    }
}

class Datasource extends Observable
{
    private $internalData;

    function __construct()
    {
        $this->internalData["name"] = "mohtadi";
        $this->internalData["surname"] = "bakali tahiri";
    }


    public function getData()
    {
        return $this->internalData;
    }

}

$data = new Datasource();
$widget = new Widget();
$data->addObserver($widget);

$data->getData();
$data->notifyObservers();
$widget->render();
