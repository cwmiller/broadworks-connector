<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDialableCallerIDCriteriaGetRequest
 *
 * Get an existing Dialable Caller ID Criteria.
 *         The response is either a
 *         SystemDialableCallerIDCriteriaGetRequest or an ErrorResponse.
 *
 * @see SystemDialableCallerIDCriteriaGetRequest
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:7534","type":"sequence"}]
 */
class SystemDialableCallerIDCriteriaGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:7534
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

