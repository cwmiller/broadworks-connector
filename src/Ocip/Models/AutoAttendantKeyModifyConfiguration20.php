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
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantMenuKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantMenuKey|null
     */
    private $key = null;

    /**
     * @ElementName entry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfigurationModifyEntry20
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfigurationModifyEntry20|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $entry = null;

    /**
     * Getter for key
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantMenuKey
     */
    public function getKey()
    {
        return $this->key instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->key;
    }

    /**
     * Setter for key
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantMenuKey $key
     * @return $this
     */
    public function setKey(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantMenuKey $key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetKey()
    {
        $this->key = null;
        return $this;
    }

    /**
     * Getter for entry
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfigurationModifyEntry20|null
     */
    public function getEntry()
    {
        return $this->entry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entry;
    }

    /**
     * Setter for entry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfigurationModifyEntry20|null $entry
     * @return $this
     */
    public function setEntry(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfigurationModifyEntry20 $entry)
    {
        if ($entry === null) {
            $this->entry = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->entry = $entry;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntry()
    {
        $this->entry = null;
        return $this;
    }


}

