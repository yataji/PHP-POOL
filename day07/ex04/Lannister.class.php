<?php
class Lannister{
    public function sleepWith($a)
    {
        if (!$a instanceof Lannister)
            return print ("Let's do this.\n");
        if ($this instanceof Jaime && $a instanceof cersei)
            return print "With pleasure, but only in a tower in Winterfell, then.\n";
        return print "Not even if I'm drunk !\n";
    }
}
?>