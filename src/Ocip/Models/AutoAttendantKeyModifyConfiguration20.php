<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AutoAttendantKeyModifyConfiguration20
 *
 * The modify configuration of a key for Auto Attendant.
 */
class AutoAttendantKeyModifyConfiguration20
{

    /**
     * @ElementName key
     * @var string|null
     */
    private $key = null;

    /**
     * @ElementName entry
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfigurationModifyEntry20|null
     */
    private $entry = null;

    /**
     * Getter for key
     *
     * @ElementName key
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Setter for key
     *
     * @ElementName key
     * @param string|null $key
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * Getter for entry
     *
     * @ElementName entry
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfigurationModifyEntry20|null
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Setter for entry
     *
     * @ElementName entry
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfigurationModifyEntry20|null $entry
     * @return $this
     */
    public function setEntry($entry)
    {
        $this->entry = $entry;
        return $this;
    }


}

