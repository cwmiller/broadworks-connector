<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDialPlanPolicyGetAccessCodeResponse
 *
 * Response to GroupDialPlanPolicyGetAccessCodeRequest
 */
class GroupDialPlanPolicyGetAccessCodeResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName includeCodeForNetworkTranslationsAndRouting
     * @var bool|null
     */
    private $includeCodeForNetworkTranslationsAndRouting = null;

    /**
     * @ElementName includeCodeForScreeningServices
     * @var bool|null
     */
    private $includeCodeForScreeningServices = null;

    /**
     * @ElementName enableSecondaryDialTone
     * @var bool|null
     */
    private $enableSecondaryDialTone = null;

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * Getter for includeCodeForNetworkTranslationsAndRouting
     *
     * @ElementName includeCodeForNetworkTranslationsAndRouting
     * @return bool|null
     */
    public function getIncludeCodeForNetworkTranslationsAndRouting()
    {
        return $this->includeCodeForNetworkTranslationsAndRouting;
    }

    /**
     * Setter for includeCodeForNetworkTranslationsAndRouting
     *
     * @ElementName includeCodeForNetworkTranslationsAndRouting
     * @param bool|null $includeCodeForNetworkTranslationsAndRouting
     * @return $this
     */
    public function setIncludeCodeForNetworkTranslationsAndRouting($includeCodeForNetworkTranslationsAndRouting)
    {
        $this->includeCodeForNetworkTranslationsAndRouting = $includeCodeForNetworkTranslationsAndRouting;
        return $this;
    }

    /**
     * Getter for includeCodeForScreeningServices
     *
     * @ElementName includeCodeForScreeningServices
     * @return bool|null
     */
    public function getIncludeCodeForScreeningServices()
    {
        return $this->includeCodeForScreeningServices;
    }

    /**
     * Setter for includeCodeForScreeningServices
     *
     * @ElementName includeCodeForScreeningServices
     * @param bool|null $includeCodeForScreeningServices
     * @return $this
     */
    public function setIncludeCodeForScreeningServices($includeCodeForScreeningServices)
    {
        $this->includeCodeForScreeningServices = $includeCodeForScreeningServices;
        return $this;
    }

    /**
     * Getter for enableSecondaryDialTone
     *
     * @ElementName enableSecondaryDialTone
     * @return bool|null
     */
    public function getEnableSecondaryDialTone()
    {
        return $this->enableSecondaryDialTone;
    }

    /**
     * Setter for enableSecondaryDialTone
     *
     * @ElementName enableSecondaryDialTone
     * @param bool|null $enableSecondaryDialTone
     * @return $this
     */
    public function setEnableSecondaryDialTone($enableSecondaryDialTone)
    {
        $this->enableSecondaryDialTone = $enableSecondaryDialTone;
        return $this;
    }

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

