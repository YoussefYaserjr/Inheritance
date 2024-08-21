    <?php 
function el() {
    echo "<br>";
}; 
const  pi = 3.141592653589793;
class Circle {
    protected float $radius; 
    protected string $color; 

    public function __construct(float $radius=1,string $color='red'){
                    $this->color = $color;
                    $this->radius = $radius;
    }

    public function getRadius(): float { return $this->radius;}
    public function setRadius(float $radius): void {$this->radius = $radius;}
    
    public function getColor(): string {return $this->color;}
    public function setColor(string $color): void {$this->color=$color;}
    
    public function getArea(): float {return 2*pi*$this->radius;}

                    // public function getArea(): float {
                    //     $area = 2 * pi * $this->radius;
                    //     return (float)number_format($area, 2, '.', '');
                    // }

    public function info():void{
        echo'Circle[radius='.$this->getRadius().','.'color='.$this->getColor().']'.el();

    }
}

class Cylinder extends Circle{
private float $height;
public function __construct(float $radius = 1, float $height = 1, string $color='red') {
                parent::__construct($radius, $color);
                $this->height = $height;
}
public function getHeight():float{return $this->height;}
public function setHeight($height):void{ $this->height=$height;}
public function getVolume():float{return $this->getarea()*$this->height;}

                    //  public function getVolume(): float {
                    //         $Volume =  $this->getarea()*$this->height;
                    //         return (float)number_format($Volume, 2, '.', '');
                    //     }
}
//\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\
$circle = new Circle(5,'blue');
echo'<pre>';
print_r($circle);
echo'</pre>';
$circle->info().el();
echo 'Area= '.$circle->getArea();
el();

$cylinder=new Cylinder(2.5,4,'black');
echo'<pre>';
print_r($cylinder);
echo'</pre>';
$cylinder->info().el();
echo'Volume= '.$cylinder->getVolume();
?>