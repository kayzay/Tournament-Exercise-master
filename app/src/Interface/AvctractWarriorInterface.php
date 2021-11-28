namespace Tournament\Interface;


abstract class AvctractWarriorInterface {

    protected $_hitPoints;




    public function hitPoints()
    {
        return $this->_hitPoints;
    }


    abstract public function engage(AvctractWarriorInterface $warrior);
}