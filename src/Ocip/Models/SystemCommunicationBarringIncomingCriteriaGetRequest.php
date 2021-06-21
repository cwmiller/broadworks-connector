<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringIncomingCriteriaGetRequest
 *
 * Get an existing Communication Barring Incoming Criteria.
 *         The response is either a SystemCommunicationBarringIncomingCriteriaGetResponse or an ErrorResponse.
 *         
 *         Replaced by: SystemCommunicationBarringIncomingCriteriaGetRequest22
 *
 * @see SystemCommunicationBarringIncomingCriteriaGetResponse
 * @see ErrorResponse
 * @see SystemCommunicationBarringIncomingCriteriaGetRequest22
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:7563","type":"sequence"}]
 */
class SystemCommunicationBarringIncomingCriteriaGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:7563
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

