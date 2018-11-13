<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringCriteriaGetRequest
 *
 * Get an existing Communication Barring Criteria.
 *         The response is either a SystemCommunicationBarringCriteriaGetResponse
 *         or an ErrorResponse.
 *         Replaced by: SystemCommunicationBarringCriteriaGetRequest17
 *
 * @see SystemCommunicationBarringCriteriaGetResponse
 * @see ErrorResponse
 * @see SystemCommunicationBarringCriteriaGetRequest17
 */
class SystemCommunicationBarringCriteriaGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
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

