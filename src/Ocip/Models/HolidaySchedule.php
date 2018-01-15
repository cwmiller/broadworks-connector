<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * HolidaySchedule
 *
 * Holiday Schedule.
 */
class HolidaySchedule
{

    /**
     * @ElementName type
     * @var string|null
     */
    private $type = null;

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * Getter for type
     *
     * @ElementName type
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Setter for type
     *
     * @ElementName type
     * @param string|null $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


}

