<?php

interface  IPrintable
{
    public function print();
}

class  Printer
{
    public function perform(IPrintable $printable)
    {
      return  $printable->print();
    }
}

class Image implements IPrintable {
    public function print()
    {
        // TODO: Implement print() method.
        return "Hi, i am an Image";
    }
}

class CV implements IPrintable {
    public function print()
    {
        // TODO: Implement print() method.
        return "Hi, i am an CV";
    }
}

$xerox = new Printer();
echo  $xerox->perform(new CV());
