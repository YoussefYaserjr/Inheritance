    <?php 
function el() {
    echo "<br>";
}; 
class person{
    protected string $name;
    protected string $address;
    public function __construct( string $name, string $address ){
        $this->name = $name;
        $this->address = $address;
    }
    public function getname():string{return $this->name;}
    public function setname($name):void{ $this->name=$name;}
    
    public function getaddress():string{return $this->address;}
    public function setaddress($address):void{ $this->address=$address;}

    public function info(){
        echo'Person[name= '.$this->name.',address= '.$this->address.']'.el();
    }
}
class staff extends person{
    private float $pay;
    private string $shcool;
    public function __construct($name,$address,$shcool,$pay){
        parent::__construct($name,$address);
        $this->shcool=$shcool;
        $this->pay=$pay;
    }
    public function getpay():float{return $this->pay;}
    public function setpay($pay):void{ $this->pay=$pay;}
    
    public function getshcool():string{return $this->shcool;}
    public function setshcool($shcool):void{ $this->shcool=$shcool;}

    public function info(){
        echo'[Person[name= '.$this->name.',address= '.$this->address.'],shcool= '.$this->shcool.',pay= '.$this->pay.']'.el();
    }
}
class student extends person{
    private int $year;
    private float $fee;
    private string $program;
    public function __construct($name,$address,$program,$year,$fee){
        parent::__construct($name,$address);
        $this->fee=$fee;
        $this->year=$year;
        $this->program=$program;
    }
    public function getyear():int{return $this->year;}
    public function setyear($year):void{ $this->year=$year;}
    
    public function getfee():float{return $this->fee;}
    public function setfee($fee):void{ $this->fee=$fee;}
    
    public function getprogram():string{return $this->program;}
    public function setprogram($program):void{ $this->program=$program;}


    public function info(){
        echo'[Person[name= '.$this->name.',address= '.$this->address.'],program= '.$this->program.',fee= '.$this->fee.']'.el();
    }
}
//\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\
$father=new person('youssef','giza');
echo'<pre>';
print_r($father);
echo'</pre>';
$father->info();

$st=new staff('ali','alex','salah salem','1500');
echo'<pre>';
print_r($st);
echo'</pre>';
$st->info();

$s=new student('ahmad','cairo','CS','2022','1500');
echo'<pre>';
print_r($s);
echo'</pre>';
$s->info();


?>