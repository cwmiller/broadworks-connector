<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringDigitPatternCriteriaGetResponse
 *
 * The response to a SystemCommunicationBarringDigitPatternCriteriaGetRequest.
 *
 * @see SystemCommunicationBarringDigitPatternCriteriaGetRequest
 */
class SystemCommunicationBarringDigitPatternCriteriaGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName description
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

    /**
     * @ElementName digitPattern
     * @var string[]
     */
    private $digitPattern = array(
        
    );

    /**
     * Getter for description
     *
     * @ElementName description
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Getter for digitPattern
     *
     * @ElementName digitPattern
     * @return string[]
     */
    public function getDigitPattern()
    {
        return $this->digitPattern;
    }

    /**
     * Setter for digitPattern
     *
     * @ElementName digitPattern
     * @param string[] $digitPattern
     * @return $this
     */
    public function setDigitPattern($digitPattern)
    {
        $this->digitPattern = $digitPattern;
        return $this;
    }

    /**
     * Adder for digitPattern
     *
     * @ElementName digitPattern
     * @param string $digitPattern
     * @return $this
     */
    public function addDigitPattern($digitPattern)
    {
        $this->digitPattern []= $digitPattern;
        return $this;
    }


}

