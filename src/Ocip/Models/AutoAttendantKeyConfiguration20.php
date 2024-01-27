<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AutoAttendantKeyConfiguration20
 *
 * The configuration of a key for Auto Attendant.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:701","type":"sequence"}]
 */
class AutoAttendantKeyConfiguration20
{
    /**
     * @ElementName key
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantMenuKey
     * @Group 6337d0cfba4de1c83587203c5b0bae54:701
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantMenuKey|null
     */
    protected $key = null;

    /**
     * @ElementName entry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfigurationEntry20
     * @Group 6337d0cfba4de1c83587203c5b0bae54:701
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfigurationEntry20|null
     */
    protected $entry = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfigurationEntry20
     */
    public function getEntry()
    {
        return $this->entry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entry;
    }

    /**
     * Setter for entry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfigurationEntry20 $entry
     * @return $this
     */
    public function setEntry(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfigurationEntry20 $entry)
    {
        $this->entry = $entry;
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

