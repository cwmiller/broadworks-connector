<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringProfileGetDigitPatternCriteriaUsageListRequest
 *
 * Get the list of Profiles that use a specific Digit Pattern Criteria.
 *         The response is either a SystemCommunicationBarringProfileGetDigitPatternCriteriaUsageListResponse
 *         or an ErrorResponse.
 *
 * @see SystemCommunicationBarringProfileGetDigitPatternCriteriaUsageListResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:6000","type":"sequence"}]
 */
class SystemCommunicationBarringProfileGetDigitPatternCriteriaUsageListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6000
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $name = null;

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

