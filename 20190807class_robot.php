<?PHP

class Robot {
    private $name = " ";
    public function setName($name) {

    }
}

$a = new Robot;
$a->name = 'ロボ太郎';
$b = new Robot;
$b->name = 'ロボ次郎';

echo $a->name;
echo $b->name;