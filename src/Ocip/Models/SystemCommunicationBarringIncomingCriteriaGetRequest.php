<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringIncomingCriteriaGetRequest
 *
 * Get an existing Communication Barring Incoming Criteria.
 *         The response is either a
 *         SystemCommunicationBarringIncomingCriteriaGetResponse or an ErrorResponse.
 *
 * @see SystemCommunicationBarringIncomingCriteriaGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:5420","type":"sequence"}]
 */
class SystemCommunicationBarringIncomingCriteriaGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group 610f84d3e188f0477c3ae1a82ee036da:5420
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

