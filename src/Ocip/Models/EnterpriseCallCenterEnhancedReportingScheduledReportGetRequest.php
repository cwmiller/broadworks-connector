<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterEnhancedReportingScheduledReportGetRequest
 *
 * Request to get an enterprise level call center reporting scheduled report.
 *         The response is either an EnterpriseCallCenterEnhancedReportingScheduledReportGetResponse or an ErrorResponse.
 *
 * @see EnterpriseCallCenterEnhancedReportingScheduledReportGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:1714","type":"sequence"}]
 */
class EnterpriseCallCenterEnhancedReportingScheduledReportGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:1714
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName name
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:1714
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $name = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }
}

