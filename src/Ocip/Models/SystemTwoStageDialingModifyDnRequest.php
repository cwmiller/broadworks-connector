<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTwoStageDialingModifyDnRequest
 *
 * Request to modify a Two Stage Dialing number's description in the system.
 *           The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"2a1428f64736d8f970ea802e5a73c495:114","type":"sequence"}]
 */
class SystemTwoStageDialingModifyDnRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Group 2a1428f64736d8f970ea802e5a73c495:114
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group 2a1428f64736d8f970ea802e5a73c495:114
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

    /**
     * Getter for phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description = null)
    {
        if ($description === null) {
            $this->description = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->description = $description;
        }
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

