<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringProfileGetDigitPatternCriteriaUsageListRequest
 *
 * Get the list of Profiles that use a specific Digit Pattern Criteria.
 *         The response is either a
 *        
 * SystemCommunicationBarringProfileGetDigitPatternCriteriaUsageListResponse
 *         or an ErrorResponse.
 */
class SystemCommunicationBarringProfileGetDigitPatternCriteriaUsageListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


}

