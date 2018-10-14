<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterQueueCallDispositionCodeSettingsGetResponse
 *
 * Response to GroupCallCenterQueueCallDispositionCodeSettingsGetRequest.
 *
 * @see GroupCallCenterQueueCallDispositionCodeSettingsGetRequest
 */
class GroupCallCenterQueueCallDispositionCodeSettingsGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableCallDispositionCodes
     * @var bool|null
     */
    private $enableCallDispositionCodes = null;

    /**
     * @ElementName includeOrganizationCodes
     * @var bool|null
     */
    private $includeOrganizationCodes = null;

    /**
     * @ElementName forceUseOfCallDispositionCodes
     * @var bool|null
     */
    private $forceUseOfCallDispositionCodes = null;

    /**
     * @ElementName defaultCallDispositionCode
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeWithLevel|null
     */
    private $defaultCallDispositionCode = null;

    /**
     * Getter for enableCallDispositionCodes
     *
     * @ElementName enableCallDispositionCodes
     * @return bool|null
     */
    public function getEnableCallDispositionCodes()
    {
        return $this->enableCallDispositionCodes;
    }

    /**
     * Setter for enableCallDispositionCodes
     *
     * @ElementName enableCallDispositionCodes
     * @param bool|null $enableCallDispositionCodes
     * @return $this
     */
    public function setEnableCallDispositionCodes($enableCallDispositionCodes)
    {
        $this->enableCallDispositionCodes = $enableCallDispositionCodes;
        return $this;
    }

    /**
     * Getter for includeOrganizationCodes
     *
     * @ElementName includeOrganizationCodes
     * @return bool|null
     */
    public function getIncludeOrganizationCodes()
    {
        return $this->includeOrganizationCodes;
    }

    /**
     * Setter for includeOrganizationCodes
     *
     * @ElementName includeOrganizationCodes
     * @param bool|null $includeOrganizationCodes
     * @return $this
     */
    public function setIncludeOrganizationCodes($includeOrganizationCodes)
    {
        $this->includeOrganizationCodes = $includeOrganizationCodes;
        return $this;
    }

    /**
     * Getter for forceUseOfCallDispositionCodes
     *
     * @ElementName forceUseOfCallDispositionCodes
     * @return bool|null
     */
    public function getForceUseOfCallDispositionCodes()
    {
        return $this->forceUseOfCallDispositionCodes;
    }

    /**
     * Setter for forceUseOfCallDispositionCodes
     *
     * @ElementName forceUseOfCallDispositionCodes
     * @param bool|null $forceUseOfCallDispositionCodes
     * @return $this
     */
    public function setForceUseOfCallDispositionCodes($forceUseOfCallDispositionCodes)
    {
        $this->forceUseOfCallDispositionCodes = $forceUseOfCallDispositionCodes;
        return $this;
    }

    /**
     * Getter for defaultCallDispositionCode
     *
     * @ElementName defaultCallDispositionCode
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeWithLevel|null
     */
    public function getDefaultCallDispositionCode()
    {
        return $this->defaultCallDispositionCode;
    }

    /**
     * Setter for defaultCallDispositionCode
     *
     * @ElementName defaultCallDispositionCode
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeWithLevel|null $defaultCallDispositionCode
     * @return $this
     */
    public function setDefaultCallDispositionCode(\CWM\BroadWorksConnector\Ocip\Models\CallDispositionCodeWithLevel $defaultCallDispositionCode)
    {
        $this->defaultCallDispositionCode = $defaultCallDispositionCode;
        return $this;
    }


}

