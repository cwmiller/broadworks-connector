<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringIncomingCriteriaGetRequest
 *
 * Get an existing Communication Barring Incoming Criteria.
 *         The response is either a
 *         SystemCommunicationBarringIncomingCriteriaGetResponse or an
 * ErrorResponse.
 *
 * @see SystemCommunicationBarringIncomingCriteriaGetResponse
 * @see ErrorResponse
 */
class SystemCommunicationBarringIncomingCriteriaGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

