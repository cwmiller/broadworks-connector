<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * AutoAttendantKeyReadConfiguration19
 *
 * The read configuration of a key for Auto
 *         Attendant.
 */
class AutoAttendantKeyReadConfiguration19
{

    /**
     * @ElementName key
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantMenuKey|null
     */
    private $key = null;

    /**
     * @ElementName entry
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfigurationReadEntry19|null
     */
    private $entry = null;

    /**
     * Getter for key
     *
     * @ElementName key
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantMenuKey|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Setter for key
     *
     * @ElementName key
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantMenuKey|null $key
     * @return $this
     */
    public function setKey(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantMenuKey $key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * Getter for entry
     *
     * @ElementName entry
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfigurationReadEntry19|null
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * Setter for entry
     *
     * @ElementName entry
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfigurationReadEntry19|null $entry
     * @return $this
     */
    public function setEntry(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantKeyConfigurationReadEntry19 $entry)
    {
        $this->entry = $entry;
        return $this;
    }


}

