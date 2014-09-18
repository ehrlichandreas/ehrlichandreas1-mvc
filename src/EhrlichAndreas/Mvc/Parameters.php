<?php 

/**
 *
 * @author Ehrlich, Andreas <ehrlich.andreas@googlemail.com>
 */
class EhrlichAndreas_Mvc_Parameters extends EhrlichAndreas_Util_Array
{

    /**
     * @param string $name
     * @param mixed $default optional default value
     * @return mixed
     */
    public function get($name, $default = null)
    {
        if ($this->offsetExists($name))
        {
            return parent::offsetGet($name);
        }
        
        return $default;
    }

    /**
     * @param string $name
     * @param mixed $value
     * @return EhrlichAndreas_Util_Array
     */
    public function set($name, $value)
    {
        $this[$name] = $value;
        
        return $this;
    }
    
}