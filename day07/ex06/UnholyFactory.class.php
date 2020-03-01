<?php
class UnholyFactory
{
    public $tab = array();
    public function absorb($elem)
    {
        if($elem instanceof Fighter)
        {
            foreach($this->tab as $search)
            {
                if ($search->type === $elem->type)
                return (print "(Factory already absorbed a fighter of type ".$elem->type.")\n");
            }
            $this->tab[] = $elem;
            print "(Factory absorbed a fighter of type ".$elem->type.")\n";
        }
        else
        return print "(Factory can't absorb this, it's not a fighter)\n";
    }
    public function fabricate($str)
    {
        
    }
    public function array_push($arr, $var)
    {
        $arr[] = $var;
    }
}
?>