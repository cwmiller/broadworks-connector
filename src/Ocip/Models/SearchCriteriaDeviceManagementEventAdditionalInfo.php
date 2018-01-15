<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaDeviceManagementEventAdditionalInfo
 *
 * Criteria for searching for a particular additional info of a DeviceManagement
 * event.
 */
class SearchCriteriaDeviceManagementEventAdditionalInfo extends SearchCriteria
{

    /**
     * @ElementName mode
     * @var string|null
     */
    private $mode = null;

    /**
     * @ElementName value
     * @var string|null
     */
    private $value = null;

    /**
     * @ElementName isCaseInsensitive
     * @var bool|null
     */
    private $isCaseInsensitive = null;

    /**
     * Getter for mode
     *
     * @ElementName mode
     * @return string|null
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Setter for mode
     *
     * @ElementName mode
     * @param string|null $mode
     * @return $this
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * Getter for value
     *
     * @ElementName value
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Setter for value
     *
     * @ElementName value
     * @param string|null $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Getter for isCaseInsensitive
     *
     * @ElementName isCaseInsensitive
     * @return bool|null
     */
    public function getIsCaseInsensitive()
    {
        return $this->isCaseInsensitive;
    }

    /**
     * Setter for isCaseInsensitive
     *
     * @ElementName isCaseInsensitive
     * @param bool|null $isCaseInsensitive
     * @return $this
     */
    public function setIsCaseInsensitive($isCaseInsensitive)
    {
        $this->isCaseInsensitive = $isCaseInsensitive;
        return $this;
    }


}

