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
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:9428","type":"sequence"}]
 */
class SystemCommunicationBarringIncomingCriteriaGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName name
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:9428
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $name = null;

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

