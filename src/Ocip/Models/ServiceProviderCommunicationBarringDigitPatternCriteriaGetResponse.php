<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCommunicationBarringDigitPatternCriteriaGetResponse
 *
 * Response to the ServiceProviderCommunicationBarringDigitPatternCriteriaGetRequest.
 *         The response contains the Digit Pattern Criteria information.
 *
 * @see ServiceProviderCommunicationBarringDigitPatternCriteriaGetRequest
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:1660","type":"sequence"}]
 */
class ServiceProviderCommunicationBarringDigitPatternCriteriaGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:1660
     * @var string|null
     */
    private $description = null;

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }


}

