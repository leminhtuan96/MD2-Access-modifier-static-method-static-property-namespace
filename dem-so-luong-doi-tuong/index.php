<?php

class Application
{
    private string $name;
    public static int $count = 0;

    public function __construct(string $name)
    {
        $this->name = $name;
        self::$count++;
    }

    public function __toString(): string
    {
        return 'Application name: ' . $this->name;
    }
}

echo "Total objects count: " . Application::$count . "<br/>";//đếm count = 0 hiển thị ra


$app1 = new Application('tuan');
echo "Total objects count: " . Application::$count . "<br/>";//đếm count = 1 hiển thị ra



$app2 = new Application('nhung');
echo "Total objects count: " . Application::$count . "<br/>";//đếm count = 2 hiển thị ra



echo $app1 ."<br>";
echo $app2 ."<br>";
