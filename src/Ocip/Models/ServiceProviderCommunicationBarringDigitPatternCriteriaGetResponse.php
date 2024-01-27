<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCommunicationBarringDigitPatternCriteriaGetResponse
 *
 * Response to the ServiceProviderCommunicationBarringDigitPatternCriteriaGetRequest.
 *         The response contains the Digit Pattern Criteria information.
 *
 * @see ServiceProviderCommunicationBarringDigitPatternCriteriaGetRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:2240","type":"sequence"}]
 */
class ServiceProviderCommunicationBarringDigitPatternCriteriaGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2240
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $description = null;

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

