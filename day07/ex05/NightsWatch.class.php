<?php
class NightsWatch implements IFighter
{
    public $tab;
    public function recruit($k)
    {
            $this->tab[] = $k;
    }
    public function fight()
    {
        foreach ($this->tab as $f)
            if ($f instanceof IFighter)
                $f->fight();
    }
}
?>